<?php

namespace Modules\PorductListing\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;
use App\Category;
use App\Brand;
use App\Product;
use App\ProductImage;
use App\ProductSizeColor;
use App\GeneralStore;
use App\GeneralContact;
use App\HelpPage;

class PorductListingController extends Controller
{
   
    public function index()
    {
        $all_category = Category::where('parent_id',0)->get();
        $all_brand = Brand::take(10)->where('logo','!=',' ')->get();
        $all_product = Product::leftJoin('product_category','product_master.id','product_category.product_id')
        ->join('category','product_category.category_id','category.cat_id')
        ->select('category.name as cat_nm','product_master.name as p_nm','product_master.*','category.*')
        ->paginate(4);
        return view('porductlisting::index',compact('all_category','all_brand','all_product'));
    }

    public function SubCategory(Request $request, $subcat)
    {   
        if(request()->ajax())
        {
            $all_product = Product::leftJoin('product_category','product_master.id','=','product_category.product_id')
            ->join('category','product_category.category_id','=','category.cat_id')
            ->where('product_master.brand_id',$subcat)
            ->select('category.name as cat_nm','product_master.name as p_nm','product_master.*','category.*')
            ->paginate(4); 

            $product_data = view("porductlisting::product_change_data",compact('all_product'));
            echo $product_data;
        }
        else
        {
            $catID = Category::where('name',$subcat)->value('cat_id');

            $category_data = Category::where('parent_id',$catID)->get();
            if((count($category_data)!=0))
            {
                $all_category = Category::where('parent_id',$catID)->get();
            }
            else
            {
                $all_category = Category::where('cat_id',$catID)->get();
            }
            $all_brand = Brand::take(10)->where('logo','!=',' ')->get();
            $all_product = Product::leftJoin('product_category','product_master.id','=','product_category.product_id')
            ->join('category','product_category.category_id','=','category.cat_id')
            ->where('product_category.category_id',$catID)
            ->select('category.name as cat_nm','product_master.name as p_nm','product_master.*','category.*')
            ->paginate(4);

            return view('porductlisting::subcategory',compact('all_category','subcat','all_brand','all_product'));
        }
    }

    public function ProductDetail(Request $request, $product)
    {
        $productName = $product;
        $product_id = Product::where('name',$productName)->first();
        $product = Product::where('name',$productName)->first();
        $product_image = ProductImage::where('product_id',$product_id->id)->get();
        $product_size = ProductSizeColor::where('product_id',$product_id->id)->get();
        $product_extra_data = ProductSizeColor::where('product_id',$product_id->id)->get(['color','product_id'])->KeyBy('color');
        $product_size_data = ProductSizeColor::where('product_id',$product_id->id)->get(['size'])->KeyBy('size');
        foreach ($product_extra_data as $key => $value) 
        {
            $color_image = array();
            $get_color_product = ProductSizeColor::where('color',$value->color)->where('product_id',$value->product_id)->get();
            foreach ($get_color_product as $key_pr => $value_pr) 
            {
                $images = $value_pr->image;
                array_push($color_image,$images);
            }
            $value->images_new = $color_image;
        }
        return view('porductlisting::product-detail',compact('product','productName','product_image','product_extra_data','product_size_data'));
    }


    public function ProductColorWiseDetail(Request $request)
    {
        
        $colorName = $request->color;
        $product_id = $request->product_id;
        $product_size = ProductSizeColor::where('color',$colorName)->where('product_id',$product_id)->get(['color','size','image']);
        

        $color_data = '';
        $default_data = '';
        $class="'.cloudzoom'";
        $image = "image:'";
        $image_end = "' ";
        $color_data .= '<div class="thumbelina-but vert top ">˄</div>
                        <ul class="product_images_display " style="top: 0px;">';
        foreach ($product_size as $img_key => $img_value) 
        {
            $img_name = url('/front/product/'.$img_value->image);
            $color_data .= '<li style="display:block;"><a href='.$img_name.' title="'.$img_value->image.'"><img class="cloudzoom-gallery" src='.$img_name.' alt="'.$img_value->image.'" data-cloudzoom="

                                useZoom:'.$class.',

                                '.$image.''.$img_name.''.$image_end.'

                                "></a></li>';
        }
        $color_data .= '</ul>
                        <div class="thumbelina-but vert bottom">˅</div>';
        $inside = "'inside'";         
        $auto = "'auto'";         
        $default_img = url('/front/product/'.$product_size[0]->image);
        $default_data .= '<a href="'.$default_img.'">
               <img class="cloudzoom" src="'.$default_img.'"
               alt="'.$product_size[0]->image.'"
               data-cloudzoom="
               zoomPosition:'.$inside.',
               zoomOffsetX:0,
               zoomFlyOut:false,
               variableMagnification:false,
               disableZoom:'.$auto.',
               touchStartDelay:100,
               propagateGalleryEvent:true
               ">
            </a>';
        $data['images'] = $color_data;
        $data['default_image'] = $default_data;
        /*$data['default_images'] = $default_image;*/
                        
        return response()->json(['status' => 1,'success' =>  $data]);
        //return view('porductlisting::product-detail',compact('product','productName','product_image','product_extra_data','product_size_data'));
    }

     public function ProductBrandWiseDetail(Request $request)
    {
        $all_product = Product::leftJoin('product_category','product_master.id','=','product_category.product_id')
        ->join('category','product_category.category_id','=','category.cat_id')
        ->where('product_master.brand_id',$request->brand)
        ->select('category.name as cat_nm','product_master.name as p_nm','product_master.*','category.*')
        ->paginate(4); 

        $product_data = view("porductlisting::product_change_data",compact('all_product'));
        echo $product_data;
        //return response()->json(['status' => 1,'success' =>  $product_data]);   
    }    


    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('porductlisting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('porductlisting::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
