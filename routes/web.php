<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






   Route::get('/login','CustomController@login')->name('login');
Route::get('/signup','CustomController@signup')->name('signup');


Route::post('/login','CustomController@do_login')->name('do_login');
Route::post('/signup','CustomController@do_signup')->name('do_signup');
Route::post('/logout','CustomController@logout')->name('logout');

Route::post('/forget-password','CustomController@forget_password')->name('forget_password');
Route::get('/reset-password/{token}','CustomController@reset_password')->name('reset_password');
Route::post('/reset-password','CustomController@do_forget')->name('do_forget');

Route::get('/pricing','MainController@pricing')->name('pricing');

Route::get('/privacy-policy','MainController@privacy')->name('privacy');

Route::get('/contact','MainController@contact')->name('contact');

Route::get('/faq','MainController@faq')->name('faq');

Route::get('/terms-of-use','MainController@terms')->name('terms');


Route::get('/','MainController@index')->name('home');
Route::get('/make-card','MainController@make_card')->name('make-card');


Route::post('/UploadImageUrl','MainController@image_upload_url')->name('image_upload_url');

Route::post('/UploadImageDrop','MainController@image_upload_drop')->name('image_upload_drop');

Route::post('/UploadImage','MainController@image_upload')->name('image_upload');

Route::post('/FinishCard','CardController@finish_card')->name('finish_card');


Route::get('/c/{site}/{slug}','CardController@mycard')->name('mycard');

Route::get('/mycard','CardController@mycardapi')->name('mycardapi');

Route::get('facebook-signup','MainController@facebook')->name('facebook_signup');
Route::get('callback/facebook','MainController@facebook_callback')->name('facebook-callback');

Route::get('google-signup','MainController@google')->name('google_signup');
Route::get('callback/google','MainController@google_callback')->name('google-callback');

// Route::gpost('send-contact-mail','MainController@send_contact_mail')->name('send_contact_mail');


Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/card-completed/{slug}','MainController@card_completed')->name('card-completed');

    

    Route::post('/pay','CheckoutController@checkout')->name('checkout');
    Route::post('/upgrade','CheckoutController@upgrade')->name('upgrade');
    Route::post('/cancel','CheckoutController@cancel')->name('cancel');
    Route::post('/delete','CheckoutController@delete_payment')->name('delete_payment');
    Route::post('/add','CheckoutController@add_payment')->name('add_payment');
    
    
    Route::get('/dashboard','UserController@dashboard')->name('dashboard'); 
    Route::get('/mycard/{id}','UserController@card')->name('user_card'); 
    
    Route::get('/custom-domain','UserController@custom_domain')->name('custom-domain'); 
    Route::get('/add-domain','UserController@add_domain')->name('add-domain'); 
    Route::post('/del-domain','UserController@delete_domain')->name('del-domain'); 
    
    
    Route::post('/delete-card','UserController@delete_card')->name('delete-card');    
    Route::post('/check-domain','UserController@check_domain')->name('check_domain');    
    Route::post('/check-domain2','UserController@check_domain2')->name('check_domain2');    
    
    Route::get('/user-profile','UserController@profile')->name('user_profile'); 
    
    Route::post('/password-change','UserController@password_change')->name("password_change");
    Route::post('/account_update','UserController@account_update')->name("account_update");
    
    
    Route::get('/package-details','UserController@package_details')->name('package-details'); 
    
    Route::post('/user-img','UserController@user_image')->name('user-img');
    
    Route::post('/coupon-calidate','UserController@validate_coupon')->name('validate_coupon');
    
});


Route::group(['prefix'=>'admin/','middleware'=>'auth','middleware'=>'admin'],function(){
    
    // Route::get('/card-completed/{slug}','MainController@card_completed')->name('card-completed');

    

    // Route::post('/pay','CheckoutController@checkout')->name('checkout');
    // Route::post('/upgrade','CheckoutController@upgrade')->name('upgrade');
    // Route::post('/cancel','CheckoutController@cancel')->name('cancel');
    // Route::post('/delete','CheckoutController@delete_payment')->name('delete_payment');
    // Route::post('/add','CheckoutController@add_payment')->name('add_payment');
    
    
    Route::get('/dashboard','AdminController@dashboard')->name('admin_dashboard'); 
    
    Route::get('/users','AdminController@users')->name('admin_user');
    Route::get('/user-id/{id}','AdminController@user_id')->name('user_id');
    

    Route::get('/user-add','AdminController@user_add')->name('admin_user_add');
    Route::post('/user-add','AdminController@user_add_do')->name('admin_user_add_do');

    Route::get('/coupon','AdminController@coupon')->name('admin_coupon');
    Route::get('/coupon/add','AdminController@coupon_add')->name('admin_coupon_add');
    Route::post('/coupon/add','AdminController@coupon_add_do')->name('admin_coupon_add_do');
    Route::get('/coupon/update/{id}','AdminController@coupon_update')->name('admin_coupon_update');
    Route::post('/coupon/update','AdminController@coupon_update_do')->name('admin_coupon_update_do');

    Route::post('/coupon/delete','AdminController@coupon_delete_do')->name('admin_coupon_delete_do');

    Route::get('/domain','AdminController@domains')->name('admin_domain');
   
    Route::get('/profile','AdminController@profile')->name('admin_profile');
    
    // Route::get('/mycard/{id}','UserController@card')->name('user_card'); 
    
    // Route::get('/custom-domain','UserController@custom_domain')->name('custom-domain'); 
    // Route::get('/add-domain','UserController@add_domain')->name('add-domain'); 
    // Route::post('/del-domain','UserController@delete_domain')->name('del-domain'); 
    
    
    // Route::post('/delete-card','UserController@delete_card')->name('delete-card');    
    // Route::post('/check-domain','UserController@check_domain')->name('check_domain');    
    // Route::post('/check-domain2','UserController@check_domain2')->name('check_domain2');    
    
    // Route::get('/user-profile','UserController@profile')->name('user_profile'); 
    
    // Route::post('/password-change','UserController@password_change')->name("password_change");
    // Route::post('/account_update','UserController@account_update')->name("account_update");
    
    
    // Route::get('/package-details','UserController@package_details')->name('package-details'); 
    
    // Route::post('/user-img','UserController@user_image')->name('user-img');
    
    
    
});


Route::post('subscription-created','CheckoutController@subscription_created')->name('subscription-created');