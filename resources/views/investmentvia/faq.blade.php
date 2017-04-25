
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
         <h2 class="heading heading_space wow fadeInDown"><span>Frequently</span> Ask Question<span class="divider-left"></span></h2>   
          <div class="faq_content wow fadeIn" data-wow-delay="400ms">
              <ul class="items">
                <li><a href="#." >What is InvestmentVia Research?</a>
                  <ul class="sub-items">
                    <li>
                      <p>InvestmentVia Advisory Services is an Investment Advisory Company which basically provides recommendations for Stocks- Cash and F & O traded in NSE & BSE, commodities including bullions, metals and agro-commodities traded in MCX & NCDEX.</p>
                    </li>
                  </ul>
                </li>
                <li><a href="#.">What are the services you provide?</a>
                  <ul class="sub-items">
                    <li><p>We offer diversified range of services as per the investments of an investor, trader or a broker. We believe in giving each and every client a special treatment by providing online and telephonic assistance round the clock for 24 hours in a day. For more detail visit Services Page.</p>
                    </li>
                  </ul>
                </li>
                <li><a href="#.">Do you provide any Free Trial for your Services?</a>
                  <ul class="sub-items">
                    <li>
                      <p> Yes, we provide a one time Free Trial, you can avail it by clicking on the Free Trial Form.</p>
                    </li>
                  </ul>
                </li>
                <li><a href="#."> What Is The Procedure To Subscribe?</a>
                  <ul class="sub-items">
                    <li>
                      <p>You can fill up the Free-Trial Form available on the Website or simply talk to our Support Team 24/7 at 0731-6008000 or 0731-6007000 for assistance."</p>
                    </li>
                  </ul>
                </li>

                <li><a href="#."> WhWhat if even after making payment my account is not activated?</a>
                  <ul class="sub-items">
                    <li>
                      <p>In such case you can either mail us at info@BucksGainer.com or call at +91 0731-6008000 with these details: Name, Mobile no., Amount paid, Emailid, Date of payment Cheque No. Or Transaction id and otherPayment Details if any.</p>
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