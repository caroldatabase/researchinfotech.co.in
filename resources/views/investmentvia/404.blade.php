
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu')
 
<!--Page Header-->
@include('partials/titlebar')
<!--Page Header-->

<style type="text/css">
.styl{
text-shadow: 3px 1px 3px rgba(45, 45, 45, 0.38);
    font-size: 3em !important;
    color: #000 !important;
    font-weight: 700;
    line-height: 1em;
    text-transform: uppercase;
}
  p{
    text-align: justify;
  }
</style>
<!--SERVICE SECTION-->
<section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading styl heading_space wow fadeInDown"><span><h1>404</h1></span><span class="divider-left"></span>
	</h2>   
          <div class="faq_content wow fadeIn" data-wow-delay="400ms">
	<br><br>

	<h3 class="styl">Oops, The page you are looking for can't be found! </h3>


        </div>
      </div>
    </div>
  </div>
</section>
 
 @stop
