<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth; 
use Modules\Admin\Models\User;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Product;
use Modules\Admin\Models\Transaction;
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
use Cart;
use Input;
use App\Helpers\Helper as Helper;
use Modules\Admin\Models\Settings;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     

      public function __construct(Request $request,Settings $setting) { 
        
        View::share('category_name',$request->segment(2));
        View::share('total_item',Cart::content()->count());
        View::share('sub_total',Cart::subtotal()); 
        View::share('userData',$request->session()->get('current_user'));

        $hot_products   = Product::orderBy('views','desc')->limit(3)->get();
        $special_deals  = Product::orderBy('discount','desc')->limit(3)->get(); 
        View::share('hot_products',$hot_products);
        View::share('special_deals',$special_deals);  

        $website_title      = $setting::where('field_key','website_title')->first();
        $website_email      = $setting::where('field_key','website_email')->first();
        $website_url        = $setting::where('field_key','website_url')->first();
        $contact_number     = $setting::where('field_key','contact_number')->first();
        $company_address    = $setting::where('field_key','company_address')->first();

        $banner             = $setting::where('field_key','LIKE','%banner_image%')->get();


         View::share('website_title',$website_title);
         View::share('website_email',$website_email);
         View::share('website_url',$website_url);
         View::share('contact_number',$contact_number);
         View::share('company_address',$company_address);
         View::share('banner',$banner); 
 
 
      // dd(Route::currentRouteName());

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
