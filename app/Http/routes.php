<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
          'as' => 'home',
          'uses'  => 'HomeController@home'
        ]);

Route::get('home',[
          'as' => 'home',
          'uses'  => 'HomeController@home'
        ]);

Route::get('about',[
          'as' => 'about',
          'uses'  => 'HomeController@about'
        ]);


Route::get('services',[
          'as' => 'home',
          'uses'  => 'HomeController@services'
        ]);


Route::get('payment',[
          'as' => 'payment',
          'uses'  => 'HomeController@payment'
        ]);


Route::get('pricing',[
          'as' => 'pricing',
          'uses'  => 'HomeController@pricing'
        ]);


Route::get('package',[
          'as' => 'package',
          'uses'  => 'HomeController@package'
        ]);

Route::get('contact',[
          'as' => 'contact',
          'uses'  => 'HomeController@contact'
        ]);

Route::get('terns-and-conditions',[
          'as' => 'tNc',
          'uses'  => 'HomeController@tNc'
        ]);

Route::get('privacy-policy',[
          'as' => 'privacy_and_policy',
          'uses'  => 'HomeController@privacypolicy'
        ]);

Route::get('faq',[
          'as' => 'faq',
          'uses'  => 'HomeController@faq'
        ]);

Route::get('career',[
          'as' => 'career',
          'uses'  => 'HomeController@career'
        ]);

Route::get('blog',[
          'as' => 'blog',
          'uses'  => 'HomeController@blog'
        ]);

Route::get('kyc',[
          'as' => 'kyc',
          'uses'  => 'HomeController@kyc'
        ]);

Route::get('risk-tolrance',[
          'as' => 'risk_tolrance',
          'uses'  => 'HomeController@riskTolrance'
        ]);


Route::get('discloser',[
          'as' => 'discloser',
          'uses'  => 'HomeController@discloser'
        ]);


 



Route::group(['middleware' => ['web']], function(){
 
  Route::get('auth/logout', 'Auth\AuthController@getLogout');

  Route::get('register',[
          'as' => 'register',
          'uses'  => 'UserController@register'
        ]);    

  Route::post('register',[
          'as' => 'register',
          'uses'  => 'UserController@signup'
        ]);   

  Route::post('signup',[
          'as' => 'signup',
          'uses'  => 'UserController@signup'
        ]); 

  Route::get('login',[
          'as' => 'login',
          'uses'  => 'UserController@showLoginForm'
        ]); 

Route::post('billing',[
          'as' => 'billing',
          'uses'  => 'ProductController@billing'
        ]);

Route::post('shipping',[
          'as' => 'shipping',
          'uses'  => 'ProductController@shipping'
        ]);

Route::post('shippingMethod',[
          'as' => 'shippingMethod',
          'uses'  => 'ProductController@shippingMethod'
        ]);

Route::post('placeOrder',[
          'as' => 'placeOrder',
          'uses'  => 'ProductController@placeOrder'
        ]);


Route::get('orderSuccess',[
          'as' => 'orderSuccess',
          'uses'  => 'ProductController@thankYou'
        ]); 


Route::get('signout', function(App\User $user , Illuminate\Http\Request $request) { 
    
    $request->session()->forget('current_user');
    $request->session()->flush();  

    return redirect()->intended('/'); 

});
   


Route::get('myaccount/login',[
          'as' => 'showLoginForm',
          'uses'  => 'ProductController@showLoginForm'
        ]); 

Route::get('myaccount',[
          'as' => 'myaccount',
          'uses'  => 'ProductController@myaccount'
        ]); 

 
        
Route::get('myaccount/signup',[
          'as' => 'myaccount-signup',
          'uses'  => 'ProductController@showSignupForm'
        ]); 

Route::post('myaccount/signup',[
          'as' => 'userSignup',
          'uses'  => 'UserController@userSignup'
        ]); 
        
        


Route::post('login',function(App\User $user , Illuminate\Http\Request $request){ 

      $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  
       
          if (Auth::attempt($credentials)) {
             $request->session()->put('current_user',Auth::user());
             
                return redirect()->intended('/'); 
          }else{  
              return redirect()
                          ->back()
                          ->withInput()  
                          ->withErrors(['message'=>'Invalid email or password. Try again!']);
              } 
      }); 
             



Route::post('Ajaxlogin',function(App\User $user , Illuminate\Http\Request $request){ 
       
      $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  
       
          if (Auth::attempt($credentials)) {
             $request->session()->put('current_user',Auth::user());
             $request->session()->put('tab',1);
           
              return Redirect::to(url()->previous());
               // return  json_encode(['msg'=>'success','code'=>200,'data'=>Auth::user()]); 
          }else{  
               return  json_encode(['msg'=>'Invalid email or password','code'=>500,'data'=>$request->all()]); 
              } 
      }); 
             

 });




      