

@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content') 
@include('partials/menu')

<!--Page Header-->
@include('partials/titlebar')
<!--Page Header-->

<style type="text/css">
  li span{
     float: right; 
     margin-right: 50px;"
  }
</style>

<!--SERVICE SECTION-->
<section id="contact" class="padding">
  <div class="container">
    <div class="row padding-bottom">
       
      <div class="col-md-12 wow fadeInRight animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 4500ms; animation-name: fadeInRight;">
        <h2 class="heading heading_space"  style="margin-top: 20px;"> <span> {{$title}} </span>  <span class="divider-left"></span></h2>

            @if ($errors->any())
               {{ implode('', $errors->all('<div class="alert alert-danger">:message</div>')) }}
            @endif

        <form class="form-inline findus" id="contact-form" action="{{url('riskProfiling')}}" method="post" >
          
          <div class="row">
            <div class="col-md-12">
              <div id="result"></div>
            </div>
          </div>
          <div class="row"> 
             <div class="col-md-4 col-sm-4">
            <label>Full Name (required)</label>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name (required)" name="full_name" id="full_name" required="required">
              </div>
            </div>
              
             <div class="col-md-4 col-sm-4">
            <label>Services</label>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Services" name="services" id="services" required="">
              </div>
            </div>
             <div class="col-md-4 col-sm-4">
            <label>Risk Capacity(%)</label>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Risk Capacity" name="risk_capacity" id="risk_capacity" required="">
              </div>
            </div>
           
             
          <!--    <div class="col-md-4 col-sm-4">
            <label>Home / Mobile Telephone (required)</label>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Home / Mobile Telephone " name="mobile" id="mobile" required="">
              </div>
            </div> -->
             
           <!--   <div class="col-md-4 col-sm-4">
            <label>Email</label>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" >
              </div>
            </div>  -->
             
             <div class="col-md-12"> 
             <P style="color:green; font-weight: 700"> Research Infotech Investor Advisory </P>
            <div class="col-md-4 col-sm-4">
              <label>(1) <b>What is your current age?</b><br></label>
                <div class="form-group">
                  <ul>
                    
                    <li> <input type="radio" name="age" value="0-25"> Less than 25</ins> <span>40</span></li>
                     <li> <input type="radio" name="age" value="25-45"> 25-45</ins> <span>30</span></li>
                      <li> <input type="radio" name="age" value="45-55"> 45-55</ins> <span>20</span></li>
                       <li> <input type="radio" name="age" value="55-100"> Above 55</ins> <span>10</span></li>
                  </ul>
              </div>
              </div>
               <div class="col-md-4 col-sm-4">
                <label class="control-label">(2) <b> Goal and Expectations </b> <br></label>
                  <div class="form-group">
                    <ul> 
                      <li> <input type="radio" name="Expectations" value="Capital Appreciation"> Capital Appreciation <span>0</span></li>
                       <li> <input type="radio" name="Expectations" value="Regular Income"> Regular Inc <span>20</span></li>
                        <li><input type="radio" name="Expectations" value="Capital Appreciation and Regular Income"> Capital Appreciation and Regular Income <span>10</span> </li> <br>
                         <li> <input type="radio" name="Expectations" value="If any other specific goal please specify"> If any other specific goal please specify required
                         <input type="text" name="other_specification" class="form-control" > 

                         </li>
                    </ul>
                  </div>
              </div>
               <div class="col-md-4 col-sm-4">
                  <label>(3) <b>Proposed Investment Amount? </b><br></label>
                    <div class="form-group">
                        <ul> 
                          <li> 
                          <input type="radio" name="Proposed_investment" value="0-3"> 0-1 Lacs</ins>  <span>10</span> </li>
                           <li> <input type="radio" name="Proposed_investment" value="1-3"> 1-3 Lacs</ins>  <span>20</span> </li>
                            <li> <input type="radio" name="Proposed_investment" value="3-5"> 3-5 Lacs</ins>  <span>30</span> </li>
                             <li> <input type="radio" name="Proposed_investment" value="5>0">Above 5 Lacs</ins>  <span>40</span> </li>
                        </ul>
                    </div>
              </div> 

                <div class="col-md-4 col-sm-4">
                  <label>(4) <b>Market Value of portfolio held </b><br></label>
                    <div class="form-group">
                        <ul> 
                          <li> 
                          <input type="radio" name="market_value" value="0-3"> 0-1 Lacs</ins>  <span>10</span> </li>
                           <li> <input type="radio" name="market_value" value="1-3"> 1-3 Lacs</ins>  <span>20</span> </li>
                            <li> <input type="radio" name="market_value" value="3-5"> 3-5 Lacs</ins>  <span>30</span> </li>
                             <li> <input type="radio" name="market_value" value="5>0">Above 5 Lacs</ins>  <span>40</span> </li>
                        </ul>
                    </div>
                </div>


                 <div class="col-md-4 col-sm-4">
                  <label><b>(5) Short term Risk Attitudes</b><br></label>
                  <div class="form-group">
                  <label>(a)Which of these statements would best describe your attitudes about the next three years performance of this investment?</label>
                    <ul> 
                      <li> 
                      <input type="radio" name="Short_term_Risk_Attitudes" value="I don't mind if I lose money"> I don't mind if I lose money
                      <span>40</span></li>
                       <li> <input type="radio" name="Short_term_Risk_Attitudes" value="I can tolerate a loss"> I can tolerate a loss
                        <span>30</span></li>
                        <li> <input type="radio" name="Short_term_Risk_Attitudes" value="I'd have a hard time tolerating any loss"> I'd have a hard time tolerating any loss<span>10</span></li>
                         <li> <input type="radio" name="Short_term_Risk_Attitudes" value="I need to see at least a little return"> I need to see at least a little return <span>20</span></li>
                    </ul>
                  </div>
              </div>


<!-- 

              <div class="col-md-4 col-sm-4">
                  <label><b>(4) Preferred Investment time horizon</b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="Proposed_investment" value="0-3" > 0-1 Lacs</ins> 
                      <span >10</span></li>
                       <li> <input type="radio" name="Proposed_investment" value="1-3" > 1-3 Lacs</ins><span>20</span></li>
                        <li> <input type="radio" name="Proposed_investment" value="3-5" > 3-5 Lacs</ins><span>30</span></li>
                         <li> <input type="radio" name="Proposed_investment" value="5>0" > 5>0 Lacs</ins><span>40</span></li>
                    </ul>
                  </div>
              </div> -->
              
              <!-- <div class="col-md-4 col-sm-4">
                  <label>(b) Which of these statements would best describe your attitudes aboutthe next three months performance of this investment?</label>
                  <div class="form-group">
                  
                    <ul> 
                      <li> 
                      <input type="radio" name="Attitudes" value="Who cares? One calendar quarter means nothing."> Who cares? One calendar quarter means nothing.</li>
                       <li> <input type="radio" name="Attitudes" value="I wouldn't worry about losses in that time frame"> I wouldn't worry about losses in that time frame</li>
                        <li> <input type="radio" name="Attitudes" value="If I suffered a loss of greater than 10%, I'd get concerned"> If I suffered a loss of greater than 10%, I'd get concerned</li>
                         <li> <input type="radio" name="Attitudes" value="I can only tolerate small short-term losses"> I can only tolerate small short-term losses</li>
                         <li> <input type="radio" name="Attitudes" value="I'd have a hard time accepting any losses"> I'd have a hard time accepting any losses</li>

                    </ul>
                  </div>
              </div> -->

               <div class="col-md-4 col-sm-4">
                  <label>(6) Annual Income details:-</b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="Income" value="Below 3 lac">    Below 3 lacs    <span>10</span> </li>
                       <li> <input type="radio" name="Income" value="3-7 lac">  3-7 lacs        <span>20</span> </ins></li>
                        <li> <input type="radio" name="Income" value="7-15 lac">     7-15 Lacs       <span>30</span> </ins></li>
                         <li> <input type="radio" name="Income" value="Above 15 lac">    Above 15 Lacs   <span>40</span> </ins></li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(7) <b>What is your sources of Incomes? </b><br></label>
                  <div class="form-group">
                    <ul> 
                    <label>A. Primary Source</label>
                      <li> 
                        <input type="radio" name="sources" value="Salary"> Salary
                      </li>
                      <li>
                        <input type="radio" name="sources" value="Business"> Business
                      </li>
                      <label>B. Secondary Source</label>
                      <li>
                        <input type="radio" name="sources" value="Royalties"> Royalties
                      </li>
                      <li>
                        <input type="radio" name="sources" value="Rental"> Rental
                      </li>
                      <li>
                        <input type="radio" name="sources" value="Dividend"> Dividend
                      </li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(8) <b>Please tick your Occupation:-</b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="checkbox" name="Occupation[]" value="Private sector service">
                      Private sector service"
                       </li>
                       <li><input type="checkbox" name="Occupation[]" value="Government sector">
                        Government sector
                       </li>
                       <li><input type="checkbox" name="Occupation[]" value="Professional">Professional</li>
                       <li><input type="checkbox" name="Occupation[]" value="Retired">Retired</li>
                       <li><input type="checkbox" name="Occupation[]" value="Student">Student</li>
                       <li><input type="checkbox" name="Occupation[]" value="Public sector">Public sector
                       </li>
                       <li>
                         <input type="checkbox" name="Occupation[]" value="Business">Business
                       </li>
                       <li><input type="checkbox" name="Occupation[]" value="Agricultural">Agricultural</li>
                       <li><input type="checkbox" name="Occupation[]" value="Housewife">Housewife</li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(9) <b>How many dependents do you financially support? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                       <input type="radio" name="dependents" value="None" data-value="20" id=""> None <span>20</span></li>
                       <li> <input type="radio" name="dependents" value="1-3" data-value="10"> Between 1-3<span>10</span></li>
                        <li> <input type="radio" name="dependents" value="3-5" data-value="0">   3+</li> <span>0</span></li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(10) <b>What is the size of your emergency fund? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="emergency" value="< 1 month income">< 1 month income<span>10</span></li>
                       <li> <input type="radio" name="emergency" value="1-3 months income"> 1-3 months income<span>20</span></li>
                        <li> <input type="radio" name="emergency" value="3-6 months income"> 3-6 months income</ins><span>30</span></li>
                         <li> <input type="radio" name="emergency" value="> 6 months income"> 6 months income<span>40</span></li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(11) <b>Approx Value of assets held like property, FD, Shares, Mutual Fund etc. </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="Value" value="Below 10 lac"> Below 10 lac<span>10</span></li>
                       <li> <input type="radio" name="Value" value="10-30 lac"> 10-30 lac</ins><span>20</span></li>
                         <li> <input type="radio" name="Value" value="30-50 lac"> 30-50 lac </ins><span>30</span></li> 
                         <li> <input type="radio" name="Value" value=">50 > lac"> Above  50  lac </ins><span>40</span></li>
                    </ul>
                  </div>
              </div>


               <div class="col-md-4 col-sm-4">
                  <label>(12) <b> What percentage of Annual income is allocated to pay off debt [all EMIs]? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="percentage" value="None"> None <span>10</span> </li>
                      <li><input type="radio" name="percentage" value="< 20 %"> Less than 20% <span>30</span></li>
                       <li> <input type="radio" name="percentage" value="20-50%"> 20-50% <span>20</span></li> 
                        <li> <input type="radio" name="percentage" value="> 50%"> > 50% <span>10</span></li>  
                    </ul>
                  </div>
              </div>
            

             

              <div class="col-md-4 col-sm-4">
                  <label>(13)  Investment Experience </b><br></label>
                  <div class="form-group">
                    <ul> 
                        <li> 
                      <input type="radio" name="Investment" value="0-3" data-value="10"> < 1 Years</ins> <span>10</span></li>
                       <li> <input type="radio" name="Investment" value="1-3" data-value="20"> 1-3 Years</ins> <span>20</span></li>
                        <li> <input type="radio" name="Investment" value="3-5" data-value="30"> 3 > Years</ins> <span>30</span></li>  
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(14)  Experience in market products </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> <input type="radio" name="Experience" value="Commodity"> Commodity <span>20</span></li>
                       <li> <input type="radio" name="Experience" value="Stock"> Stock <span>10</span></li>
                        <li> <input type="radio" name="Experience" value="Derivatives Stocks"> Derivatives Stocks <span>20</span></li>
                         <li> <input type="radio" name="Experience" value="None of the above"> None of the above <span>0</span></li>
                           <li> <input type="radio" name="Experience" value="All"> None of the above <span>30</span></li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(15) <b>What is your experience with equity investments? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="equity" value="Extensive"> Extensive</li>
                       <li> <input type="radio" name="equity" value="Moderate"> Moderate</li>
                        <li>
                          <input type="radio" name="equity" value="Very less"> Very less
                        </li>
                         <li> <input type="radio" name="equity" value="No experience"> No experience</li>
                    </ul>
                  </div>
              </div>

              <div class="col-md-4 col-sm-4">
                  <label>(16) <b>What is your experience with Commodity investments? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="Commodity" value="Extensive"> Extensive</li>
                       <li> <input type="radio" name="Commodity" value="Moderate"> Moderate</li>
                        <li>
                          <input type="radio" name="Commodity" value="Very less"> Very less
                        </li>
                         <li> <input type="radio" name="Commodity" value="No experience"> No experience</li>
                    </ul>
                  </div>
              </div>


               <div class="col-md-4 col-sm-4">
                  <label>(17)  <b>What is your capacity and willingness to take risk? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="capacity_willingness" value="High"> High <span>20</span></li>
                       <li> <input type="radio" name="capacity_willingness" value="Medium">   Medium   <span>10</span>    </li>
                        <li>
                          <input type="radio" name="capacity_willingness" value="Low"> Low<span>0</span>
                        </li> 
                    </ul>
                  </div>
              </div>


                <div class="col-md-4 col-sm-4">
                  <label>(18) <b>What is your practice on saving money? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="ractice_on_saving_money" value="I don't believe in saving"> I don't believe in saving <span>0</span></li>
                       <li> <input type="radio" name="ractice_on_saving_money" value=" I'd like to save, but my expenses and other financial commitments do not permit me to">  I'd like to save, but my expenses and other financial commitments do not permit me to.     <span>10</span>    </li>
                        <li>
                          <input type="radio" name="ractice_on_saving_money" value="I try to save whenever and wherever possible">   I try to save whenever and wherever possible.                                                        <span>20</span>
                        </li> 

                         <li>
                          <input type="radio" name="ractice_on_saving_money" value="I save 15 percent or more of my take-home salary without exception less">
                          I save 15 percent or more of my take-home salary without exception.
                           <span>30</span>
                        </li> 
                    </ul>
                  </div>
              </div>


              <div class="col-md-4 col-sm-4">
                  <label>(19) <b>Which would best describe your awareness about finance? </b><br></label>
                  <div class="form-group">
                    <ul> 
                      <li> 
                      <input type="radio" name="awareness_about_finance" value="I read most of the business and investment magazines and watch business updates on television daily.">
                        I read most of the business and investment magazines and watch business updates on television daily. <span>30</span></li> <br>
                       <li> <input type="radio" name="awareness_about_finance" value="I read a financial newspaper daily and regularly read at least one specialized business magazine">I read a financial newspaper daily and regularly read at least one specialized business magazine <span>20</span>    </li> <br>
                        <li>
                          <input type="radio" name="awareness_about_finance" value="I often look up the market prices of my shares in the newspaper.">I often look up the market prices of my shares in the  <span>10</span>newspaper.                                                       
                        </li>  <br>

                         <li>
                          <input type="radio" name="awareness_about_finance" value="I never read the finance section of the newspaper">
                          I never read the finance section of the newspaper.
                           <span>0</span>
                        </li> 
                    </ul>
                  </div>
              </div>



              <br><br>
            <div class="col-md-12">
              <p>
              <input type="checkbox"  checked="" name="term_conditions"  required="" value="true"> 
              I have read and agreed to the terms and conditions of this questionnaire
              </p>
              <button class="btn_common yellow border_radius" id="btn_submit">Submit</button>
            </div>
          </div>

           <br> 
   <style type="text/css">
     table tr td  {
      padding: 5px !important;
     }
     .score{
      border: 3px solid #ccc;padding: 30px;float: left;width: 100%;margin-top: 15px;
     }
   </style>
   <div class="score">
        <p >Total Score –  <input type="text"    name="total_score"  required="" value="500">  </p>
        <span>Classification of Services</span>
        <table border="1" width="100%" cellpadding="15px" cellspacing="15px">
            <tr>
                <td>Risk</td>
                <td>Score</td>
                <td>Services</td>
            </tr>

            <tr>
                <td>Medium</td>
                <td>0-330</td>
                <td>Intraday Cash and Stock Cash HNI</td>
            </tr>

            <tr>
                <td>High</td>
                <td>Above 330</td>
                <td>
                    Stock Future </br>
                    Stock Future HNI <br>
                    PSP<br>
                </td>
            </tr>
        </table> 
      </div>

        </form>
       
      </div>
    </div>


    
  </div>

  
  <style type="text/css">
    label b { 
    line-height: 26PX;  
    margin-bottom: 10px;
   }
   .padding{
    padding-top: 0px !important;
        padding-bottom: 40px;
   }
   .padding-bottom {
    padding-bottom: 30px;
}
    
  </style>
</section>
@stop