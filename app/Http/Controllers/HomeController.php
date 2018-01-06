<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth,View,Html,URL,Validator,Paginate,Grids,Form,Hash,Lang;
use Session,DB,Route,Crypt,Redirect,Input; 
use App\Helpers\Helper as Helper;
use Modules\Admin\Models\Settings;
use Modules\Admin\Models\BankAccount;
use Modules\Admin\Models\Career;
use Modules\Admin\Models\Contact;
use Modules\Admin\Models\Faq;
use Modules\Admin\Models\FreeTrial;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Kyc;
use Modules\Admin\Models\Pages;
use Modules\Admin\Models\Product;
use Modules\Admin\Models\Service as Pricing;
use Modules\Admin\Models\TrackSheet;
use Modules\Admin\Models\Transaction;
use Modules\Admin\Models\Blogs; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     

    public function __construct(Request $request,Settings $setting) {  
        View::share('userData',$request->session()->get('current_user'));
        //$hot_products   = Product::orderBy('views','desc')->limit(3)->get();
        //$special_deals  = Product::orderBy('discount','desc')->limit(3)->get(); 
        //View::share('hot_products',$hot_products);
        //View::share('special_deals',$special_deals);  
        $website_title      = $setting::where('field_key','website_title')->first();
        $website_email      = $setting::where('field_key','website_email')->first();
        $website_url        = $setting::where('field_key','website_url')->first();
        $contact_number     = $setting::where('field_key','contact_number')->first();
        $company_address    = $setting::where('field_key','company_address')->first();
        $banner             = $setting::where('field_key','LIKE','%banner_image%')->get();
        
         View::share('website_title',$website_title->website_title);
         View::share('website_email',$website_email->website_email);
         View::share('website_url',$website_url->website_url);
         View::share('contact_number',$contact_number->contact_number);
         View::share('company_address',$company_address->company_address);
         View::share('banner',$banner); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    { 
        $title = "About Us";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.about',compact('title','tagLine'));
    }  

    public function home()
    {
        $title = "Home";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.home',compact('title','tagLine'));
    }

    
    public function services()
    {
        $title = "Services";
        $tagLine = "We offer the most complete advisory services in the country";
        $service = Category::all();
        $url = url('public/assets/js/jquery-2.2.3.js');
        $jsUrl = '<script src="'.$url.'"></script>';
          
        return view('investmentvia.service',compact('service','jsUrl','title','tagLine'));
    }

    public function payment()
    {
        $bankAccount = BankAccount::all();
        $title = "Payment";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.payment', compact('bankAccount','title','tagLine'));
    }
 

    public function pricing()
    {
        $pricing = Product::all(); 
        $title = "Pricing Tables";
        $tagLine = "We offer the most complete advisory services in the country";
        
        return view('investmentvia.pricing',compact('pricing','title','tagLine'));
    }

    public function package()
    {
        $title = "Package";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.package',compact('title','tagLine'));
    }
 
    public function privacypolicy()
    {
        $title = "Privacy Policy";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.privacypolicy',compact('title','tagLine'));
    } 
     /*----------*/
    public function faq()
    {
         $faq = Faq::all();
        $title = "FAQ";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.faq',compact('title','tagLine','faq')); 
    }

    public function contact(Request $request, Contact $contact)
    {
        $title = "Contact";
        $tagLine = "We offer the most complete advisory services in the country";
        if($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'mobile' => 'required|numeric|min:10',
                'comments' => 'required'
            ]); 

            if ($validator->fails()) {
                 return Redirect::to('contact')
                        ->withErrors($validator)
                        ->withInput();
            }else{
                $input = $request->only('name','email','mobile','comments');
                \DB::table('contacts')->insert($input);
                  return Redirect::to('contact')->withErrors(['successMsg'=>'Thanking for Contacting us!']);
                return view('investmentvia.contact',compact('title','tagLine','contact'))->with(['msg'=>'Thanking for Contacting us!']); 
            }
        }
            
        return view('investmentvia.contact',compact('title','tagLine','contact'));   
    } 
    public function tNc()
    {
        $title = "Terms & Condition";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.tNc',compact('title','tagLine'));
    }

    public function career(Request $request, Career $career)
    {
        $title = "Career";
        $tagLine = "We offer the most complete advisory services in the country";
         
        if($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'mobile' => 'required|numeric|min:10',
                'designation' => 'required',
                'file' => 'required|mimes:doc,pdf,docs'
            ]); 

            if ($validator->fails()) {
                 return Redirect::to('career')
                        ->withErrors($validator)
                        ->withInput();
            }else{
                $input = $request->only('name','email','mobile','designation');
                if ($request->file('file')) {  
                    $photo = $request->file('file');
                    $destinationPath = storage_path('resume/');
                    $photo->move($destinationPath, time().$photo->getClientOriginalName());
                    $file = time().$photo->getClientOriginalName();
                    $input['resume']   =   $file; 
                }  
                $input['first_name'] = $request->get('name');  
                \DB::table('careers')->insert($input);
                return Redirect::to('career')->withErrors(['successMsg'=>'Thanking for Contacting us!']);
            }
        }
        
        return view('investmentvia.career',compact('title','tagLine','career'));
    }

    public function blog()
    {
        $title = "Blog";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.blog',compact('title','tagLine'));
    } 
    public function riskTolrance()
    {
        $title = "Risk Tolrance";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.riskTolrance',compact('title','tagLine'));
    }
    public function kyc()
    {
        $title = "Kyc";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.kyc',compact('title','tagLine'));
    }

    public function discloser()
    {
        $title = "Discloser";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.discloser',compact('title','tagLine'));
    }
    
    public function freeTrial(Request $request)
    {
        $input['first_name'] = $request->get('name');
        $input['phone'] = $request->get('phone');
        
        \DB::table('free_trials')->insert($input);
        return Redirect::to('home');

    }


}
