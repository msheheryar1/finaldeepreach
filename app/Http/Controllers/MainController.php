<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Image;
use App\Card;
use App\Domain;
use Auth;
use App\Customer;
use App\User;
use Socialite;
class MainController extends Controller
{
    //
    public function index(){
    	return view('frontend.index');
    }

    public function make_card(){
        if(session('image_name')){
            if(Auth::user()){
                
            $domains = Domain::all()->where('u_id',Auth::user()->id);
            if($domains->count()==0){
                $domains=[];
            }
            $customer = Customer::all()->where('u_id',Auth::user()->id)->first();
            }
            else{
                $domains=[];
                $customer='';
            }
            return view('frontend.makeCard')->with([
                    'domains'=>$domains,
                    'customer'=>$customer,
                ]);
        }
        return redirect()->route('home');
    	
    }

    public function card_completed($slug){
    
    
    $update_card = Card::find(session('card_sheheryar_id'));
    if($update_card!=''){
        
    $update_card->u_id = Auth::user()->id;
    $update_card->save();
    
    }
    $customer= Customer::all()->where('u_id',Auth::user()->id)->first();
    
    $date=date_create(date("Y-m-d H:i:s", strtotime("+1 month", strtotime($customer->updated_at))));
    $today =date_create(date('Y-m-d H:i:s'));
                               
    $diff= $date->diff($today);
    
    if($customer->plan == 'Elite'){
        
        
            if($diff->format('%s')>0){
                                   
                    $card = Card::all()->where('slug',$slug)->first();
            }
            else{
                 Card::where('slug',$slug)->delete();
                return redirect()->route('package-details');
                
            $card=[];                       
            }
        
    }
    else if($customer->plan == 'Pro'){
        $limit=$customer->card_limit;
        $remaining =$customer->card_remaining;
   
        if($remaining>0 && $diff->format('%s')>0){
                   $card = Card::all()->where('slug',$slug)->first();
                        $remaining = $remaining-1;
        $customer->card_remaining=$remaining;
   
        }
        else{
            Card::where('slug',$slug)->delete();
                return redirect()->route('package-details');
            $card = [];         
        }
        
    }
    else{
           
    $date=date_create(date("Y-m-d H:i:s", strtotime("+1 week", strtotime($customer->updated_at))));
    $today =date_create(date('Y-m-d H:i:s'));
                               
    $diff= $date->diff($today);
    
        $limit=$customer->card_limit;
        $remaining =$customer->card_remaining;
        
        if($remaining>0 && $diff->format('%s')>0){
                   $card = Card::all()->where('slug',$slug)->first();
                   $remaining = $remaining-1;
        $customer->card_remaining=$remaining;
        
        }
        else{
            Card::where('slug',$slug)->delete();
            
                return redirect()->route('package-details');
            $card = [];         
        }
    }
    
  $customer->save();
        
        
    	return view('frontend.card_completed')->with([
    	        'card'=>$card,
    	    ]);

        
    }

    public function pricing(){
        if(Auth::user()){
            $customer= Customer::all()->where('u_id',Auth::user()->id)->first();
        }
        else{
            $customer=[];
        }
        
    	return view('frontend.pricing')->with([
    	        'customer'=>$customer,
    	    ]);
    }
    
    public function image_upload_url(Request $request){
        $this->validate($request,[
            'url'=>'required',
        ]);
        $path = $request->url;
$filename = basename($path);

session(['image_name'=>$filename]);

Image::make($path)->resize(1000, null,
    function ($constraint) {
        $constraint->aspectRatio();
    })
->save(public_path('media/upload_image/' . $filename));


//         $url = $request->url;
// $contents = file_get_contents($url);
// $name = substr($url, strrpos($url, '/') + 1);
// $contents->move('media/user_images',$name);


        // $photo_name=time().'.'.$request->file('file')->getClientOriginalExtension();
        //     $request->file('file')->move('media/user_images',$photo_name);

// ini_set('memory_limit', '256M');
// Image::make('media/user_images/'.$photo_name)->resize(1000, null,
//     function ($constraint) {
//         $constraint->aspectRatio();
//     })
// ->save('media/user_images/'.$photo_name);
$request->session()->forget(['c_title', 'c_description','c_destination']);
return redirect()->route('make-card');
        
    }



    public function image_upload(Request $request){
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ]);
        
        
        $photo_name = '';
        $photo = $request->only('image');
        if($photo){
            
        $photo_name=time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('media/upload_image',$photo_name);
                       
Image::make('media/upload_image/'.$photo_name)->resize(1000, null,
    function ($constraint) {
        $constraint->aspectRatio();
    })
->save('media/upload_image/'.$photo_name);
        }
        
        

        
        
        
session(['image_name'=>$photo_name]);
        
$request->session()->forget(['c_title', 'c_description','c_destination']);
return redirect()->route('make-card');
        
    }


    public function image_upload_drop(Request $request){
        $this->validate($request,[
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ]);
        
        
        $photo_name = '';
        $photo = $request->only('file');
        if($photo){
            
        $photo_name=time().'.'.$request->file('file')->getClientOriginalExtension();
            $request->file('file')->move('media/upload_image',$photo_name);
                       
Image::make('media/upload_image/'.$photo_name)->resize(1000, null,
    function ($constraint) {
        $constraint->aspectRatio();
    })
->save('media/upload_image/'.$photo_name);
        }
        
        

        
        
        
session(['image_name'=>$photo_name]);

$request->session()->forget(['c_title', 'c_description','c_destination']);        
return redirect()->route('make-card');
        
    }





public function privacy(){
    return view('frontend.privacy');
}

public function contact(){
    return view('frontend.contact');
}
public function terms(){
    return view('frontend.terms');
}



public function facebook(){
    
    return Socialite::driver ( 'facebook' )->redirect ();
}


public function facebook_callback(){
    $user = Socialite::with ( 'facebook' )->user ();
    

    
    $check_user= User::all()->where('facebook_id',$user->id)->first();
    if($check_user){
        
        
        $credentials = [
                'email'=>$check_user->email,
                'password'=>'sheheryarnoor123'
            ];

        if(Auth::attempt($credentials,1)){
            return redirect()->intended('/');
        }
        return redirect()->route('home');
        
    }
    else{
        $make_user = new User();
        $make_user->email = 'facebook'.$user->email;
        $make_user->name = $user->name;
        $make_user->facebook_id = $user->id;
        $make_user->password = bcrypt('sheheryarnoor123');
        $make_user->save();
        
        
        $customer = new Customer();
$customer->u_id = $make_user->id;
$customer->email = $make_user->email;
$customer->plan = 'Basic';
$customer->due_date = date('Y-m-d H:i:s', strtotime('+7 days'));
$customer->card_limit = 10;
$customer->card_remaining = 10;
$customer->save();

        $credentials = [
                'email'=>$make_user->email,
                'password'=>'sheheryarnoor123'
            ];

        if(Auth::attempt($credentials,1)){
                return redirect()->intended('/');

            
        }
        return redirect()->route('home');
        
        
    }
    
    
}







public function google(){
    
    return Socialite::driver ( 'google' )->redirect ();
}


public function google_callback(){
    $user = Socialite::with ( 'google' )->user ();
    

    
    $check_user= User::all()->where('google_id',$user->id)->first();
    if($check_user){
        
        
        $credentials = [
                'email'=>$check_user->email,
                'password'=>'sheheryarnoor123'
            ];

        if(Auth::attempt($credentials,1)){
            return redirect()->intended('/');
        }
        return redirect()->route('home');
        
    }
    else{
        $make_user = new User();
        $make_user->email = 'google'.$user->email;
        $make_user->name = $user->name;
        $make_user->google_id = $user->id;
        $make_user->password = bcrypt('sheheryarnoor123');
        $make_user->save();
        
        
        $customer = new Customer();
$customer->u_id = $make_user->id;
$customer->email = $make_user->email;
$customer->plan = 'Basic';
$customer->due_date = date('Y-m-d H:i:s', strtotime('+7 days'));
$customer->card_limit = 10;
$customer->card_remaining = 10;
$customer->save();

        $credentials = [
                'email'=>$make_user->email,
                'password'=>'sheheryarnoor123'
            ];

        if(Auth::attempt($credentials,1)){
                return redirect()->intended('/');

            
        }
        return redirect()->route('home');
        
        
    }
    
    
}


public function send_contact_mail(Request $request){
    
}



}
