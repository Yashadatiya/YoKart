@extends('dashboard::layouts.master')
@section('content')
<div class="main home-page active tabs-con" id="home"> 
    <!-- Slider Section -->
    <section class="slider-wrap">
      <div class="items">
        @foreach($banner as $banner_key => $banner_value)
          <div class="item">
            <img src="{{ asset('front/banner')}}/{{$banner_value->filename}}" alt="slide1" style="max-height: 700px !important;">
          </div>
        @endforeach
      </div>
    </section>
    <!-- Ends Slider Section -->
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
    <!-- Sponsored Product Section -->
    <section class="sponsored">
      <div class="custom-container">
        <h2 class="section-title">Sponsored Products</h2>
        <div class="product-grids">
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
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
                  <img src="{{ asset('front/images/pro2.jpeg')}}" alt="pro2">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
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
                  <img src="{{ asset('front/images/pro3.jpeg')}}" alt="pro3">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
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
                  <img src="{{ asset('front/images/pro4.jpeg')}}" alt="pro4">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
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
                  <img src="{{ asset('front/images/pro5.jpeg')}}" alt="pro5">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
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
                  <img src="{{ asset('front/images/pro6.jpeg')}}" alt="pro6">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
    <!-- Ends Sponsored Product Section -->
    <!-- Top Products Section -->
    <section class="top-products">
      <div class="custom-container">
        <h2 class="section-title">Top Products</h2>
        <div class="product-grids">
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-1.jpg')}}" alt="tp-img-1"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-2.jpg')}}" alt="tp-img-2"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-3.jpg')}}" alt="tp-img-3"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-4.jpg')}}" alt="tp-img-4"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-5.jpg')}}" alt="tp-img-5"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-6.jpg')}}" alt="tp-img-6"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-7.jpg')}}" alt="tp-img-7"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-8.jpg')}}" alt="tp-img-8"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-9.jpg')}}" alt="tp-img-9"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-10.jpg')}}" alt="tp-img-10"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-11.jpg')}}" alt="tp-img-11"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="single-product">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)"><img src="{{ asset('front/images/tp-img-12.jpg')}}" alt="tp-img-12"></a>
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ends Top Products Section -->
    <!-- Popular Products Section -->
    <section class="popular-product">
      <div class="custom-container">
        <h2 class="section-title">Popular Products</h2>
        <div class="product-tabs">
          <div class="tab-list">
            <ul class="nav nav-tabs">
              <li><a class="active" href="#electronics" data-toggle="tab">Electronics</a></li>
              <li><a href="#men" data-toggle="tab">Men</a></li>
              <li><a href="#women" data-toggle="tab">Women</a></li>
              <li><a href="#footwears" data-toggle="tab">Footwears</a></li>
              <li><a href="#baby-kids" data-toggle="tab">Baby & Kids</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div id="electronics" class="tab-pane active">
              <div class="product-tile">
                <div class="grid grid-1">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-1.jpg')}}" alt="electronic-tile-1">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Macbook Pro</a></div>
                    <div class="prod-price">$1865.00</div>
                  </div>
                </div>
                <div class="grid grid-2">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-2.jpg')}}" alt="electronic-tile-2">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">JBL wired Headphone</a></div>
                    <div class="prod-price">
                      $82.00 <span class="product-old-price">$90.00</span>
                      <div class="product_off">9% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-3">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-3.jpg')}}" alt="electronic-tile-3">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Iphone 7</a></div>
                    <div class="prod-price">$800.00</div>
                  </div>
                </div>
                <div class="grid grid-4">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-4.jpg')}}" alt="electronic-tile-4">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Iphone 6s plus</a></div>
                    <div class="prod-price">$546.00</div>
                  </div>
                </div>
                <div class="grid grid-5">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-5.jpg')}}" alt="electronic-tile-5">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">HP Omen original</a></div>
                    <div class="prod-price">$1000.00</div>
                  </div>
                </div>
                <div class="grid grid-6">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-6.jpg')}}" alt="electronic-tile-6">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Dell Alienware</a></div>
                    <div class="prod-price">$789.00</div>
                  </div>
                </div>
                <div class="grid grid-7">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/electronic-tile-7.jpg')}}" alt="electronic-tile-7">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Asus ROG</a></div>
                    <div class="prod-price">$456.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div id="men" class="tab-pane">
              <div class="product-tile">
                <div class="grid grid-1">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-1.jpg')}}" alt="men-tile-1">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Casual cool red shirt</a></div>
                    <div class="prod-price">$40.00</div>
                  </div>
                </div>
                <div class="grid grid-2">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-2.jpg')}}" alt="men-tile-2">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Mens sports shirt</a></div>
                    <div class="prod-price">$23.00</div>
                  </div>
                </div>
                <div class="grid grid-3">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-3.jpg')}}" alt="men-tile-3">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">FR slim fir men's blue trousers</a></div>
                    <div class="prod-price">
                      $112.00 <span class="product-old-price">$150.00</span>
                      <div class="product_off">25% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-4">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-4.jpg')}}" alt="men-tile-4">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Regular men blue jeans</a></div>
                    <div class="prod-price">$49.99</div>
                  </div>
                </div>
                <div class="grid grid-5">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-5.jpg')}}" alt="men-tile-5">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Printed men round blue t-shirt</a></div>
                    <div class="prod-price">$12.99</div>
                  </div>
                </div>
                <div class="grid grid-6">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-6.jpg')}}" alt="men-tile-6">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Solid Straight Kurta</a></div>
                    <div class="prod-price">$9.99</div>
                  </div>
                </div>
                <div class="grid grid-7">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/men-tile-7.jpg')}}" alt="men-tile-7">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Asus ROG</a></div>
                    <div class="prod-price">
                      $65.00 <span class="product-old-price">$70.00</span>
                      <div class="product_off">7% Off</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="women" class="tab-pane">
              <div class="product-tile">
                <div class="grid grid-1">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-1.jpg')}}" alt="women-tile-1">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Hypernation solid neck black</a></div>
                    <div class="prod-price">
                      $99.00 <span class="product-old-price">$110.00</span>
                      <div class="product_off">10% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-2">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-2.jpg')}}" alt="women-tile-2">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Daily wear fun top</a></div>
                    <div class="prod-price">$33.00</div>
                  </div>
                </div>
                <div class="grid grid-3">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-3.jpg')}}" alt="women-tile-3">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Women sari black</a></div>
                    <div class="prod-price">$65.00</div>
                  </div>
                </div>
                <div class="grid grid-4">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-4.jpg')}}" alt="women-tile-4">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Trending today dress</a></div>
                    <div class="prod-price">$51.00</div>
                  </div>
                </div>
                <div class="grid grid-5">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-5.jpg')}}" alt="women-tile-5">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Dress material large</a></div>
                    <div class="prod-price">$33.00</div>
                  </div>
                </div>
                <div class="grid grid-6">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-6.jpg')}}" alt="women-tile-6">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Women fit and flare</a></div>
                    <div class="prod-price">
                      $29.99 <span class="product-old-price">$34.99</span>
                      <div class="product_off">14% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-7">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/women-tile-7.jpg')}}" alt="women-tile-7">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Ico blue star slim women</a></div>
                    <div class="prod-price">
                      $87.00 <span class="product-old-price">$95.00</span>
                      <div class="product_off">8% Off</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="footwears" class="tab-pane">
              <div class="product-tile">
                <div class="grid grid-1">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-1.jpg')}}" alt="footwear-tile-1">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Boots for women</a></div>
                    <div class="prod-price">$500.00</div>
                  </div>
                </div>
                <div class="grid grid-2">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-2.jpg')}}" alt="footwear-tile-2">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Casual smart shoe</a></div>
                    <div class="prod-price">$90.00</div>
                  </div>
                </div>
                <div class="grid grid-3">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-3.jpg')}}" alt="footwear-tile-3">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Casual Smart Shoes</a></div>
                    <div class="prod-price">$98.00</div>
                  </div>
                </div>
                <div class="grid grid-4">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-4.jpg')}}" alt="footwear-tile-4">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Candle Gold Geniun</a></div>
                    <div class="prod-price">
                      $72.00 <span class="product-old-price">$85.00</span>
                      <div class="product_off">15% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-5">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-5.jpg')}}" alt="footwear-tile-5">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Candle leather High Ankel</a></div>
                    <div class="prod-price">
                      $75.00 <span class="product-old-price">$80.00</span>
                      <div class="product_off">6% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-6">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-6.jpg')}}" alt="footwear-tile-6">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Nike REVOLUTION 3 running</a></div>
                    <div class="prod-price">
                      $155.00 <span class="product-old-price">$180.00</span>
                      <div class="product_off">14% Off</div>
                    </div>
                  </div>
                </div>
                <div class="grid grid-7">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/footwear-tile-7.jpg')}}" alt="footwear-tile-7">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Women black heels</a></div>
                    <div class="prod-price">$300.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div id="baby-kids" class="tab-pane">
              <div class="product-tile">
                <div class="grid grid-1">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-1.jpg')}}" alt="baby-tile-1">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Cot hanging fishes</a></div>
                    <div class="prod-price">$32.00</div>
                  </div>
                </div>
                <div class="grid grid-2">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-2.jpg')}}" alt="baby-tile-2">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Black batman</a></div>
                    <div class="prod-price">$23.00</div>
                  </div>
                </div>
                <div class="grid grid-3">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-3.jpg')}}" alt="baby-tile-3">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Musical electric piano</a></div>
                    <div class="prod-price">$676.00</div>
                  </div>
                </div>
                <div class="grid grid-4">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-4.jpg')}}" alt="baby-tile-4">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Sketch pens set of 12</a></div>
                    <div class="prod-price">$44.00</div>
                  </div>
                </div>
                <div class="grid grid-5">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-5.jpg')}}" alt="baby-tile-5">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Taxton magnet buckyballs</a></div>
                    <div class="prod-price">$55.00</div>
                  </div>
                </div>
                <div class="grid grid-6">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-6.jpg')}}" alt="baby-tile-6">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Metallic fidget spinner</a></div>
                    <div class="prod-price">$21.00</div>
                  </div>
                </div>
                <div class="grid grid-7">
                  <div class="fav">
                    <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="product-img">
                    <img src="{{ asset('front/images/baby-tile-7.jpg')}}" alt="baby-tile-7">
                  </div>
                  <div class="content-overlay"></div>
                  <div class="content-details">
                    <div class="product-title"><a href="javascript:void(0)">Optimus Transformer</a></div>
                    <div class="prod-price">$64.00</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ends Popular Products Section -->
    <!-- Featured Products Sections -->
    <section class="featured-product">
      <div class="custom-container">
        <div class="banner-wrap">
          <img src="{{ asset('front/images/featured-product-banner.jpg')}}" alt="featured-product-banner">
        </div>
        <h2 class="section-title">Featured Products</h2>
        <div class="product-horizontal">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="horizontal-product">
                <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                </div>
                <div class="product-img">
                  <a href="javascript:void(0)"><img src="{{ asset('front/images/fp-1.jpg')}}"></a>
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
                  <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="horizontal-product">
                <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                </div>
                <div class="product-img">
                  <a href="javascript:void(0)"><img src="{{ asset('front/images/fp-2.jpg')}}"></a>
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
                  <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="horizontal-product">
                <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                </div>
                <div class="product-img">
                  <a href="javascript:void(0)"><img src="{{ asset('front/images/fp-3.jpg')}}"></a>
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
                  <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="horizontal-product">
                <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                </div>
                <div class="product-img">
                  <a href="javascript:void(0)"><img src="{{ asset('front/images/fp-4.jpg')}}"></a>
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
                  <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="horizontal-product">
                <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                </div>
                <div class="product-img">
                  <a href="javascript:void(0)"><img src="{{ asset('front/images/fp-5.jpg')}}"></a>
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
                  <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="horizontal-product">
                <div class="fav">
                  <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
                </div>
                <div class="product-img">
                  <a href="javascript:void(0)"><img src="{{ asset('front/images/fp-6.jpg')}}"></a>
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
                  <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-fp">
          <div class="row">
            <div class="col-md-6">
              <div class="banner-image">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/banner-fp-2.jpg')}}" alt="banner-fp-1">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="banner-image">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/banner-fp-1.jpg')}}" alt="banner-fp-2">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ends Featured Products Sections -->
    <!-- Top Categories Sections -->
    <section class="top-categories">
      <div class="custom-container">
        <h2 class="section-title">Top Categories</h2>
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="top-bundle">
              <div class="cat-img">
                <img src="{{ asset('front/images/electronics.jpg')}}">
              </div>
              <div class="cat-title">
                <a href="javascript:void(0)">Electronics</a>
              </div>
              <ul class="cat-list">
                <li><a href="javascript:void(0)">Televisions</a></li>
                <li><a href="javascript:void(0)">Washing Machines</a></li>
                <li><a href="javascript:void(0)">Mobiles</a></li>
                <li><a href="javascript:void(0)">Gaming Consoles</a></li>
                <li><a href="javascript:void(0)">Laptops</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="top-bundle">
              <div class="cat-img">
                <img src="{{ asset('front/images/mobiles.jpg')}}">
              </div>
              <div class="cat-title">
                <a href="javascript:void(0)">Mobiles</a>
              </div>
              <ul class="cat-list">
                <li><a href="javascript:void(0)">Phones</a></li>
                <li><a href="javascript:void(0)">Mobile Cases</a></li>
                <li><a href="javascript:void(0)">Headphones</a></li>
                <li><a href="javascript:void(0)">Screengaurds</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="top-bundle">
              <div class="cat-img">
                <img src="{{ asset('front/images/game-consoles.jpg')}}">
              </div>
              <div class="cat-title">
                <a href="javascript:void(0)">Gaming Consoles</a>
              </div>
              <ul class="cat-list">
                <li><a href="javascript:void(0)">Xbox-one</a></li>
                <li><a href="javascript:void(0)">PS4</a></li>
                <li><a href="javascript:void(0)">Handheld Consoles</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="top-bundle">
              <div class="cat-img">
                <img src="{{ asset('front/images/laptops.jpg')}}">
              </div>
              <div class="cat-title">
                <a href="javascript:void(0)">Laptops</a>
              </div>
              <ul class="cat-list">
                <li><a href="javascript:void(0)">Antivirus</a></li>
                <li><a href="javascript:void(0)">Laptop Bags</a></li>
                <li><a href="javascript:void(0)">Business Laptops</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>-
    </section>
    <!-- Ends Top Categories Sections -->
    <!-- Top collections Section -->
    <section class="top-collections">
      <div class="custom-container">
        <h2 class="section-title">Top Collections<span class="view-more"><a href="javascript:void(0)">View More</a></span></h2>
        <div class="collection-slider">
          <div class="items product-grids">
            <div class="item grid">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
            <div class="item grid">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
            <div class="item grid">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
            <div class="item grid">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
            <div class="item grid">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
            <div class="item grid">
              <div class="fav">
                <a href="javascript:void(0)"><i class="fas fa-heart"></i></a>
              </div>
              <div class="product-img">
                <a href="javascript:void(0)">
                  <img src="{{ asset('front/images/pro1.jpeg')}}" alt="pro1">
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
                <a href="javascript:void(0);" class="inline-content" data-toggle="modal" data-target="#exampleModalScrollable"><span class="svg-icon"><img src="{{ asset('front/images/view.svg')}}" alt="view"></span>Quick View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ends Top collections Section -->
    <!-- Top Brands Section -->
    <section class="top-brands">
      <div class="custom-container">
        <h2 class="section-title">Top Brands</h2>
        <a class="view-more" href="javascript:void(0)">view more</a>
        <ul class="brand-img">
          <li><a href="javascript:void(0)"><img src="{{ asset('front/images/apple.png')}}"></a></li>
          <li><a href="javascript:void(0)"><img src="{{ asset('front/images/arrow.jpg')}}"></a></li>
          <li><a href="javascript:void(0)"><img src="{{ asset('front/images/fabindia.png')}}"></a></li>
          <li><a href="javascript:void(0)"><img src="{{ asset('front/images/avast.png')}}"></a></li>
          <li><a href="javascript:void(0)"><img src="{{ asset('front/images/louis-philip.png')}}"></a></li>
        </ul>
      </div>
    </section>
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
@endsection
