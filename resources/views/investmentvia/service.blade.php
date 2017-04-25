
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu');

 

<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Services</h1>
        <p>We are recommending Intraday / BTST/ STBT /Positional tips in various Product(Packages).</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="home">Home</a> <span><i class="fa fa-angle-double-right"></i>Services</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->

<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
       <h2 class="heading heading_space"><span>Our </span> Services <span class="divider-left"></span></h2>
       <h4 class="bottom25">Services </h4>
       <p class="bottom25">We are recommending Intraday / BTST/ STBT /Positional tips in various Product(Packages). Our Stock Cash , Derivatives (FnO) MCX/NCDEX Product are designed ideally to suit investors needs. Investors are advised to trade in multiple lots as per their trading capacity , investment amount as well as exposure suggested by your desired broker</p>
       <p class="bottom25 service-list"> 

           <ul class="pricing_list">
                <li class="pricing_feature">Complete support for all your market queries & open positions.</li>
                <li class="pricing_feature">Alerts are given on live market rates in real time</li>
                <li class="pricing_feature">Get 85-90% accurate alerts in all packages</li>
                <li>Regular followup by dedicated relationship manager</li> 
                 <li>Dedicated & experienced research teams for each segment.</li> 

                  <li>Live Chat option.</li> 
                  <li>All calls sent by sms, skype & yahoo messenger.</li>
                  <li>SMS sent from high priority international servers.</li>
                  <li>100% follow up</li>
              </ul>


       </p>
      </div>
      <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
        <div class="image">
         <img src="{{ asset('storage/assets/images/counter1.jpg')}}" alt="Xwin">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="text-center"><h2 class="heading "><span></span> Services <span class="divider-center"></span></h2></div>

<section id="course_all" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="services_detail.html">Intraday Cash (Basic)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="500ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news1.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="services_detail.html">Cash (HNI)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="600ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news2.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="services_detail.html">Stock Future (Basic)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top  wow fadeIn" data-wow-delay="700ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news1.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="services_detail.html">Stock Future (HNI)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="800ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news2.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="services_detail.html">MCX (Basic)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">MCX (HNI)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">Agri (Basic)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">Option (Basic)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">Option (HNI)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">BTST – STBT PACK</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">Cash & FnO (Combo)PACK</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">MCX & NCDEX (Combo)PACK</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="services_detail.html">Express Package (single script)</a></h3>
          <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
          <a class="btn_common yellow border_radius" href="services_detail.html">view details</a>
        </div>
      </div>
    </div>
  </div>
</section>
@stop