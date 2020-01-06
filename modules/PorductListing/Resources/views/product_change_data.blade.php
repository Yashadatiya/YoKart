<div class="sorting-sec">
   <ul class="sort-data">
      <li><span>Sort By</span></li>
      <li><a href="">New</a></li>
      <li><a href="">Promo</a></li>
      <li><a href="">Top Sale</a></li>
      <li>
         <select>
            <option>Price -- Low to High</option>
            <option>Price -- High to Low</option>
            <option>Newest First</option>
         </select>
      </li>
      <li>
         <select>
            <option>10</option>
            <option>30</option>
            <option>50</option>
         </select>
      </li>
      <li><a href="" class="view-column"><i class="fa fa-list-ul" aria-hidden="true"></i></a></li>
      <li>
         <span class="item-sort">7 item(s)</span> 
         <div class="items-box">
            <p><a href="" class="active"><i class="fa fa-long-arrow-alt-left"></i><span>2</span> </a> of 
               <a href="">4 <i class="fa fa-long-arrow-alt-right"></i></a>
            </p>
         </div>
      </li>
      <li><a href="" class="filter-box"><i class="fa fa-filter"></i></a></li>
   </ul>
</div>
<div class="product-grids">
   @foreach($all_product as $product)
   <div class="grid">
      <div class="single-product">
         <div class="fav">
            <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
         </div>
         <div class="product-img">
            <a href="{{ route('product',['product'=>$product->p_nm]) }}"><img class="product-min-height product-data" src="@if(!empty($product->main_image))@if(file_exists(public_path('front/product/'.$product->main_image))) {{ asset('front/product/'.$product->main_image)}} @else {{ asset('front/product/default_product_image.png')}} @endif @else {{ asset('front/product/default_product_image.png')}} @endif" alt="{{ $product->main_image }}"></a>
         </div>
         <div class="product-text">
            <div class="prod-cat">{{ $product->cat_nm }}</div>
            <div class="prod-name">
               <a href="{{ route('product',['product'=>$product->p_nm]) }}">
                  {{ $product->p_nm }}
               </a>
            </div>
            <div class="prod-price">
               @if(empty($product->discount_price)) $ {{ number_format($product->selling_price,2) }} @else $ {{ $product->discount_price}} @endif
               @if(!empty($product->discount_price))<span class="product-old-price">${{ number_format($product->selling_price,2) }}</span>@endif
               @if(!empty($product->discount_price))<div class="product_off">{{$product->percent_discount}}% Off</div>@endif
            </div>
         </div>
         <div class="quickview">
            <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
         </div>
      </div>
   </div>
   @endforeach
</div>
<ul class="pagination">
   {{ $all_product->links() }}
</ul>
