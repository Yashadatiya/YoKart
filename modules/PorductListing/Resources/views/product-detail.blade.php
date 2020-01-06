@extends('porductlisting::layouts.master')

@section('content')
     
      <div class="main home-page active tabs-con" id="home">
         <!-- Categories mobile block -->
         <section class="categories-wrap">
            <ul>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('images/list-with-dots.svg')}}" alt="list-with-dots"></span>
               <span>All Categories</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/women-dress.svg')}}" alt="women-dress"></span>
               <span>Women Clothing</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/cotton-polo-shirt.svg')}}" alt="cotton-polo-shirt"></span>
               <span>Men Clothing</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/baby-boy.svg')}}" alt="baby-boy"></span>
               <span>Baby & Kids</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/running.svg')}}" alt="running"></span>
               <span>Footwares</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/football.svg')}}" alt="football"></span>
               <span>Sports wear</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/mobile-phone.svg')}}" alt="mobile-phone"></span>
               <span>Phones & Accessories</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/laptop.svg')}}" alt="laptop"></span>
               <span>Computer & Office</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/console.svg')}}" alt="console"></span>
               <span>Gaming Consoles</span>
            </a>
         </li>
         <li>
            <a href="">
               <span class="icon"><img src="{{ asset('front/images/home.svg')}}" alt="home"></span>
               <span>Home & Garden</span>
            </a>
         </li>
      </ul>
         </section>
         <!-- End Categories mobile block -->
         <!--  <section class="container-fluid banner in-page-banner" style="background-image: url('images/inner-banner.png');"> -->
         <section class="container-fluid banner in-page-banner">
            <div class="breadcrumb-bg">
               <div class="custom-container">
                  <ul class="breadcrumb">
                     <li><a href="#">Home</a></li>
                     <li>Men</li>
                     <li class="active">Clothing</li>
                  </ul>
                  <!-- <h3>Clothing</h3> -->
               </div>
            </div>
         </section>
         <!--Start product-detail-section -->
         <div class="product-detail-section">
            <div class="custom-container">
               <div class="product-detail">
                  <div class="product-detail-left">
                     <div id="thumbnails">
                        <div class="thumbelina-but vert top">&#708;</div>
                        <ul class="product_images_display">
                          @foreach($product_image as $img_key => $img_value)
                           <li>

                              <a href="{{ asset('front/product/'.$img_value->file_name)}}" title="{{ $img_value->file_name }}">

                                 <img class="cloudzoom-gallery" src="{{ asset('front/product/'.$img_value->file_name) }}" alt="{{ $img_value->file_name }}"

                                 data-cloudzoom="

                                 useZoom:'.cloudzoom',

                                 image:'{{ asset('front/product/'.$img_value->file_name )}}'

                                 ">

                              </a>

                           </li>
                           @endforeach
                        </ul>
                        <div class="thumbelina-but vert bottom">&#709;</div>
                     </div>
                     <div id="product-image">
                        <a href="{{ asset('front/product/'.$product_image[0]->file_name )}}">
                           <img class="cloudzoom" src="{{ asset('front/product/'.$product_image[0]->file_name )}}"
                           alt="{{ $product_image[0]->file_name }}"
                           data-cloudzoom="
                           zoomPosition:'inside',
                           zoomOffsetX:0,
                           zoomFlyOut:false,
                           variableMagnification:false,
                           disableZoom:'auto',
                           touchStartDelay:100,
                           propagateGalleryEvent:true
                           ">
                        </a>

                     </div>
                     <!-- <div id="zoom-overlay">
                        </div> -->
                  </div>
                  <div class="product-detail-right">
                     <h2>{{ $productName }}</h2>
                     <div class="price-box">
                        <div class="price-box-inner">
                            <h4>@if(empty($product->discount_price)) $ {{ number_format($product->selling_price,2) }} @else $ {{ $product->discount_price}} @endif</h4>
                            @if(!empty($product->discount_price))<span>{{$product->percent_discount}}% off</span>
                            <div class="price-cancel"> $ {{ number_format($product->selling_price,2) }} </div>@else  @endif
                        </div>
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <a href=""><i class="fa fa-share-alt"></i></a>
                     </div>
                     <ul class="product-detail-content">
                        <li>
                           <span>Wholesale</span> 
                           <div class="product-detail-content-right whole-bx">
                              <p>Buy {{$product->min_stock}}-{{ $product->max_stock }} ${{ $product->price }}</p>
                              <a href="JavaScript:Void(0);" class="more">More<i class="fa fa-angle-right"></i></a>
                              <div class="wholesale-box">
                                 <h4>Wholesale</h4>
                                 <ul>
                                    <li>
                                       <ul>
                                          <li>
                                             <h5>demo</h5>
                                          </li>
                                          <li> 2-12</li>
                                          <li> 13-48</li>
                                          <li> 49-100</li>
                                          <li> 101-250</li>
                                          <li>  >251</li>
                                       </ul>
                                       <ul>
                                          <li>
                                             <h5>demo</h5>
                                          </li>
                                          <li> 2-12</li>
                                          <li> 13-48</li>
                                          <li> 49-100</li>
                                          <li> 101-250</li>
                                          <li>  >251</li>
                                       </ul>
                                       <ul>
                                          <li>
                                             <h5>demo</h5>
                                          </li>
                                          <li> 2-12</li>
                                          <li> 13-48</li>
                                          <li> 49-100</li>
                                          <li> 101-250</li>
                                          <li>  >251</li>
                                       </ul>
                                 </ul>
                                 <a href="JavaScript:Void(0);">Close</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <span>Voucher</span> 
                           <div class="product-detail-content-right"><a href="">fgh100</a><a href="">zvjn200</a> <a href="">ert400</a><a href="" class="more">More<i class="fa fa-angle-right"></i></a></div>
                        </li>
                        <li>
                           <span>Free Shpping</span> 
                           <div class="product-detail-content-right">
                              <p>Rp. 15,000 when spent Rp.250</p>
                              <a href="" class="more">More<i class="fa fa-angle-right"></i></a>
                              <div class="select-first-top">
                                 <select>
                                    <option value="Dki Jakarta">Dki Jakarta</option>
                                    <option value="Dki Jakarta">Dki Jakarta</option>
                                    <option value="Dki Jakarta">Dki Jakarta</option>
                                 </select>
                                 <select>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                 </select>
                                 <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                 </select>
                              </div>
                              <div class="select-first-bottom">
                                 <select>
                                    <option value="Dki Jakarta">Dki Jakarta</option>
                                    <option value="Dki Jakarta">Dki Jakarta</option>
                                    <option value="Dki Jakarta">Dki Jakarta</option>
                                 </select>
                              </div>
                           </div>
                        </li>
                        <input type="hidden" name="pro_id" id="pro_id" value="{{$product->id}}">
                        <li>
                           <span>Size</span> 
                           <div class="product-detail-content-right">
                              <ul class="size-check">
                                 @foreach($product_size_data as $size_key => $size_value)
                                    <li><a href="">{{ $size_value->size }}</a></li>
                                 @endforeach
                              </ul>
                           </div>
                        </li>
                        <li>
                          <span>Color</span> 
                           <div class="product-detail-content-right">
                           @foreach($product_extra_data as $ex_key => $ex_value)
                           <div class="product-detail-content-right">
                              <span>{{ $ex_value->color }}</span>
                              <ul class="color-check">
                                 @foreach($ex_value->images_new as $img_key => $img_value)
                                 <li><a style="cursor: pointer;" onclick="get_product_data(this)" data-color="{{ $ex_value->color }}"><img src="@if(!empty($img_value))@if(file_exists(public_path('front/product/'.$img_value))) {{ asset('front/product/'.$img_value)}} @else {{ asset('front/product/default_product_image.png')}} @endif" alt="{{ $img_value }} @else {{ asset('front/product/default_product_image.png')}} @endif"></a></li>
                                 @endforeach
                              </ul>
                              </div>
                              @endforeach 
                           </div>
                        </li>
                        <li>
                           <span>&nbsp;</span> 
                           <div class="product-detail-content-right">
                              <div class="qty-more">
                                 <div class="minus-qty"><a href=""> - </a></div>
                                 <div class="qty1"><a href=""> 1 </a></div>
                                 <div class="plus-qty"><a href=""> + </a></div>
                                 <span>Left 3 Pcs</span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <span>&nbsp;</span> 
                           <div class="product-detail-content-right">
                              <button><i class="fa fa-cart-plus" aria-hidden="true"></i>Buy Now</button>
                              <button><i class="fa fa-shopping-cart"></i>Add to cart</button>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tabs">
                  <ul id="tabs-nav">
                     <li><a href="#tab1">Product Description</a></li>
                     <li><a href="#tab2">Product Specification</a></li>
                  </ul>
                  <!-- END tabs-nav -->
                  <div id="tabs-content">
                     <div id="tab1" class="tab-content">
                        <h2>Product Description</h2>
                        {!! $product->description !!}
                     </div>
                     <div id="tab2" class="tab-content">
                        <h2>Product Specification</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                           <br>
                           <br>
                           It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                     </div>
                  </div>
                  <!-- END tabs-content -->
               </div>
               <!-- END tabs -->
            </div>
         </div>
         <!--End product-detail-section -->
         <!-- Recommended Product Section -->
         {{-- <section class="sponsored recommended">
            <div class="custom-container">
               <h2 class="section-title">Related Products</h2>
               <a class="view-more" href="">See All</a>
               <div class="product-grids">
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro1.jpeg" alt="pro1">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro2.jpeg" alt="pro2">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro3.jpeg" alt="pro3">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro4.jpeg" alt="pro4">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro5.jpeg" alt="pro5">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro6.jpeg" alt="pro6">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro6.jpeg" alt="pro6">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro6.jpeg" alt="pro6">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="single-product">
                        <div class="fav">
                           <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="product-img">
                           <a href="javascript:void(0)">
                           <img src="images/pro6.jpeg" alt="pro6">
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="prod-cat">Men</div>
                           <div class="prod-name"><a href="">Maniac Solid Men's Round Neck Grey T-Shirt </a></div>
                           <div class="prod-price">
                              $65.00 <span class="product-old-price">$70.00</span>
                              <div class="product_off">7% Off</div>
                           </div>
                        </div>
                        <div class="quickview">
                           <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="images/view.svg" alt="view"></span>Quick View</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> --}}
         <!-- Ends Recommended Product Section -->
         <!-- Top Brands Section -->
         <!-- <section class="top-brands">
            <div class="custom-container">
              <h2 class="section-title">Top Brands</h2>
              <a class="view-more" href="javascript:void(0)">view more</a>
              <ul class="brand-img">
                <li><a href="javascript:void(0)"><img src="images/apple.png"></a></li>
                <li><a href="javascript:void(0)"><img src="images/arrow.jpg"></a></li>
                <li><a href="javascript:void(0)"><img src="images/fabindia.png"></a></li>
                <li><a href="javascript:void(0)"><img src="images/avast.png"></a></li>
                <li><a href="javascript:void(0)"><img src="images/louis-philip.png"></a></li>
              </ul>
            </div>
            </section> -->
         <!-- Ends Top Brands Section -->
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
                              <img src="{{ asset('front/images/1591.jpeg')}}" alt="1591">
                           </div>
                           <div class="item">
                              <img src="{{ asset('front/images/1592.jpeg')}}" alt="1592">
                           </div>
                           <div class="item">
                              <img src="{{ asset('front/images/1593.jpeg')}}" alt="1593">
                           </div>
                           <div class="item">
                              <img src="{{ asset('front/images/1594.jpg')}}" alt="1594">
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
     
      <script type="text/javascript">
         function toggleIcon(e) {
           $(e.target)
           .prev('.panel-heading')
           .find(".more-less")
           .toggleClass('fa-plus fa-minus');
         }
         $('.panel-group').on('hidden.bs.collapse', toggleIcon);
         $('.panel-group').on('shown.bs.collapse', toggleIcon);
         
         // Show the first tab and hide the rest
         $('#tabs-nav li:first-child').addClass('active');
         $('.tab-content').hide();
         $('.tab-content:first').show();
         
         // Click function
         $('#tabs-nav li').click(function(){
           $('#tabs-nav li').removeClass('active');
           $(this).addClass('active');
           $('.tab-content').hide();
           
           var activeTab = $(this).find('a').attr('href');
           $(activeTab).fadeIn();
           return false;
         });
         
         
             //   $('.product-grids').slick({
             //     dots: false,
             //     infinite: true,
             //     speed: 500,
             //     slidesToShow: 3,
             //     slidesToScroll: 1,
             //     autoplay: true,
             //     autoplaySpeed: 2000,
             //     arrows: true,
             //     responsive: [{
             //       breakpoint: 600,
             //       settings: {
             //         slidesToShow: 2,
             //         slidesToScroll: 1
             //       }
             //     },
             //     {
             //        breakpoint: 400,
             //        settings: {
             //           arrows: false,
             //           slidesToShow: 1,
             //           slidesToScroll: 1
             //        }
             //     }]
             // });
         
         
           
      </script>
      <script type="text/javascript">
         $().ready(function(){
           $('.sponsored.recommended .product-grids').slick({
             arrows: true,
             centerPadding: "0px",
             dots: false,
             slidesToShow: 6,
             infinite: false,
             responsive: 
             [
             {
               breakpoint: 993,
               settings: {
                 slidesToShow: 4,
          // slidesToScroll: 1
         }
         },
         {
         breakpoint: 769,
         settings: {
         slidesToShow: 3,
         slidesToScroll: 1,
         arrows: false,
         dots:true
         }
         },
         {
         breakpoint: 480,
         settings: {
         slidesToShow: 2,
         slidesToScroll: 1,
         arrows: false,
         dots:true
         }
         },
         {
         breakpoint: 376,
         settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         dots:true
         }
         }
         ]
         
         
         
         });
         
         
         
         $(".wholesale-box").hide();
         $(".whole-bx a.more").click(function(){
         $(".wholesale-box").slideToggle();
         });
         
         $(".product-detail-content-right .wholesale-box a").click(function(){
         $(".wholesale-box").slideUp();
         });
         
         });
         
      </script>
      <!-- App JS -->
      {{-- <script type="text/javascript" src="js/app.min.js"></script> --}}

@endsection
