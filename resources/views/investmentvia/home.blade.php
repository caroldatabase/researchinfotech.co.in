
    @extends('layouts.master')
      @section('title', 'HOME')

        @section('header')
        <h1>Home</h1>
        @stop
        @section('content')
    @include('partials/menu')
    <!--Slider-->
    <section class="rev_slider_wrapper text-center">			
    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
      <div id="rev_slider_full" class="rev_slider" data-version="5.0">
        <ul>	
        <!-- SLIDE  -->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('storage/assets/images/banner3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
            							
            <!-- LAYER NR. 1 -->
          </li>
           <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('storage/assets/images/banner4.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
            							
            <!-- LAYER NR. 1 -->
          </li>
          
        </ul>
      </div><!-- END REVOLUTION SLIDER -->
      <div class="over-content">
            	<h3 class="banner-heading">
                	Favourable Business Practices Sustainable Profits.
                </h3>
                <p>
                	Trading advice on Mobile Devices/IMs Purely based on Economic
    News and Technical & Fundamental Analysis
                </p>
                <div class="main-btn">
               		 <a href="#" class="">Free Trial</a>
                </div>
            </div>
    </section>	


    <!--ABout US-->
    <section id="about" class="padding">
      <div class="container">
        <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="heading"><span>Our</span> Services <span class="divider-center"></span></h2>
        </div>
        <div class="icon_wrapclearfix">
          <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="300ms">
             <img src="{{ asset('storage/assets/images/icon1.png')}}">
             <h4 class="text-capitalize bottom20 margin10">BULLION HNI</h4>
             <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
          </div>
          <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="400ms">
              <img src="{{ asset('storage/assets/images/icon2.png')}}">
             <h4 class="text-capitalize bottom20 margin10">DERIVATIVES HNI</h4>
             <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
          </div>
          <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="500ms">
              <img src="{{ asset('storage/assets/images/icon3.png')}}">
             <h4 class="text-capitalize bottom20 margin10">NCDEX</h4>
             <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
          </div>
          <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="500ms">
             <img src="{{ asset('storage/assets/images/icon4.png')}}">
             <h4 class="text-capitalize bottom20 margin10">MCX BASIC</h4>
             <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
          </div>
          <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="400ms">
              <img src="{{ asset('storage/assets/images/icon5.png')}}">
             <h4 class="text-capitalize bottom20 margin10">EQUITY BASIC</h4>
             <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
          </div>
          <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="500ms">
              <img src="{{ asset('storage/assets/images/icon6.png')}}">
             <h4 class="text-capitalize bottom20 margin10">BTST/STBT NCDEX</h4>
             <p class="no_bottom">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!--ABout US-->

    <div class="tracksheet">
    	<div class="row">
        	<div class="col-sm-5">
            	
            </div>
            <div class="col-sm-7 track-content">
            	<h3>Tracksheet and Reports</h3>
                <p class="track-para">Commodity Trading, Swing Trading, Future Trading and Option Trading in Stock,
    Commodity & Bullion Market.</p>
    			<div class="tracksheet-block">
                	<div class="block1">
                    	<p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                    </div>
                    <div class="block1">
                    	<p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                    </div>
                    <div class="block1">
                    	<p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                        <p><img src="{{ asset('storage/assets/images/excel.png')}}"> Agri</p>
                    </div>
                </div>
                <div class="main-btn">
                	<a href="#">View All</a>
                </div>
            </div>
        </div>
    </div>

    <!--Fun Facts-->
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
    <!--Fun Facts--> 

    <!-- Gallery -->

    <!-- Gallery -->

    <!--Customers Review-->
    <section id="reviews" class="padding bg_light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center wow fadeInDown">
          <h2 class="heading heading_space"><span>Client</span> Testimonials <span class="divider-center"></span></h2>
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
           </div>
          </div>
        </div>
      </div>
    </section> 
    <!--Customers Review-->

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
 @stop