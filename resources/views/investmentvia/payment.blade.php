
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu')
 


<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Payment</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>Payment</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->


<!--SERVICE SECTION-->
<section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading heading_space wow fadeInDown"><span>Frequently</span> Payment<span class="divider-left"></span></h2>   
          <div class="faq_content wow fadeIn" data-wow-delay="400ms">
              <ul class="items">
                <li><a href="#." >ICICI BANK</a>
                  <ul class="sub-items">
                    <li>
                       ACCOUNT NAME	: Researchinfotech.co.in</br>
A/C NO	: 18590XXXXXX </br>
 INDORE</br>
IFSC CODE	ICIC000330 </br>
                    </li>
                  </ul>
                </li>
                <li><a href="#.">AXIS BANK</a>
                  <ul class="sub-items">
                    <li><p> ACCOUNT NAME	:Researchinfotech </br>
A/C NO	: 185905000330XXXXAV   INDORE</br>
IFSC CODE	ICIC000330 </br></p>
                    </li>
                  </ul>
                </li>
                <li><a href="#.">HDFC BANK</a>
                  <ul class="sub-items">
                    <li>
                      <p>ACCOUNT NAME	:Researchinfotech</br>
A/C NO	: 18590XXXXX </br>
 INDORE</br>
IFSC CODE	ICIC000330 </br></p>
                    </li>
                  </ul>
                </li>
                <li><a href="#.">INDUSIND BANK</a>
                  <ul class="sub-items">
                    <li>
                      <p>ACCOUNT NAME	: Researchinfotech </br>
A/C NO	: 185905XXXX </br>
 INDORE</br>
IFSC CODE	ICIC000330 </br></p>
                    </li>
                  </ul>
                </li>
              </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@stop