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

class PorductListingController extends Controller
{
   
    public function index()
    {
        $all_category = Category::where('parent_id',0)->get();
        $all_brand = Brand::take(10)->where('logo','!=',' ')->get();
        $all_product = Product::leftJoin('product_category','product_master.id','product_category.product_id')
        ->join('category','product_category.category_id','category.cat_id')
        ->select('category.name as cat_nm','product_master.name as p_nm','product_master.*','category.*')
        ->get();

        return view('porductlisting::index',compact('all_category','all_brand','all_product'));
    }

    
    public function SubCategory(Request $request, $subcat)
    {   
        $catID = Category::where('name',$subcat)->value('cat_id');
        $all_category = Category::where('parent_id',$catID)->get();
        $all_brand = Brand::take(10)->where('logo','!=',' ')->get();
        $all_product = Product::leftJoin('product_category','product_master.id','product_category.product_id')
        ->join('category','product_category.category_id','category.cat_id')
        ->where('product_category.category_id',$catID)
        ->select('category.name as cat_nm','product_master.name as p_nm','product_master.*','category.*')
        ->get();
        return view('porductlisting::subcategory',compact('all_category','subcat','all_brand','all_product'));
    }

    public function ProductDetail(Request $request, $product)
    {
        
        $productName = $product;
        $product_id = Product::where('name',$productName)->first();
        $product = Product::where('name',$productName)
        ->leftJoin('product_wholesaler','product_master.id','product_wholesaler.product_id')
        ->first();
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
