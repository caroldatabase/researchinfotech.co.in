
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu')
 
<!--Page Header-->
@include('partials/titlebar')
<!--Page Header-->


<!--SERVICE SECTION-->
<section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading heading_space wow fadeInDown"><span>{{ucfirst($title)}}</span><span class="divider-left"></span></h2>   
          <div class="faq_content wow fadeIn" data-wow-delay="400ms">
                 <div class="alert alert-success">{{$msg}}</div>
        </div>
      </div>
    </div>
  </div>
</section>
 
 @stop