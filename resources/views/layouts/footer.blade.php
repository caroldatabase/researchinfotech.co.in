<!-- News-->
<section id="news" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown text-center">
       <h2 class="heading heading_space"><span>Current </span> Market Update <span class="divider-center"></span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <img src="{{ asset('storage/assets/images/nse.jpg')}}">
      </div>
      <div class="col-md-2">
        <img src="{{ asset('storage/assets/images/marketwatch.jpg')}}">
      </div>
      <div class="col-md-2">
        <img src="{{ asset('storage/assets/images/investing.jpg')}}">
      </div>
      <div class="col-md-2">
        <img src="{{ asset('storage/assets/images/moneycontrol.jpg')}}">
      </div>
      <div class="col-md-2">
        <img src="{{ asset('storage/assets/images/mcx.jpg')}}">
      </div>
      <div class="col-md-2">
        <img src="{{ asset('storage/assets/images/cnbc.jpg')}}">
      </div>
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
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#." class="dribble"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#." class="instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="fa fa-vimeo"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="#."><i class="fa fa-right"></i>Home</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Company</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Services</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Our Team</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Company History</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Certifications</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Blog</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Shop</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Privacy Policy</a></li>
          <li><a href="#."><i class="fa fa-right"></i>Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
        <p class=" address"><i class="fa fa-map-marker" aria-hidden="true"></i>Research Infotech Advisory Service, Indore , India</p>
        <p class=" address"><i class="fa fa-phone" aria-hidden="true"></i>+91-8982890444</p>
         <img src="{{ asset('storage/assets/images/footer-map.png')}}" class="img-responsive">
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; {{date('Y')}} <a href="#.">Research Infotech</a>. all rights reserved.</p>
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

<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>

</body>
</html>