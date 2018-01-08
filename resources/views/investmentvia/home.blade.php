
    @extends('layouts.master')
      @section('title', 'HOME')

        @section('header')
        <h1>Home</h1>
        @stop
        @section('content')
    @include('partials/menu')
<style>
/*side bar */
div#title {
position:absolute;
top:300px;
left:650px;
}
select {
padding:6px;
width:100%;
font-size:15px;
border-radius:2px;
border:3px solid #98d0f1;
}
textarea {
padding:6px;
font-size:15px;
border-radius:2px;
border:3px solid #98d0f1;
margin-top:10px;
height:80px;
width:100%;
}

input[type=text] {
margin-top:10px;
padding:6px;
width:100%;
font-size:15px;
border-radius:2px;
border:3px solid #98d0f1;
}
#slider {
width:500px;
top: 107px;
position:fixed;z-index: 999;
}
#header {
    width: 341px;
height:520px;
position:absolute;
right:0;
border:1px solid #d8d8d8;
margin-left:40px;
padding:20px 40px;
border-radius:3px;
box-shadow:0 0 8px gray;z-index: 999;
background: #b5f0f7;
}
#sidebar {
position:absolute;
top:180px;
left:113px;
box-shadow:0 0 8px gray;
}
#sidebar1 {
position:absolute;
top:180px;
left:113px;
box-shadow:0 0 8px gray;
}
.slideout {
  position: fixed;
      z-index: 9999999;
  top: 520px;
  left: 0;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
}

.slideout_inner {
	    background-color: #000;
    color: #fff;
	padding:10px;
  position: fixed;
  top: 520px;
  left: -140px;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
}

.slideout:hover {
  left: 150px;
}
.slideout:hover .slideout_inner {
  left: 0;
}

p{
    line-height: normal;
    font-size: 15px;
}
.home-feature h2 {
    color: #fff;
    font-size: 27px;
    margin-bottom: 40px;
}
.feature-box {
    position: relative;
    margin-bottom: 45px;
}
.feature-box h4 {
    color: #fff;
    margin-bottom: 15px;
}
.feature-box p
{
color:#fff;
}
span.feature-abs0, span.feature-abs1, span.feature-abs2, span.feature-abs3 {
    color: #fff;
    background: #07bfd5;
    padding: 24px;
    font-size: 18px;
    border-radius: 100%;
    border: none;
    right: 0;
    position: absolute;
	top:0;
	height: 70px;
    width: 70px;
    text-align: center;
}
span.feature-abs0 {
    right: -80px;
}
span.feature-abs1 {
    right: -58px;
}
span.feature-abs2 {
    right: -55px;
}
span.feature-abs3 {
    right: -90px;
}
.mobile-view-clone img
{
float:right;
}
.home-feature
{
background:url('http://researchinfotech.co.in/public/assets/images/clone.png');
background-size:cover;
background-repeat:no-repeat;
padding:60px 0px;
height:680px;
}

</style>

 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="    padding: 9px 15px;">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="border: 1px solid #16b9ed;font-size: 30px; padding: 5px; opacity:1; color:#16b9ed;">&times;</button>
     </div>
      <div class="modal-body"style="padding:0px;">
        <img src="{{ asset('public/assets/images/paytm-QR-code.png')}}" class="img-responsive">
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>

<!--Header-->
 <!-- Sliding div starts here -->
			<div id="slider" style="right:-342px;">
        			<div id="sidebar" onclick="open_panel()"><img src="{{asset('public/assets/images/contact.png')}}"></div>
        			<div id="header">
        			<h2 style="font-size: 23px;font-weight: 900;color: #e22004;">Contact Form</h2>
        			
        			<input name="dname" type="text" value="Your Name">
        			<input name="demail" type="text" value="Your Email">
        			<h4>Query type</h4>
        			<select>
        			<option>General Query</option>
        			<option>General Query</option>
        			<option>General Query</option>
        			<option>Others</option>
        			</select>
        			<textarea>Message</textarea>
        			<button style="background: #f39c12;">Send Message</button>
    			</div>
			</div>
		<!-- Sliding div ends here -->

<!--Slider-->
<section class="rev_slider_wrapper text-center" style="width:100%; position: fixed">            
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
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">
            <!-- LAYER NR. 1 -->
        </li>
    @endif
      
    </ul>
  </div><!-- END REVOLUTION SLIDER -->
  <div class="over-content wow fadeInUp" data-wow-delay="500ms"">
            <h3 class="banner-heading">
                Favourable Business Practices Sustainable Profits.
            </h3>
            <p>
                Trading advice on Mobile Devices/IMs Purely based on Economic
News and Technical & Fundamental Analysis
            </p>
            <div class="main-btn"> 
                <button style="
    width: 150px;
    height: 40px;
    font-size: larger;
    font-weight: bold;
    background: #07bfd5;
    border: 0px;
" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Free Trial
                  </button> 
            </div>
           
            
            <div class="follow-us-banner">
                <p>Follow Us: <span><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></span></p>
            </div>
            <div class="live-btn">
                <p>
<!--                    <a href="#"><img src="{{ asset('storage/assets/images/live-rate.png')}}"></a> 
                    <a href="#"><img src="{{ asset('storage/assets/images/live-tv.png')}}"></a> -->
                    <a href="#"><img src="{{ asset('storage/assets/images/pay-online.png')}}"></a>
                </p>
            </div>
        </div>
        <!-- Large modal -->

<div class="">
    <a data-toggle="modal" data-target="#myModal"><img id="" src="{{ asset('storage/assets/images/paytm.png')}}"style="    width: 50px;
    position: fixed;
    top: 400px;
    left: 2px;
    z-index: 999999;
    border: 1px solid #042e6f;
    border-radius: 8px;    width: 40px;     cursor: pointer;"></a>

</div>


]<div class="slideout">
    <a href="#"><img src="{{ asset('storage/assets/images/watsapp.png')}}" alt=""></a>
  <div class="slideout_inner">
    +91-8982890444
  </div>
</div>
        
        
</section>  
 



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

<div class="home-feature wow fadeInUp" data-wow-delay="500ms">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2>Let Know Our Feature - Research Infotech</h2>
				<div class="feature-box">
					<h4>Daily and weekly research report</h4>
					<p>
						Trading advice on Mobile Devices/IMs Purely based on Economic News and Technical & Fundamental Analysis
					</p>
					<span class="feature-abs0"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span>
				</div>
				<div class="feature-box">
					<h4>Live chat Facilities</h4>
					<p>
						Trading advice on Mobile Devices/IMs Purely based on Economic News and Technical & Fundamental Analysis
					</p>
					<span class="feature-abs1"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
				</div>
				<div class="feature-box">
					<h4>Intense 27/7 support</h4>
					<p>
						Trading advice on Mobile Devices/IMs Purely based on Economic News and Technical & Fundamental Analysis
					</p>
					<span class="feature-abs2"><i class="fa fa-phone" aria-hidden="true"></i></span>
				</div>
				<div class="feature-box">
					<h4>Personalized Service</h4>
					<p>
						Trading advice on Mobile Devices/IMs Purely based on Economic News and Technical & Fundamental Analysis
					</p>
					<span class="feature-abs3"><i class="fa fa-cogs" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-sm-6 mobile-view-clone">
				<img src="{{ asset('public/assets/images/mobile-bg.png')}}">
				
			</div>
		</div>
	</div>
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
 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">2 Days Free Trial</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="
    position: absolute;
    top: 10px;
">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 

        <div class="banner-right col-md-12 col-sm-12 jw-animate-gen animated fadeInRight" data-gen-offset="90%" data-gen="fadeInRight">
            <form method="post" action="{{url('freeTrial')}}">

                <input type="text" placeholder="Enter Name" name="name" required="" autofocus="true"> 

                <input type="number" placeholder="Enter 10 Digit Phone Number" name="phone" required="" maxlength="10" size="10" min="999999999">

                <input type="submit" class="submit trai-btn" value="Start My Free Trial Now!">

            </form> 

            </div>
             
        </form>
      </div>
      
    </div>
  </div>
</div>

<script>
		    /*
------------------------------------------------------------
Function to activate form button to open the slider.
------------------------------------------------------------
*/
function open_panel() {
slideIt();
var a = document.getElementById("sidebar");
a.setAttribute("id", "sidebar1");
a.setAttribute("onclick", "close_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (open form)
------------------------------------------------------------
*/
function slideIt() {
var slidingDiv = document.getElementById("slider");
var stopPosition = 0;
if (parseInt(slidingDiv.style.right) < stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
setTimeout(slideIt, 1);
}
}
/*
------------------------------------------------------------
Function to activate form button to close the slider.
------------------------------------------------------------
*/
function close_panel() {
slideIn();
a = document.getElementById("sidebar1");
a.setAttribute("id", "sidebar");
a.setAttribute("onclick", "open_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (slide in form)
------------------------------------------------------------
*/
function slideIn() {
var slidingDiv = document.getElementById("slider");
var stopPosition = -342;
if (parseInt(slidingDiv.style.right) > stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
setTimeout(slideIn, 1);
}
}
		</script>
    <!--Paralax --> 
 @stop