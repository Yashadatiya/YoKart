@extends('porductlisting::layouts.master')
@section('content')
<div class="main home-page active tabs-con" id="home">
   <!-- Categories mobile block -->
   <section class="categories-wrap">
      <ul>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/images/list-with-dots.svg')}}" alt="list-with-dots"></span>
            <span>All Categories</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/women-dress.svg')}}" alt="women-dress"></span>
            <span>Women Clothing</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/cotton-polo-shirt.svg')}}" alt="cotton-polo-shirt"></span>
            <span>Men Clothing</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/baby-boy.svg')}}" alt="baby-boy"></span>
            <span>Baby & Kids</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/running.svg')}}" alt="running"></span>
            <span>Footwares</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/football.svg')}}" alt="football"></span>
            <span>Sports wear</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/mobile-phone.svg')}}" alt="mobile-phone"></span>
            <span>Phones & Accessories</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/laptop.svg')}}" alt="laptop"></span>
            <span>Computer & Office</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/console.svg')}}" alt="console"></span>
            <span>Gaming Consoles</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/home.svg')}}" alt="home"></span>
            <span>Home & Garden</span>
            </a>
         </li>
      </ul>
   </section>
   <!-- End Categories mobile block -->
   <!-- Sponsored Product Section -->
   <section class="categories-wrap">
      <ul>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/list-with-dots.svg')}}" alt="list-with-dots"></span>
            <span>All Categories</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/women-dress.svg')}}" alt="women-dress"></span>
            <span>Women Clothing</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/cotton-polo-shirt.svg')}}" alt="cotton-polo-shirt"></span>
            <span>Men Clothing</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/baby-boy.svg')}}" alt="baby-boy"></span>
            <span>Baby & Kids</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/running.svg')}}" alt="running"></span>
            <span>Footwares</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/football.svg')}}" alt="football"></span>
            <span>Sports wear</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/mobile-phone.svg')}}" alt="mobile-phone"></span>
            <span>Phones & Accessories</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/laptop.svg')}}" alt="laptop"></span>
            <span>Computer & Office</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/console.svg')}}" alt="console"></span>
            <span>Gaming Consoles</span>
            </a>
         </li>
         <li>
            <a href="">
            <span class="icon"><img src="{{ asset('public/front/images/home.svg')}}" alt="home"></span>
            <span>Home & Garden</span>
            </a>
         </li>
      </ul>
   </section>
   <!-- End Categories mobile block -->
   <section class="sub-cat">
      <div class="custom-container">
         <div class="sub-cat-inner">
            <h2 class="section-title">Sub Category from {{ $subcat }}</h2>
            <div class="collection-slider">
               <div class="items product-grids">
                @foreach($all_category as $main_key => $main_value)
                  <div class="item grid">
                     <div class="product-img">
                        <a href="{{ route('sub',['subcat'=>$main_value->name]) }}">
                        <img class="category-image" src="@if(!empty($main_value->logo))@if(file_exists(public_path('front/category/'.$main_value->logo))) {{ asset('public/front/category/'.$main_value->logo)}} @else {{ asset('public/front/category/cat-default.jpg')}} @endif @else {{ asset('public/front/category/cat-default.jpg')}} @endif" alt="{{ $main_value->name}}">
                        </a>
                     </div>
                     <div class="product-text">
                        <div class="prod-cat">{{ $main_value->name}}</div>
                     </div>
                  </div>
                @endforeach  
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="top-brands all-brand">
      <div class="custom-container">
         <div class="all-brand-inner">
            <h2 class="section-title">Top Brands</h2>
            <a class="view-more" href="javascript:void(0)">View All <i class="fa fa-angle-right"></i> </a>
            <ul class="brand-img">
               @foreach($all_brand as $brn_key => $brn_value)
               <li>
                <center><a href="javascript:void(0)"><img style="width:100%;padding: 5%;" src="@if(!empty($brn_value->logo)) @if(file_exists(public_path('front/brand/'.$brn_value->logo))) {{ asset('public/front/brand/'.$brn_value->logo)}} @else {{ asset('public/front/brand/default_brand_image.png')}} @endif @else {{ asset('public/front/brand/default_brand_image.png')}}  @endif" alt="{{ $brn_value->name }}"></a></center>
               </li>
              @endforeach 
            </ul>
         </div>
      </div>
   </section>
   <!--  <section class="container-fluid banner in-page-banner" style="background-image: url('images/inner-banner.png');"> -->
   <!--    <section class="banner in-page-banner">
      <div class="breadcrumb-bg">
        <div class="custom-container">
              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Men</li>
                <li class="active">Clothing</li>
              </ul>
              <h3>Clothing</h3>
        </div>
      </div>
      </section> -->
   <!-- Top Products Section -->
   <section class="top-products inner-prroduct">
      <div class="custom-container">
         <div class="inner-page-product">
            <div class="inner-page-product-left">
               <h2>All Category</h2>
               <nav class="nav" role="navigation">
                  <ul class="nav__list">
                     <li>
                        <!--  <input id="group-1" type="checkbox" hidden /> -->
                        <label class="test">
                           <!-- <span class="fa fa-angle-right"></span> -->
                           Categories
                        </label>
                        <ul class="group-list">
                           <li>
                              <!--  <input id="sub-group-1" type="checkbox" hidden /> -->
                              <label>
                                 <!-- <span class="fa fa-angle-right"></span> --> <i class="more-less fa fa-angle-right"></i> Jeans
                              </label>
                              <!--    <ul class="sub-group-list">
                                 <li><a href="#">Men's Clothing</a></li>
                                 <li><a href="#">Women's Clothing</a></li>
                                 <li><a href="#">Kids' Clothing</a></li>
                                 </ul> -->
                           </li>
                           <li>
                              <label> <i class="more-less fa fa-angle-right"></i> Shirts</label>
                           </li>
                           <li>
                              <label> <i class="more-less fa fa-angle-right"></i> Trousers</label>
                           </li>
                           <li>
                              <label> <i class="more-less fa fa-angle-right"></i> Jackets</label>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="brand-box">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                 <!--  <i class="more-less fa fa-angle-right"></i> -->
                                 Brand
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">
                              <div class="new">
                                 <form>
                                    <div class="form-group">
                                       <input type="checkbox" id="benetton">
                                       <label for="benetton">United Colors of Benetton</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="jack">
                                       <label for="jack">Jack & Jones</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="allen">
                                       <label for="allen">Allen Solly</label>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="size-box">
                        <div class="panel-heading" role="tab" id="headingFive">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                                 <!--  <i class="more-less fa fa-angle-right"></i> -->
                                 Size
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFive">
                           <div class="panel-body">
                              <div class="new">
                                 <form>
                                    <div class="form-group">
                                       <input type="checkbox" id="2XS">
                                       <label for="2XS">2XS</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="XS">
                                       <label for="XS">XS</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="S">
                                       <label for="S">S</label>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="discount-box">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                 <!--  <i class="more-less fa fa-angle-right"></i> -->
                                 Discount
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">
                              <div class="new">
                                 <form>
                                    <div class="form-group">
                                       <input type="checkbox" id="50%">
                                       <label for="50%">50% or more</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="40%">
                                       <label for="40%">40% or more</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="30%">
                                       <label for="30%">30% or more</label>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="color-box">
                        <div class="panel-heading" role="tab" id="headingSix">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                                 <!-- <i class="more-less fa fa-angle-right"></i> -->
                                 Color
                              </a>
                           </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingSix">
                           <div class="panel-body">
                              <div class="new">
                                 <form>
                                    <div class="form-group">
                                       <input type="checkbox" id="Beige">
                                       <label for="Beige">Beige</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="Black">
                                       <label for="Black">Black</label>
                                    </div>
                                    <div class="form-group">
                                       <input type="checkbox" id="Blue">
                                       <label for="Blue">Blue</label>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="range-selling-box">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                 <!--  <i class="more-less fa fa-plus"></i> --><!--  <i class="more-less fa fa-angle-right"></i> -->
                                 Selling Price($)
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">
                              <div class="range-box">
                                 <div id="slider-range"></div>
                                 <div class=" slider-labels">
                                    <div class="caption">
                                       <strong>Min:</strong> <span id="slider-range-value1"></span>
                                    </div>
                                    <div class=" caption">
                                       <strong>Max:</strong> <span id="slider-range-value2"></span>
                                    </div>
                                    <form>
                                       <input type="hidden" name="min-value" value="">
                                       <input type="hidden" name="max-value" value="">
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="inner-page-product-right">
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
                           <a href="{{ route('product',['product'=>$product->p_nm]) }}"><img class="product-min-height product-data" src="@if(file_exists(public_path('front/product/'.$product->main_image))) {{ asset('public/front/product/'.$product->main_image)}} @else {{ asset('public/front/product/tp-img-1.jpg')}} @endif" alt="{{ $product->main_image }}" ></a>
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
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('public/front/images/view.svg')}}" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <ul class="pagination">
                  {{ $all_product->links() }}
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<div class="tabs-con" id="categories">
   <h2>Coming Soon</h2>
</div>
<div class="tabs-con" id="cart">
   <h2>Coming Soon</h2>
</div>
<div class="tabs-con" id="account">
   <h2>Coming Soon</h2>
</div>
<!-- Quick View Popup -->
<div class="quickview-popup modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="left-content">
               <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
               </div>
               <div class="product-slider">
                  <div class="items">
                     <div class="item">
                        <img src="images/1591.jpeg" alt="1591">
                     </div>
                     <div class="item">
                        <img src="images/1592.jpeg" alt="1592">
                     </div>
                     <div class="item">
                        <img src="images/1593.jpeg" alt="1593">
                     </div>
                     <div class="item">
                        <img src="images/1594.jpg" alt="1594">
                     </div>
                  </div>
               </div>
            </div>
            <div class="right-content">
               <div class="title">
                  <h2><a href="">Nike REVOLUTION 3 Running Shoes (Black, Size 6)</a></h2>
                  <div class="price">
                     <span>$155.00</span>
                     <span class="old-price">$180.00</span>
                     <span class="offer">14% Off</span>
                  </div>
               </div>
               <div class="size">
                  <span>Size</span>
                  <select>
                     <option>S</option>
                     <option>M</option>
                     <option>L</option>
                     <option>XL</option>
                     <option>XXL</option>
                  </select>
               </div>
               <div class="quantity-wrap">
                  <span>AVAILABLE QUANTITY</span>
                  <input type="number" min="0" max="100" step="1" value="1" class="qty">
               </div>
               <div class="btn-wrap">
                  <a href="javascript:void(0);" class="btn">Buy Now</a>
                  <a href="javascript:void(0);" class="btn btn-border">Add To Cart</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Quick View Popup -->
<div class="mobile-tabs-wrap">
   <ul>
      <li>
         <a href="javascript:void(0);" class="active" data-target="home">
         <i class="fas fa-home"></i>
         <span>Home</span>
         </a>
      </li>
      <li>
         <a href="javascript:void(0);" data-target="categories">
         <i class="fas fa-list"></i>
         <span>Categories</span>
         </a>
      </li>
      <li>
         <a href="javascript:void(0);" data-target="cart">
         <i class="fas fa-shopping-cart"></i>
         <span>Cart</span>
         </a>
      </li>
      <li>
         <a href="javascript:void(0);" data-target="account">
         <i class="fas fa-user"></i>
         <span>Account</span>
         </a>
      </li>
   </ul>
</div>
@endsection