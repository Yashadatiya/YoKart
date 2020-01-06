<footer>
    <div class="custom-container">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-12">
          <div class="footer-group">
            <h5 class="footer-title">Info</h5>
            <ul class="footer-links">
              <li><a href="javascript:void(0)">Terms and Conditions</a></li>
              <li><a href="javascript:void(0)">Privacy Policies</a></li>
              <li><a href="javascript:void(0)">About Us</a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12">
          <div class="footer-group">
            <h5 class="footer-title">Help</h5>
            <ul class="footer-links">
              @foreach($helps as $help)
                <li><a href="#">{{ $help->title }}</a></li>
              @endforeach
              <!-- <li><a href="javascript:void(0)">How to Buy</a></li>
              <li><a href="javascript:void(0)">How to Payment</a></li>
              <li><a href="javascript:void(0)">How to Refund</a></li>
              <li><a href="javascript:void(0)">How to Join as Member</a></li> -->
              
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12">
          <div class="footer-group">
            <h5 class="footer-title">Customer Care</h5>
            <ul class="footer-links">
              @if($customercare->contactno)
                <li><i class="fa fa-phone-volume"></i><a href="tel:6281219082008">{{ $customercare->contactno }}</a></li>
              @endif
              @if($customercare->phone_no)
                <li><i class="fa fa-phone-volume"></i><a href="tel:6281219082008">{{ $customercare->phone_no }}</a></li>
              @endif
              @if($customercare->email)
                <li><i class="fa fa-envelope"></i><a href="javascript:void(0)">{{ $customercare->email }}</a></li>
              @endif
              @if($customercare->whatsappno)
                <li><i class="fab fa-whatsapp"></i><a href="tel:6281219082008">{{ $customercare->whatsappno }}</a></li>
              @endif
              {{-- <li><i class="fa fa-phone-volume" aria-hidden="true"></i><a href="">dummy  </a></li>
              <li><i class="fa fa-phone-volume"></i><a href="tel:6281219082008">+62812 1908 2008</a></li>
              <li><i class="fa fa-envelope"></i><a href="javascript:void(0)">Terms and Conditions</a></li>
              <li><i class="fab fa-whatsapp"></i><a href="tel:6281219082008">+62812 1908 2008</a></li>
              <li><i class="fa fa-phone-volume" aria-hidden="true"></i><a href=""> <a href="javascript:void(0)">@shop.id</a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12">
          <div class="footer-group">
            <h5 class="footer-title">Sell with Yokart</h5>
            <div class="store-button">
              <a class="btn" href="javascript:void(0)"><img src="{{ asset('front/images/store-icn.png') }}">Open a Store</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-12">
          <div class="footer-group">
            <h5 class="footer-title">Sign Up To Our Newsletter</h5>
            <p>Be The First To Here About The Latest Trends, New Arrivals & Exclusive Offers</p>
            <form class="newsletter">
              <div class="form-item">
                <input placeholder="Enter Your Email Address" type="text" name="email">
              </div>
              <div class="form-action">
                <input class="btn" type="submit" name="btnsubmit" value="Subscribe">
              </div>
            </form>
            <ul class="contact-info">
              <li><img src="{{ asset('front/images/icn-mobile.png')}}" alt="icn-mobile">(180) 027-2172</li>
              <li><a href="mailto:yokart@dummyid.com"><img src="{{ asset('front/images/icn-email.png')}}" alt="icn-email">yokart@dummyid.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row bottom-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="payment">
            <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">  <img src="{{ asset('front/images/payment.png')}}" alt="Payment Options">
          </div>
        </div>
      </div>
    </div>

    <div class="copyright-footer">
      <div class="custom-container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p class="copyright">Â© 2019 yokart Inc. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
