
    @extends('layouts.master')
      @section('title', 'HOME')

        @section('header')
        <h1>Home</h1>
        @stop
        @section('content')
    @include('partials/menu')
    

      <!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common yellow">Search</button>
  </form>
</div>

<!--Slider-->
<section class="rev_slider_wrapper text-center">            
<!-- START REVOLUTION SLIDER 5.0 auto mode -->
  <div id="rev_slider_full" class="rev_slider" data-version="5.0">
    <ul>    
    <!-- SLIDE  --> 
    @if($banner->count())
        @foreach($banner as $key => $value)  
            <li data-transition="fade">
            <!-- MAIN IMAGE -->
                <img src="{!! asset('storage/files/banner/'.$value->field_value) !!}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
            <!-- LAYER NR. 1 -->
            </li>
        @endforeach
    @else
        <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('storage/assets/images/news2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
            <!-- LAYER NR. 1 -->
        </li>
    @endif
      
    </ul>
  </div><!-- END REVOLUTION SLIDER -->
  <div class="over-content wow fadeInUp" data-wow-delay="300ms"">
            <h3 class="banner-heading">
                Favourable Business Practices Sustainable Profits.
            </h3>
            <p>
                Trading advice on Mobile Devices/IMs Purely based on Economic
News and Technical & Fundamental Analysis
            </p>
            <div class="main-btn">
                 <a href="#" class="" data-toggle="modal" data-target=".bs-example-modal-lg">Free Trial</a>
            </div>
            <div class="follow-us-banner">
                <p>Follow Us: <span><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></span></p>
            </div>
            <div class="live-btn">
                <p>
                    <a href="#"><img src="{{ asset('storage/assets/images/live-rate.png')}}"></a> 
                    <a href="#"><img src="{{ asset('storage/assets/images/live-tv.png')}}"></a> 
                    <a href="#"><img src="{{ asset('storage/assets/images/pay-online.png')}}"></a>
                </p>
            </div>
        </div>
        <!-- Large modal -->

 
<div class="paytm wow fadeInUp" data-wow-delay="300ms""">
    <a href="#"><img src="{{ asset('storage/assets/images/paytm.png')}}" alt=""></a>
</div>
<div class="watsapp wow fadeInUp" data-wow-delay="300ms""">
    <a href="#"><img src="{{ asset('storage/assets/images/watsapp.png')}}" alt=""></a>
</div>
</section>  
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form>
                        <div class="form-group">
                            <input class="trai-input" type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <input class="trai-input" type="text" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group">
                            <input type="button" class="trai-btn" value="Submit">
                        </div>
                        <div class="form-group">
                            <input type="button" class="trai-btn" value="Cancel">
                        </div>
                    </form>
                    <p class="lower-line">By clicking submit, you must agree to our <a href="#">Terms & Conditions</a></p>
    </div>
  </div>
</div>
<div class="free-trial-section marqu">
    <p class="marq"><marquee>Trading advice on Mobile Devices/IMs Purely based on Econom News and Technical & Fundamental Analysis Trading advice on Mobile Devices/IMs Purely based on Econom News and Technical & Fundamental Analysis</marquee></p>
</div>


<!--ABout US-->
<section id="our-services" class="service-section">
  <div class="container-fluid">
            <div class="service-bg">        
                <img width="450" height="100%" src="{{ asset('storage/assets/images/services-bg.png')}}" class="attachment-thumb-450-450 imgrotate" alt="services-bg">               <h3>Services</h3>
            </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 mcx-side">
                        <div class="service-box-inner animated slideInLeft">
                        <div class="col-md-4 pull-right  col-sm-5">
                                                <i class="fa fa-rupee"></i>
                                                
                        </div>
                        <div class="col-md-8 pull-right content-box col-sm-6">
                        <h3 class="block-title">MCX GOLD OPTION TIPS</h3>
                        <p>Big opportunity for retail trades who wish to trades in GOLD commodity                       
                        </p>                            
                        </div>
                        </div>
                        </div>  

                        <div class="col-md-6 col-sm-12 col-xs-12 nifty-side">
                            <div class="service-box-inner animated slideInRight">
                                <div class="col-md-4   col-sm-5">
                                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                                                        
                                </div>
                            <div class="col-md-8 pull-right content-box col-sm-6">
                                <h3 class="block-title">Nifty Option Tips</h3>
                                <p>For starters with very less capital -- Anyone who wants to start anew                        
                                </p>                            
                            </div>
                            </div>
                        </div>  

                        <div class="col-md-6 col-sm-12 col-xs-12 stock-side">
                            <div class="service-box-inner animated slideInLeft">
                                <div class="col-md-4 pull-right  col-sm-5">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                                        
                                </div>
                                <div class="col-md-8 pull-right content-box col-sm-6">
                                <h3 class="block-title">Stock Cash BTST Tips</h3>
                                <p>Get benefit from gap up/gap down market every day, while entering in t                       
                                </p>                            
                                </div>
                            </div>
                        </div>  

                                    <div class="col-md-6 col-sm-12 col-xs-12 inve-side">
                        <div class="service-box-inner animated slideInRight">
                        <div class="col-md-4   col-sm-5">
                                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                                
                        </div>
                        <div class="col-md-8 pull-right content-box col-sm-6">
                        <h3 class="block-title">Inventory Calls</h3>
                        <p>Inventory Calls-based on Inventory Report. Get the benefit of each &amp; e                       
                        </p>                            
                        </div>
                        </div>
                        </div>  

                                    <div class="col-md-6 col-sm-12 col-xs-12 stock-option-side">
                        <div class="service-box-inner animated slideInLeft">
                        <div class="col-md-4 pull-right  col-sm-5">
                                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                                
                        </div>
                        <div class="col-md-8 pull-right content-box col-sm-6">
                        <h3 class="block-title">Stock Option Platinum Tips </h3>
                        <p>In this pack we provide calls in Stock Option segment for traders to g
                        </p>                            
                        </div>
                        </div>
                        </div>  

                                    <div class="col-md-6 col-sm-12 col-xs-12 future-side">
                        <div class="service-box-inner animated slideInRight">
                        <div class="col-md-4   col-sm-5">
                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                
                        </div>
                        <div class="col-md-8 pull-right content-box col-sm-6">
                        <h3 class="block-title">Stock Future Platinum Tips</h3>
                        <p>In this pack we provide calls in Stock Future segment for traders to g                       
                        </p>                            
                        </div>
                        </div>
                        </div>  

                            
                                            
            
        </div>
</section>
<!--ABout US-->

<div class="home-feature wow fadeInUp" data-wow-delay="500ms""">
    <img src="{{ asset('storage/assets/images/home-feature.jpg')}}">
</div>

<div class="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center what-heading">
                <h2 class="heading">What We Do. <span class="divider-center"></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="what-content wow fadeInUp" data-wow-delay="500ms">
                    <p><img src="{{ asset('storage/assets/images/right-circle.jpg')}}"></p>
                    <h3>CUSTOMER/ON-CALL SUPPORT</h3>
                    <p class="what-desc">In this service we provide limited calls in GOLD/SILVER with a high level of accuracy. You can also avail Free Tips for two days to test our accuracy and if satisfied you can join BULLION HNI services</p>
                </div>
            </div>
            <div class="col-sm-4 border-right">
                <div class="what-content wow fadeInUp" data-wow-delay="500ms""">
                    <p><img src="{{ asset('storage/assets/images/right-circle.jpg')}}"></p>
                    <h3>CUSTOMER/ON-CALL SUPPORT</h3>
                    <p class="what-desc">In this service we provide limited calls in GOLD/SILVER with a high level of accuracy. You can also avail Free Tips for two days to test our accuracy and if satisfied you can join BULLION HNI services</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="what-content wow fadeInUp" data-wow-delay="500ms""">
                    <p><img src="{{ asset('storage/assets/images/right-circle.jpg')}}"></p>
                    <h3>CUSTOMER/ON-CALL SUPPORT</h3>
                    <p class="what-desc">In this service we provide limited calls in GOLD/SILVER with a high level of accuracy. You can also avail Free Tips for two days to test our accuracy and if satisfied you can join BULLION HNI services</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="what-content wow fadeInUp" data-wow-delay="500ms""">
                    <p><img src="{{ asset('storage/assets/images/right-circle.jpg')}}"></p>
                    <h3>CUSTOMER/ON-CALL SUPPORT</h3>
                    <p class="what-desc">In this service we provide limited calls in GOLD/SILVER with a high level of accuracy. You can also avail Free Tips for two days to test our accuracy and if satisfied you can join BULLION HNI services</p>
                </div>
            </div>
            <div class="col-sm-4 border-right">
                <div class="what-content wow fadeInUp" data-wow-delay="500ms""">
                    <p><img src="{{ asset('storage/assets/images/right-circle.jpg')}}"></p>
                    <h3>CUSTOMER/ON-CALL SUPPORT</h3>
                    <p class="what-desc">In this service we provide limited calls in GOLD/SILVER with a high level of accuracy. You can also avail Free Tips for two days to test our accuracy and if satisfied you can join BULLION HNI services</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="what-content wow fadeInUp" data-wow-delay="500ms""">
                    <p><img src="{{ asset('storage/assets/images/right-circle.jpg')}}"></p>
                    <h3>CUSTOMER/ON-CALL SUPPORT</h3>
                    <p class="what-desc">In this service we provide limited calls in GOLD/SILVER with a high level of accuracy. You can also avail Free Tips for two days to test our accuracy and if satisfied you can join BULLION HNI services</p>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="tracksheet">
    <div class="row">
        <div class="col-sm-5">
            
        </div>
        <div class="col-sm-7 track-content">
            <h3>Tracksheet and Reports</h3>
            <p class="track-para">Commodity Trading, Swing Trading, Future Trading and Option Trading in Stock,
Commodity & Bullion Market.</p>
            <div class="tracksheet-block">
                <div class="block1 wow fadeInUp" data-wow-delay="500ms">
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Bullion </p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Stock Cash</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Option</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Stock Future</p>
                </div>
                <div class="block1 wow fadeInUp" data-wow-delay="500ms">
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Bullion </p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Stock Cash</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Option</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Stock Future</p>
                </div>
                <div class="block1 wow fadeInUp" data-wow-delay="500ms">
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Bullion </p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Stock Cash</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Option</p>
                    <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Stock Future</p>
                </div>
            </div>
           <!--  <div class="main-btn">
                <a href="#">View All</a>
            </div> -->
        </div>
    </div>
</div>

<!--Fun Facts-->

<!--Fun Facts-->



<!-- Gallery -->

<!-- Gallery -->

<!--Customers Review-->
<section id="reviews" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
      <h2 class="heading heading_space"> <span>Client</span> Testimonials <span class="divider-center"></span> </h2>
      <div id="review_slider" class="owl-carousel text-center">
        <div class="item">
          <img src="{{ asset('storage/assets/images/customer1.png')}}" class="client_pic border_radius" alt="costomer">
          <p class="review_text">I've been happy with the services provided by Xwin LLC. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. We are here to help you from the initial phase to the final Xwin phase.</p>
          <h4>John Smith</h4>
          <p>Ditector Shangha</p>
        </div>
        <div class="item">
          <img src="{{ asset('storage/assets/images/customer1.png')}}" class="client_pic border_radius" alt="costomer">
          <p class="review_text">I've been happy with the services provided by Xwin LLC. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. We are here to help you from the initial phase to the final Xwin phase.</p>
          <h4>kate Winslet</h4>
          <p>Ditector Shangha</p>
        </div>
        <div class="item">
          <img src="{{ asset('storage/assets/images/customer1.png')}}" class="client_pic border_radius" alt="costomer">
          <p class="review_text">I've been happy with the services provided by Xwin LLC. We are here to help you from the initial phase to the final Xwin phase. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. </p>
          <h4>Robert Jhon</h4>
          <p>Ditector Shangha</p>
        </div>
        <div class="item">
          <img src="{{ asset('storage/assets/images/customer1.png')}}" class="client_pic border_radius" alt="costomer">
          <p class="review_text">I've been happy with the services provided by Xwin LLC. We are here to help you from the initial phase to the final Xwin phase. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. </p>
          <h4>Robert Jhon</h4>
          <p>Ditector Shangha</p>
        </div>
        <div class="item">
          <img src="{{ asset('storage/assets/images/customer1.png')}}" class="client_pic border_radius" alt="costomer">
          <p class="review_text">I've been happy with the services provided by Xwin LLC. We are here to help you from the initial phase to the final Xwin phase. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. </p>
          <h4>Robert Jhon</h4>
          <p>Ditector Shangha</p>
        </div>
        <div class="item">
          <img src="{{ asset('storage/assets/images/customer1.png')}}" class="client_pic border_radius" alt="costomer">
          <p class="review_text">I've been happy with the services provided by Xwin LLC. We are here to help you from the initial phase to the final Xwin phase. Scooter Libby has been wonderful! He has returned my calls quickly, and he answered all my questions. This is required when, for example, the final text is not yet available. </p>
          <h4>Robert Jhon</h4>
          <p>Ditector Shangha</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>
<!--Customers Review-->

<section id="counter" class="parallax padding">
  <div class="container">
    <h2 class="hidden">hidden</h2>
    <div class="row number-counters">
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="300ms">
        <i class="icon-layers"></i>
        <strong data-to="1235">0</strong>
        <p>Project Completed</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="400ms">
        <i class="icon-trophy"></i>
        <strong data-to="78">0</strong>
        <p>Awards Won</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="500ms">
        <i class=" icon-icons20"></i>
        <strong data-to="186">0</strong>
        <p>Hours of Work / Month</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 counters-item text-center wow fadeInUp" data-wow-delay="600ms">
        <i class="icon-happy"></i>
        <strong data-to="89">0</strong>
        <p>Satisfied Clients</p>
      </div>
    </div>
  </div>
</section>

<!--Paralax -->
<section id="parallax" class="parallax">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow bounceIn">
       <p class="bottom25 whitecolor">Lets Know About Our Expertise</p>
       <h1 class="bottom25 whitecolor">We Have More Than 1000+ Satisfied Clients</h1>
       <a href="#." class="border_radius btn_common white_border">Get a Quote</a>
      </div>
    </div>
  </div>
</section>
<!--Paralax -->
<!-- News-->
 

    <!--Paralax --> 
 @stop