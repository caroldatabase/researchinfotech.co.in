

@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Career</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>Career</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->


<!--SERVICE SECTION-->
<section id="contact" class="padding">
  <div class="container">
    <div class="row padding-bottom">
      <div class="col-md-4 contact_address heading_space wow fadeInLeft animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft;">
        <h2 class="heading heading_space"><span>Get</span> in Touch <span class="divider-left"></span></h2>
        <p>Standard Certification Services</p>
        <div class="address">
          <i class="icon icon-map-pin border_radius"></i>
          <h4>Visit Us</h4>
          <p>InvestmentVia Advisory Service</p>
        </div>
        <div class="address second">
          <i class="icon icon-envelope border_radius"></i>
          <h4>Email Us</h4>
          <p><a href="mailto:info@bucksgainer.com">info@investmentvia.co</a></p>
        </div>
        <div class="address">
          <i class="icon icon-phone4 border_radius"></i>
          <h4>Call Us</h4>
          <p>+91-9893000150 , 91-9753988000</p>
        </div>
      </div>
      <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 4500ms; animation-name: fadeInRight;">
        <h2 class="heading heading_space"> <span>Contact</span> Form<span class="divider-left"></span></h2>
        <form class="form-inline findus" id="contact-form" onsubmit="return false">
          <div class="row">
            <div class="col-md-12">
              <div id="result"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required="">
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="">
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Website" name="website" id="website" required="">
              </div>
            </div>
            <div class="col-md-12">
              <textarea placeholder="Comment" name="message" id="message"></textarea>
              <button class="btn_common yellow border_radius" id="btn_submit">Submit</button>
            </div>
          </div>
        </form>
       
      </div>
    </div>
    
  </div>
</section>
@stop