 <header>
    <div class="top-header">
      <div class="custom-container">
        <div class="left-wrap">
          <span>Multi-vendor Ecommerce Marketplace Solution</span>
        </div>
        <div class="right-wrap">
          <div class="lang">
            <div class="icon"><img src="{{ asset('public/front/images/glob.svg')}}" alt="glob">English</div>
            <div class="option-dropdown">
              <ul>
                <li>Select Language</li>
                <li><a href="" class="is-active">English</a></li>
                <li><a href="">Arabic</a></li>
              </ul>
            </div>
          </div>
          <div class="currency">
            <div class="icon"><img src="{{ asset('public/front/images/dolar.svg')}} " alt="dolar">Currency</div>
            <div class="option-dropdown">
              <ul>
                <li>Select Currency</li>
                <li><a href="" class="active">USD</a></li>
                <li><a href="">INR</a></li>
                <li><a href="">CAD</a></li>
              </ul>
            </div>
          </div>
          <div class="login-reg">
            <div class="icon"><img src="{{ asset('public/front/images/user.svg')}}" alt="user"></div>
            <div class="text">
              <a href="javascript:void(0)">Login</a> / 
              <a href="javascript:void(0)">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="middle-header">
      <div class="custom-container">
        <div class="logo-wrap">
          <img src="{{ asset('public/front/images/logo.png')}}" alt="logo">
        </div>
        <div class="search-wrap">
          <form>
            <select>
              <option value="hide">all</option>
              <option value="hide">SEARCH ITEMS</option>
              {{-- <option value="Baby & Kids">Baby & Kids</option>
              <option value="Electronics">Electronics</option>
              <option value="Men">Men</option>
              <option value="Women">Women</option> --}}
              @foreach($main_category as $cat_key => $cat_value)
                <option value="{{ $cat_value }}">{{ $cat_value }}</option>
              @endforeach  
            </select>
            <div class="field-item">
              <input type="I Am Looking For..." name="">
            </div>
            <div class="form-action">
              <button class="btn"><img src="{{ asset('public/front/images/search-white')}}.svg" alt="search-white"> Search</button>
            </div>
          </form>
        </div>
        <div class="cart-icon">
          <div class="icon-wrap">
            <div class="icon"><img src="{{ asset('public/front/images/cart.svg')}}"></div>
            <span class="count">0</span>
          </div>
          <div class="text-amount">
            <span>CART</span>
            <div class="amount">$0.00</div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-header">
      <div class="custom-container">
        <ul class="main-menu">
          {{-- <li class="menu-child">
            <a href="javascript:void(0)">Electronics</a>
            <div class="subnav">
              <ul class="sublinks">
                <li>
                  <a href="{{ route('productListing')}}">Mobiles</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">Phones</a></li>
                    <li><a href="javascript:void(0)">Mobile Cases</a></li>
                    <li><a href="javascript:void(0)">Headphones</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('productListing')}}">Laptops</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">Antivirus</a></li>
                    <li><a href="javascript:void(0)">Laptop Bags</a></li>
                    <li><a href="javascript:void(0)">Business Laptops</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('productListing')}}">Gaming Consoles</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">Xbox-one</a></li>
                    <li><a href="javascript:void(0)">PS4</a></li>
                    <li><a href="javascript:void(0)">Handheld consoles</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="menu-child">
            <a href="javascript:void(0)">Men</a>
            <div class="subnav">
              <ul class="sublinks">
                <li>
                  <a href="{{ route('productListing')}}">Clothing</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">Jeans</a></li>
                    <li><a href="javascript:void(0)">Shirt</a></li>
                    <li><a href="javascript:void(0)">Trousers</a></li>
                    <li><a href="javascript:void(0)">Jackets</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('productListing')}}">Footwears</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">Casual Shoes</a></li>
                    <li><a href="javascript:void(0)">Formal Shoes</a></li>
                    <li><a href="javascript:void(0)">Sports Shoes</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('productListing')}}">Sports Wear</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">Sports T-shisrs</a></li>
                    <li><a href="javascript:void(0)">Track Pants</a></li>
                    <li><a href="javascript:void(0)">Track Suits</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="menu-child">
            <a href="javascript:void(0)">Baby & Kids</a>
            <div class="subnav">
              <ul class="sublinks">
                <li>
                  <a href="{{ route('productListing')}}">Toys</a>
                  <ul class="links">
                    <li><a href="javascript:void(0)">PUzzles</a></li>
                    <li><a href="javascript:void(0)">Art & Craft</a></li>
                    <li><a href="javascript:void(0)">Baby Toys</a></li>
                    <li><a href="javascript:void(0)">Action Figues</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="menu-child">
            <a href="javascript:void(0)">Women</a>
            <div class="subnav">
              <ul class="sublinks">
                <li>
                  <a href="{{ route('productListing')}}">Jeans & Bottom Wear</a>
                </li>
                <li>
                  <a href="{{ route('productListing')}}">Tops and T-shirts</a>
                </li>
              </ul>
            </div>
          </li> --}}
          @foreach($main_category as $cat_key => $cat_value)
          <li class="menu-child">
            <a href="{{ route('sub',['subcat'=>$cat_value]) }}">{{ $cat_value }}</a>
          </li>
          @endforeach  
          <li class="menu-child">
            <a href="javascript:void(0)">About Us</a>
          </li>
          <li class="menu-child">
            <a href="javascript:void(0)">Blog</a>
          </li>
          <li class="menu-child">
            <a href="javascript:void(0)">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
 </header>