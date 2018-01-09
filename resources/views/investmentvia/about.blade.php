
@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu') 
@include('partials/titlebar')

<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
       <h2 class="heading heading_space"><span>Welcome </span>to Research Infotech <span class="divider-left"></span></h2>
       <h4 class="bottom25">About Us </h4>
       <p class="bottom25">We use state of art technology for sending SMS to ensure that our recommendation reaches the client instantly so that they have sufficient time to enter the trade and maximize gains and minimize loss. Our research team consists of highly qualified and experienced analysts who use state of art technologies and software's to find the right opportunities in the market with high accuracy. There analytical skill and accuracy level is our biggest strength.</p>
       <p class="bottom25">Excellent services to our clients are our utmost priority. For ensuring this we have dedicated team of Market Expert which take care of clients personally online and by telephonic assistance round the clock.</p>
       <p>Research Infotech Advisory Service is a team of expert analyst with vast experience in commodity market research. We provide recommendations commodities including bullion, agri and metals traded in MCX and NCDEX. We also provide daily and weekly reports having overview of commodity market which helps the investors to understand the trends of the market and helps in taking wise decisions.

We provide recommendations to our clients through SMS and Live Chat. We use state of art technology for sending SMS to ensure that our recommendation reaches the client instantly so that they have sufficient time to enter the trade and maximize gains.Our research team consists of highly qualified and experienced analysts who use state of art technologies and software's to find the right opportunities in the market with high accuracy. There analytical skill and accuracy level is our biggest strength.

Excellent services to our clients are our utmost priority. For ensuring this we have dedicated team of Business Analysts which take care of clients personally online and by telephonic assistance round the clock.

We have wide range of services so that investor can use our services as per his trading style. Swing traders, STBT/BTST traders, Arbitragers, Risk hedgers and Long term investors can avail our services to gain the profit from their investments.</p>
      </div>
      <div class="col-md-5 wow fadeInRight animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
        <div class="image"> 
         <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Xwin">
        </div>
        <br>
        <div class="image"> 
         <img src="{{ asset('storage/assets/images/news2.jpg')}}" alt="Xwin">
        </div>
      </div>
    </div>
  </div>
</section>
@stop