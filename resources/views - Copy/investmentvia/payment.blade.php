
@extends('layouts.master')
@section('title', 'HOME')

@section('header') 
@stop
@section('content')
@include('partials/menu')
 


@include('partials/titlebar')


<!--SERVICE SECTION-->
<section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading heading_space wow fadeInDown"><span>Frequently</span> Payment<span class="divider-left"></span></h2>   
          <div class="faq_content wow fadeIn" data-wow-delay="400ms">
              <ul class="items">
                 @foreach($bankAccount as $result)
                  <li><a href="#.">{{$result->bank_name}}</a>
                  <ul class="sub-items">
                    <li>
                        ACCOUNT NAME	: {{$result->account_name or 'Researchinfotech' }}</br>
                        A/C NO	: {{$result->account_number}} </br>     
                        IFSC CODE	{{$result->ifsc_code}} </br>
                        {{$result->bank_branch}}</br>
                    </li>
                  </ul>
                </li>
                @endforeach
                
              </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@stop