
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu')
 
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
        <h1>Pricing Tables</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="/">Home</a> <span><i class="fa fa-angle-double-right"></i>Pricing</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->
<!--Page Header-->



<!--Pricings-->
<section class="padding" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="text-center"><h2 class="heading heading_space"><span>Our</span> Pricing <span class="divider-center"></span></h2></div>
        <div class="pricing three padding-bottom">
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Intraday Cash</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
         <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
            
            
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
        <img src="{{ asset('storage/assets/images/intra-cash.jpg')}}" class="pricing-pic">
            <h3>Cash HNI</h3>
            <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
            <p class="pricing_sentence">NA  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
            <p class="pricing_sentence">14,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
            <p class="pricing_sentence">19,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
      
       <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
            <p class="pricing_sentence">28,000  <span class="pay-now"><a href="#">Pay Now</a></span></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--Pricings-->

 @stop