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
//use Modules\Admin\Models\Pages; 

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
        
        $pageMenu = Pages::all();
        
         foreach($pageMenu as $val){
             $url = url('page/'.str_slug($val->title));
         $html = "<li>".'<a href="'.$url.'">'.'<i class="fa fa-right">'.'</i>'.ucfirst($val->title).'</a></li>';
         
         }
         
        $trackSheet = TrackSheet::orderBy('id','desc')->Paginate(12);
       // dd($trackSheet);
        View::share('website_title',$website_title->website_title);
        View::share('website_email',$website_email->website_email);
        View::share('website_url',$website_url->website_url);
        View::share('contact_number',$contact_number->contact_number);
        View::share('company_address',$company_address->company_address);
        View::share('banner',$banner); 
        View::share('pageMenu',$pageMenu);
        View::share('trackSheet',$trackSheet);
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
 

    public function pricing(Request $request)
    {
        $pricing = Product::all(); 
        $title = "Pricing";
        $tagLine = "We offer the most complete advisory services in the country";
        $request->session()->forget('amount');

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
        $url = rtrim(url()->previous(),'/');
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
                if($url==url()->to('/')){
                    return Redirect::to('status/success')  ;
                }
                return Redirect::to('contact')->withErrors(['successMsg'=>'Thanking for Contacting us!']);
                
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

    public function blog(Blogs $blog,$id=null, $name=null)
    {
        $title = "Reports";
        $tagLine = "We offer the most complete advisory services in the country";
        $blogs = Blogs::all();
        $url = url('public/assets/js/jquery-2.2.3.js');
        $jsUrl = '<script src="'.$url.'"></script>';
        
        $blogDetails = Blogs::where('id',$id)->first();
        if($blogDetails){
            return view('investmentvia.blogDetail',compact('blogDetails','jsUrl','title','tagLine')); 
        }

        return view('investmentvia.blog',compact('blogs','jsUrl','title','tagLine'));
    
    } 
    public function riskTolrance()
    {
        $title = "Risk Tolrance";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.riskTolrance',compact('title','tagLine'));
    }
    public function kyc(Request $request, Kyc $kyc)
    {
        $title = "Kyc";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.kyc',compact('title','tagLine','kyc'));
    }

    public function discloser()
    {
        $title = "Discloser";
        $tagLine = "We offer the most complete advisory services in the country";
        return view('investmentvia.discloser',compact('title','tagLine'));
    }
    
    public function freeTrial(Request $request)
    {
       
        $input['name'] = $request->get('name');
        $input['phone'] = $request->get('phone');
        
        $input = $request->only('name','email','phone','city');
         $input['first_name'] = $request->get('name');
        \DB::table('free_trials')->insert($input);
        
        return Redirect::to('status/success');

    }
    
    public function page(Request $request, $name=null)
    {
        $title = ucfirst(str_replace('-'," ",$name));
        $tagLine = "We offer the most complete advisory services in the country";
        $name = str_replace('-'," ",$name);
        
        $page = Pages::where('title','LIKE',"%$name%")->first();
        
        return view('investmentvia.page',compact('title','tagLine','page'));   
                
    }
    public function kycForm(Request $request, Kyc $kyc)
    {
        $title = "Kyc";
        $tagLine = "We offer the most complete advisory services in the country";
         
        if($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'city' => 'required',
                'adhar_number' => 'required|numeric|min:12',
                'pan' => 'required',
                'file' => 'required|mimes:doc,pdf,docs'
            ]); 
                if ($validator->fails()) {
                     return Redirect::to('kyc')
                            ->withErrors($validator)
                            ->withInput();
                }else{
               
                    if ($request->file('file')) {  
                        $photo = $request->file('file');
                        $destinationPath = storage_path('kyc/');
                        $photo->move($destinationPath, time().$photo->getClientOriginalName());
                        $file = time().$photo->getClientOriginalName();
                    } 
                        $allData    =   $request->except('_token','file');
                        $phone      =   $request->get('home_telephone');
                        $input      =   $request->only('name','email','pan','adhar_number');
                        $input['phone']  = $phone;

                        if(isset($file)){
                            $input['doc'] = $file;
                        }
                        $input['allData']  = json_encode($allData);   

                    \DB::table('kyc')->insert($input);
                    return Redirect::to('kyc')->withErrors(['successMsg'=>'Thanking for Contacting us!']);
                    }
        }
       return view('investmentvia.kyc',compact('title','tagLine','kyc'));
    }

    public function riskTolranceForm(Request $request, Kyc $kyc)
    {
        $title = "Risk Tolrance";
        $tagLine = "We offer the most complete advisory services in the country";
         
        if($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email',
                'city' => 'required|max:20',
                'adhar_number' => 'required|numeric|min:12',
                'pan' => 'required',
                'file' => 'required|mimes:doc,pdf,docs'
            ]); 
                if ($validator->fails()) {
                     return Redirect::to('kyc')
                            ->withErrors($validator)
                            ->withInput();
                }else{
               
                    if ($request->file('file')) {  
                        $photo = $request->file('file');
                        $destinationPath = storage_path('kyc/');
                        $photo->move($destinationPath, time().$photo->getClientOriginalName());
                        $file = time().$photo->getClientOriginalName();
                    } 
                        $allData    =   $request->except('_token','file');
                        $phone      =   $request->get('home_telephone');
                        $input      =   $request->only('name','email','pan','adhar_number');
                        $input['phone']  = $phone;

                        if(isset($file)){
                            $input['doc'] = $file;
                        }
                        $input['allData']  = json_encode($allData);   

                    \DB::table('kyc')->insert($input);
                    return Redirect::to('kyc')->withErrors(['successMsg'=>'Thanking for Contacting us!']);
                    }
        }
       return view('investmentvia.kyc',compact('title','tagLine','kyc'));
    }

    public function freeTrialForm(Request $request, FreeTrial $freeTrial)
    {
        $title = "Free Trial";
        $tagLine = "We offer the most complete advisory services in the country";

        if($request->method()=='POST'){
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email',
                'city' => 'required|max:20',
                'phone' => 'required|numeric|min:10|max:10'
            ]); 
                if ($validator->fails()) {
                     return Redirect::to('free-trial')
                            ->withErrors($validator)
                            ->withInput();
                }else{
               
                   $input = $request->only('name','email','phone','city');
                   
                    \DB::table('free_trials')->insert($input);
                    return Redirect::to('free-trial')->withErrors(['successMsg'=>'Thanking for Contacting us!']);
                    }
        }
        
        return view('investmentvia.freeTrialForm',compact('title','tagLine','freeTrial'));
        
    }
    public function lifeAtResearchInfotech(Request $request)
    {
        $title = "life @Research Infotech";
        $tagLine = "We offer the most complete advisory services in the country";
        $gallery = \DB::table('gallery')->get();
      // dd(file_exists(storage_path('gallery/gallery6.jpg')));
        return view('investmentvia.lifeAtResearchInfotech',compact('title','tagLine','gallery'));
        
        
    }
    public function paymentStatus(Request $request, $status=null)
    {
        $title = "Status Message";
        $tagLine = "We offer the most complete advisory services in the country";
        $msg = "Oops..!Something went Wrong. Please try again.";

        \Log::useDailyFiles(storage_path().'/logs/payment.log');
        $data['response'] = $request->all();
        \Log::info(json_encode($data));
       
        if(!str_contains(url()->previous(),'ccavenue') && $status=="success" && !str_contains(url()->previous(),'paymentStatus/success'))
        {
            $msg ="Thank you!.Your request submitted successfully.";
        }else{
            if ($status=="success"){
            $msg = "Thank you!. We have received your payment.";
            
            }else if($status=="faild"){
                $msg = "Failed!. Payment cancel by payment gateway.";
            }
        }


        
        return view('investmentvia.paymentStatus',compact('title','tagLine','msg'));
    }
    // CCAvenue Integration
    public function checkout(Request $request, $serviceName=null)
    {
        $payment = null; 
        $title = "Checkout<br><br>";
        $tagLine = "We offer the most complete advisory services in the country";
        
        $order_id = strtoupper(str_random(10));
        
	$merchant_data='';
    $merchant_id = "36234";
	$working_key='73F096AFBA1C6B5F16864C9D3D434979';//Shared by CCAVENUES
	$access_code='AVMV75FA53AY58VMYA';//Shared by CCAVENUES
	$url = url('public/assets/js/jquery-2.2.3.js');
        $url2 = url('assets/js/json.js');
        
        $jsUrl1 = '<script src="'.$url.'"></script>';
        $jsUrl2  = '<script src="'.$url2.'"></script>';
        
	$amount = ($request->get('amount'))?$request->get('amount'):"1";
        if($serviceName){
            $serviceName = ucfirst(str_replace('-', " ", $serviceName));
        }
        
        if($request->method()==='POST')
        {
            
            $validator = Validator::make($request->all(), [
                'total_amount' => 'required|numeric',
            ]); 
            if ($validator->fails()) {
                 return Redirect::back()
                            ->withErrors($validator)
                            ->withInput();
            }
            $working_key= env('WORKING_KEY','73F096AFBA1C6B5F16864C9D3D434979') ;//Shared by CCAVENUES
            $access_code=env('ACCESS_CODE','AVMV75FA53AY58VMYA');//Shared by CCAVENUES
            $merchant_data='';
            $requests = $request->except('_token','total_amount');
            if(session('amount')){
                $amount = session('amount');
            }else{
                $amount = $request->get('amount');
            }
            $amount = number_format((float)$amount, 2, '.', '');
            foreach ($requests as $key => $value){
                if($key=="amount")
                {
                    $value = number_format((float)$value, 2, '.', '');
                    $merchant_data.=$key.'='.$value.'&';   
                }else{
                    $merchant_data.=$key.'='.$value.'&';
                }
            }
        $encrypted_data=$this->encrypt($merchant_data,$working_key); // Method for encrypting the data.
        $production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
          return Redirect::to($production_url);
        }
        if ($request->session()->has('amount')) {
            $amount = session('amount');
        }else{
            $request->session()->put('amount', $amount);
        }
        return view('investmentvia.paypal',compact('title','tagLine','jsUrl1','jsUrl2','serviceName','amount','payment','merchant_id','order_id'));
    }
    public function encrypt($plainText,$key)
    {
        $secretKey = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $plainPad = $this->pkcs5_pad($plainText, $blockSize);
        if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1) 
        {
              $encryptedText = mcrypt_generic($openMode, $plainPad);
              mcrypt_generic_deinit($openMode);

        } 
        return bin2hex($encryptedText);
    }

    public function decrypt($encryptedText,$key)
    {
        $secretKey = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText=$this->hextobin($encryptedText);
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        mcrypt_generic_init($openMode, $secretKey, $initVector);
        $decryptedText = mdecrypt_generic($openMode, $encryptedText);
        $decryptedText = rtrim($decryptedText, "\0");
        mcrypt_generic_deinit($openMode);
        return $decryptedText;

    }
	//*********** Padding Function *********************

    public function pkcs5_pad ($plainText, $blockSize)
    {
        $pad = $blockSize - (strlen($plainText) % $blockSize);
        return $plainText . str_repeat(chr($pad), $pad);
    }

	//********** Hexadecimal to Binary function for php 4.0 version ********

    public function hextobin($hexString) { 
        $length = strlen($hexString); 
        $binString="";   
        $count=0; 
        while($count<$length) 
        {       
            $subString =substr($hexString,$count,2);           
            $packedString = pack("H*",$subString); 
            if ($count==0)
            {
                        $binString=$packedString;
            } 

            else 
            {
                        $binString.=$packedString;
            } 

            $count+=2; 
        } 
        return $binString; 
      } 
}
