@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu')
    <!--Slider-->  
    <div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div>
  <!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Services</h1>
        <p>We are recommending Intraday / BTST/ STBT /Positional tips in various Product(Packages).</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="/">Home</a> <span><i class="fa fa-angle-double-right"></i>Services</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->

<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-12 wow fadeInLeft" data-wow-delay="300ms">
       <h2 class="heading heading_space text-center-service"><span>Our </span>Services </h2>
       <p class="bottom25">We are recommending Intraday / BTST/ STBT /Positional tips in various Product(Packages). Our Stock Cash , Derivatives (FnO) MCX/NCDEX Product are designed ideally to suit investors needs. Investors are advised to trade in multiple lots as per their trading capacity , investment amount as well as exposure suggested by your desired broker</p>
       
      </div>
        
    </div>
  </div>
</section>

<section id="course_all" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="#">Intraday Cash (Basic)</a></h3>
          <p class="bottom20">Our Intraday Cash service is for NSE traders who trade in cash Market. In which we will be providing all Intraday Cash segment calls, Resistance & Support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="500ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/cash-hni.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="#">Cash (HNI)</a></h3>
          <p class="bottom20">Our HNI Cash service is for NSE traders who trade in cash Market. In which we will be providing weekly calls, Resistance & Support. In this package we provide reliable and timely </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="600ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/stock-future-basic.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="#">Stock Future (Basic)</a></h3>
          <p class="bottom20">Our Intraday Future service is for NSE traders who trade in Future Market. In which we will be providing all Intraday Future segment calls, Resistance & Support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top  wow fadeIn" data-wow-delay="700ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/stock-f-hni.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="#">Stock Future (HNI)</a></h3>
          <p class="bottom20">Our HNI future service is for NSE traders who trade in Future Market. In which we will be providing only 3-4 calls in week, along with Resistance & Support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="800ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/Sales-Success.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"><a href="#">MCX (Basic)</a></h3>
          <p class="bottom20">Our MCX service is for bullion/metals/energy traders who trade in Commodity Market. In which we will be providing only intraday calls, along with Resistance & Support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/asdsfdf.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">MCX (HNI)</a></h3>
          <p class="bottom20">Our MCX service is for bullion traders who trade in Commodity Market. In which we will be providing jackpot and positional calls, along with Resistance & Support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/700x350-market-insights-NT-WA.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">Agri (Basic)</a></h3>
          <p class="bottom20">Our Agri service is for Agricultural based traders who trade in NCDEX Market. In which we will be providing intraday and holding call. In this package we provide </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/1681873-poster-1280-stock-chart.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">Option (Basic)</a></h3>
          <p class="bottom20">Our Intraday Option service is for NSE traders who trade in F&O Market. In which we will be providing all intraday calls, Resistance & Support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/1470054422.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">Option (HNI)</a></h3>
          <p class="bottom20">Our Option service is for NSE traders who trade in F&O Market. In which we will be providing Holding & Momentum calls on data based n technical support. </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/download.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">BTST – STBT PACK</a></h3>
          <p class="bottom20">Our BTST/STBT service is for NSE traders who trade in F&O Market. In which we will be providing one day holding call.In this package we provide reliable and timely calls to our clients</p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/agri1.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">Cash & FnO (Combo)PACK</a></h3>
          <p class="bottom20">Our Equity Combo service is for NSE traders who trade in F&O Market. In which we will be providing intraday calls in all cash and F&O basic.In this package we provide reliable </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/stock-f-hni.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">MCX & NCDEX (Combo)PACK</a></h3>
          <p class="bottom20">Our MCX combo service is for NSE traders who trade in F&O Market. In which we will be providing intraday calls in MCX & NCDEX basic. In this package we provide reliable </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 equalheight">
        <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
          <div class="image bottom25">
            <img src="{{ asset('storage/assets/images/stock-future-basic.jpg')}}" alt="Services" class="border_radius">
          </div>
          <h3 class="bottom10"> <a href="#">Express Package (single script)</a></h3>
          <p class="bottom20">Our Express service is for MCX traders who trade in Commodity Market. In which we will be providing intraday calls only in single script. In this package we provide, </p>
          <a class="btn_common yellow border_radius" href="#">view details</a>
        </div>
      </div>
    </div>
  </div>
</section>
@stop