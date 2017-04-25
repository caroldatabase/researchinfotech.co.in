
@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@include('partials/menu')
    <!--Slider-->

 


<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>About US</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>About Us</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->


<!--ABout US-->
<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
       <h2 class="heading heading_space"><span>Welcome </span>to Investmentvia <span class="divider-left"></span></h2>
       <h4 class="bottom25">About Us </h4>
       <p class="bottom25">We use state of art technology for sending SMS to ensure that our recommendation reaches the client instantly so that they have sufficient time to enter the trade and maximize gains and minimize loss. Our research team consists of highly qualified and experienced analysts who use state of art technologies and software's to find the right opportunities in the market with high accuracy. There analytical skill and accuracy level is our biggest strength.</p>
       <p class="bottom25">Excellent services to our clients are our utmost priority. For ensuring this we have dedicated team of Market Expert which take care of clients personally online and by telephonic assistance round the clock.</p>
       <p>Investmentvia Advisory Service is a team of expert analyst with vast experience in commodity market research. We provide recommendations commodities including bullion, agri and metals traded in MCX and NCDEX. We also provide daily and weekly reports having overview of commodity market which helps the investors to understand the trends of the market and helps in taking wise decisions.

We provide recommendations to our clients through SMS and Live Chat. We use state of art technology for sending SMS to ensure that our recommendation reaches the client instantly so that they have sufficient time to enter the trade and maximize gains.Our research team consists of highly qualified and experienced analysts who use state of art technologies and software's to find the right opportunities in the market with high accuracy. There analytical skill and accuracy level is our biggest strength.

Excellent services to our clients are our utmost priority. For ensuring this we have dedicated team of Business Analysts which take care of clients personally online and by telephonic assistance round the clock.

We have wide range of services so that investor can use our services as per his trading style. Swing traders, STBT/BTST traders, Arbitragers, Risk hedgers and Long term investors can avail our services to gain the profit from their investments.</p>
      </div>
      <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
        <div class="image">
         <img src="{{ asset('storage/assets/images/counter1.jpg')}}" alt="Xwin">
        </div>
      </div>
    </div>
  </div>
</section>