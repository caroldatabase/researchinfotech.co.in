
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

@include('partials/titlebar')
<!--Pricings-->
<section class="padding" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="text-center"><h2 class="heading heading_space"><span>Our</span> Pricing <span class="divider-center"></span></h2></div>
        <div class="pricing three padding-bottom">
            @foreach($pricing as $result)
                <div class="pricing_item wow fadeInUp" data-wow-delay="400ms">
                    @if(file_exists(asset('storage/pricing/'.$result->photo)))
                    <img src="{{ asset('storage/pricing/'.$result->photo) }}" class="pricing-pic">
                    @else
                    <img src="{{ asset('storage/assets/images/intra-cash.jpg') }}" class="pricing-pic">
                    @endif 
                    <h3>{{$result->title}}</h3>
                    <div class="pricing_price"><span class="pricing_currency"></span>Monthly</div>
                    <p class="pricing_sentence">{!! $result->monthly_price !!}  <span class="pay-now"><a href="#">Pay Now</a></span></p>

                    <div class="pricing_price"><span class="pricing_currency"></span>Quarterly</div>
                    <p class="pricing_sentence">{!! $result->quarterly_price !!}  <span class="pay-now"><a href="#">Pay Now</a></span></p>

                    <div class="pricing_price"><span class="pricing_currency"></span>Half Yearly</div>
                    <p class="pricing_sentence">{!! $result->half_yearly_price !!}  <span class="pay-now"><a href="#">Pay Now</a></span></p>

                    <div class="pricing_price"><span class="pricing_currency"></span>Yearly</div>
                    <p class="pricing_sentence">{!! $result->yearly_price !!}  <span class="pay-now"><a href="#">Pay Now</a></span></p> 
                </div>
            @endforeach
          
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--Pricings-->

 @stop