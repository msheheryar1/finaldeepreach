<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use Auth;

use Mail;
use App\Mail\ForgetPassword;

use Illuminate\Support\Str;
class CustomController extends Controller
{
    //
    public function login(){
        if(Auth::user()){
            return redirect()->route('home');
        }
    	return view('frontend.login');
    }
    public function signup(){
    	if(Auth::user()){
            return redirect()->route('home');
        }
    	return view('frontend.signup');
    }

public function do_signup(Request $request){
    	$this->validate($request,[
    		'name'=>'required|max:191',
    		'email'=>'unique:users|required|max:191',
			'password'=>'required|max:191',
    	]);

    	
   $user  = new User();
   $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();



$credentials = $request->only('email','password');

if(Auth::attempt($credentials,1)){
    $customer = new Customer();
$customer->u_id = Auth::user()->id;
$customer->email = Auth::user()->email;
$customer->plan = 'Basic';
$customer->due_date = date('Y-m-d H:i:s', strtotime('+7 days'));
$customer->card_limit = 10;
$customer->card_remaining = 10;
$customer->save();

    return redirect()->intended('/');
}

	return redirect()->route('home');    


    }


public function do_login(Request $request){

    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials,$request->remember)){
        if(Auth::user()->role){
            return redirect()->route('admin_dashboard');
        }
         return redirect()->intended('/');
        
    }
    else{
         return redirect()->back()->withErrors('message','message');
    }
    
}

public function logout(Request $request){
	Auth::logout();
	return redirect()->back();
}


public function forget_password(Request $request){
    $user = User::where('email',$request->email)->first();
    if($user){
        $token =Str::random(15);
        $newuser = User::find($user->id);
        $newuser->verifyToken = $token;
        $newuser->save();

        Mail::to($newuser->email)->send(new ForgetPassword($newuser));

        echo "Done";
    }
    else{

    }
}


public function reset_password($token){
    
    
    $user = User::all()->where('verifyToken',$token);
    if($user->count()>0){

    return view('frontend.reset_password')->with([
        'token'=>$token,
    ]);   
    }
    else{
        abort(404);
    }

    
}

public function do_forget(Request $request){
    $user = User::where('email',$request->email)->first();
    if($user){
        $user->verifyToken=Str::random(15);
        $user->password = bcrypt($request->password);
        $user->save();
        echo "Done";
    }
    else{

    }
}

}
