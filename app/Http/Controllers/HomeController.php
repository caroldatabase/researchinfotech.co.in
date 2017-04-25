<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;  
use View;
use Html;
use URL; 
use Validator; 
use Paginate;
use Grids; 
use Form;
use Hash; 
use Lang;
use Session;
use DB;
use Route;
use Crypt;
use Redirect; 
use Input; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     

      public function __construct(Request $request) {  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    { 
         return view('investmentvia.about');
    }  

    public function home()
    {
        
        return view('investmentvia.home');
    }

    
    public function services()
    {
        
        return view('investmentvia.service');
    }

    public function payment()
    {
        
        return view('investmentvia.payment');
    }
 

    public function pricing()
    {
        
        return view('investmentvia.pricing');
    }

    public function package()
    {
        
        return view('investmentvia.package');
    }
 
    public function privacypolicy()
    {
        
        return view('investmentvia.privacypolicy');
    } 
     /*----------*/
    public function faq()
    {
        return view('investmentvia.faq'); 
    }

    public function contact()
    {
          return view('investmentvia.contact');   
    } 
    public function tNc()
    {
         return view('investmentvia.tNc');
    }

    public function career()
    {
        return view('investmentvia.career');
    }

    public function blog()
    {
        return view('investmentvia.blog');
    } 
    public function riskTolrance()
    {
        return view('investmentvia.riskTolrance');
    }
    public function kyc()
    {
        return view('investmentvia.kyc');
    }

    public function discloser()
    {
        return view('investmentvia.discloser');
    }


}
