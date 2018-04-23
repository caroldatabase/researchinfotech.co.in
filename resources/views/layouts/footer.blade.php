<!-- News-->
<!-- News-->
<section id="news" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown text-center">
       <h2 class="heading heading_space"><span>Current </span> Market Update <span class="divider-center"></span></h2>
      </div>
    </div>
    <div class="row">
  <ul class="list-inline">
      <li>
          <a href="https://www.nseindia.com" target="_blank">  <img src="{{ asset('storage/assets/images/nse.jpg')}}"> </a>
      </li>
       <li>
          <a href="https://www.marketwatch.com" target="_blank">  <img src="{{ asset('storage/assets/images/marketwatch.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.investing.com" target="_blank">  <img src="{{ asset('storage/assets/images/investing.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.www.moneycontrol.com" target="_blank"> <img src="{{ asset('storage/assets/images/moneycontrol.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.mcxcontrol.com" target="_blank">  <img src="{{ asset('storage/assets/images/mcx.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.cnbc.com" target="_blank"> <img src="{{ asset('storage/assets/images/cnbc.jpg')}}"> </a>
      </li>
      </ul>
    </div>
  </div>
</section>


<!--FOOTER-->
<footer class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">About Us<span class="divider-left"></span></h3>
        <a href="index.html" class="footer_logo bottom25">

        <img src="{{ asset('storage/assets/images/logo-white.png')}}" alt="Xwin"></a>
        <p>Welcome to Research Infotech, We have been known for serving our customers with atmost care and dedication. Our motto has been always aligned with "Delivering Quality Services" and "Customer Satisfaction".</p>
        <ul class="social_icon top25">
          <li><a href="{{$facebook_url->field_value or '#'}}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="{{$twitter_url->field_value or '#'}}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="{{$linkedin_url->field_value or '#'}}" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
          
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="{{url('/')}}"><i class="fa fa-right"></i>Home</a></li>
          <li><a href="{!! url('about')!!}"><i class="fa fa-right"></i>About Company</a></li>
          <li><a href="{!! url('services')!!}"><i class="fa fa-right"></i>Services</a></li>
          <li><a href="{!! url('contact')!!}"><i class="fa fa-right"></i>Contact Us</a></li>
          <li><a href="{{url('free-trial')}}"><i class="fa fa-right"></i>Free Trial</a></li>
          <li><a href="{!! url('payment')!!}"><i class="fa fa-right"></i>Payment</a></li>
          <li><a href="{!! url('pricing')!!}"><i class="fa fa-right"></i>Pricing</a></li> 
          <li><a href="{!! url('risk-profiling')!!}"><i class="fa fa-right"></i>Risk profiling</a></li> 


          @foreach($pageMenu as $val)
          <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
         @endforeach
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
         <p class=" address" style="float: left;"><i class="fa fa-map-marker" aria-hidden="true"></i>{!! $company_address !!}</p>
        <p class=" address" ><i class="fa fa-phone" aria-hidden="true"></i>{!! $contact_number !!}</p>
         <img src="{{ asset('storage/assets/images/footer-map.png')}}" class="img-responsive">
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; {{date('Y')}} <a href="#.">Research Infotech</a>. all rights reserved. | SEBI REGISTRATION NO: INA000003726</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->



<script src="{{ asset('public/assets/js/jquery-2.2.3.js')}}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/assets/js/bootsnav.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.appear.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery-countTo.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{ asset('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.matchHeight-min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('public/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('public/assets/js/functions.js')}}"></script>
<script src="https://js.instamojo.com/v1/button.js"></script>
<script>
  $('.owl-carousel-2').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        300:{
            items:3,
            nav:false
        },
        500:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>

 <script> 
        
  $(function () {
      $('body').show();
  }); 
  </script>
 
<script>
!function() {
  var t;
  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
  t.factory = function(e) {
    return function() {
      var n;
      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
    };
  }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
  }), t.load = function(t) {
    var e, n, o, i;
    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
  });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('9iwz8utnsf2m');
</script>

</body>
</html>