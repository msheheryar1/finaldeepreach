<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use Illuminate\Support\Str;
use Auth;
use App\Customer;
use Image;
use App\Clicks;
use App\User;
use DB;
use App\Domain;
use App\Coupon;
use Stripe;
class AdminController extends Controller
{
    //
public function dashboard(){
    
    
        $cards = Card::all();
    $month1=date('Y-m', strtotime('-2 months'));
        $month2=date('Y-m', strtotime('-1 months'));
        $month3=date('Y-m');
        $month4=date('Y-m', strtotime('+1 months'));
        $month5=date('Y-m', strtotime('+2 months'));
        $month6=date('Y-m', strtotime('+3 months'));
        $month7=date('Y-m', strtotime('+4 months'));
        $month8=date('Y-m', strtotime('+5 months'));
        
        
    $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();
    
     $m1_users = User::where('created_at','like','%'.$month1.'%')->get();
    
     $m2_users = User::where('created_at','like','%'.$month2.'%')->get();
    
     $m3_users = User::where('created_at','like','%'.$month3.'%')->get();
  
     $m4_users = User::where('created_at','like','%'.$month4.'%')->get();
    
     $m5_users = User::where('created_at','like','%'.$month5.'%')->get();
    
     $m6_users = User::where('created_at','like','%'.$month6.'%')->get();
                    
    
     $m7_users = User::where('created_at','like','%'.$month7.'%')->get();
    
     $m8_users = User::where('created_at','like','%'.$month8.'%')->get();
            
    $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();        
            
         $country_clicks =   Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select('country',DB::raw('count(*) as clicks'))
                    ->groupBy('countries_clicks.country')
                    ->get();       
        
        $social_clicks =   Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select('social',DB::raw('count(*) as clicks'))
                    ->groupBy('countries_clicks.social')
                    ->get();       
   
            
    return view('admin.dashboard')->with([
            'users'=>$user,
            'm1_users'=>$m1_users,
                'm2_users'=>$m2_users,
                'm3_users'=>$m3_users,
                'm4_users'=>$m4_users,
                'm5_users'=>$m5_users,
                'm6_users'=>$m6_users,
                'm7_users'=>$m7_users,
                'm8_users'=>$m8_users,
                'clicks'=>$clicks,
                'country_clicks'=> $country_clicks,
                'social_clicks'=>$social_clicks,
                'cards'=>$cards,
        ]);
}
    
    
    
    public function users(){
         $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();        
        return view('admin.users')->with([
            'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
            ]);    
    }
    
    public function user_id($id){
        $cards = Card::all();
        $user_cards = Card::all()->where('u_id',$id);
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();
        $myuser = User::find($id);    
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();        
        return view('admin.user_id')->with([
            'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
             'user_cards'=>$user_cards,
             'myuser'=>$myuser,
            ]);    
    }
    
    public function domains(){
        $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();  
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();  
      $domains = Domain::join('users','users.id','domains.u_id')->select('domains.*','users.email')->get();    
        return view('admin.domains')->with([
            'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
             'domain'=>$domains,
            ]);    
    }
    
    
    public function profile(){
        
        $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();  
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();  
      
        return view('admin.profile')->with([
            'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
            ]);    
    }
    
    public function user_add(){

   $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();  
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();  
      
       
        return view('admin.user_add')->with([
           'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
        ]);
    }
    
    public function user_add_do(Request $request){
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



    $customer = new Customer();
$customer->u_id = $user->id;
$customer->email = $user->email;
$customer->plan = 'Basic';
$customer->due_date = date('Y-m-d H:i:s', strtotime('+'.$request->days.' days'));
$customer->card_limit = $request->cards;
$customer->card_remaining = $request->cards;
$customer->save();



    return redirect()->back()->with('success','success');    

    }

    public function coupon(){
        $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();  
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();  
      
       $coupon = Coupon::orderBy('id','desc')->get();
        return view('admin.coupon')->with([
           'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
             'coupon'=>$coupon
        ]);
    }

    public function coupon_add(){
        $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();  
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();  
      
       $coupon = Coupon::orderBy('id','desc')->get();
        return view('admin.coupon_add')->with([
           'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
             'coupon'=>$coupon
        ]);
    }

    public function coupon_add_do(Request $request){
        Stripe\Stripe::setApiKey('sk_test_ztVbNHluhZr81SWTah99pu4100SyHXc1Pp');

$this->validate($request,[
    'code'=>'unique:coupons'
]);

$newcoupon=Stripe\Coupon::create([
  "percent_off" => $request->percent,
  "duration" => "once",
  "redeem_by" => strtotime($request->last_date),
  "id"=>$request->code,
]);

$coupon = new Coupon();
$coupon->code = $request->code;
$coupon->last_date = $request->last_date;
$coupon->percent = $request->percent;
$coupon->save();


return redirect()->back()->with('success','success');

    }

    public function coupon_update($id){
    $cards = Card::all();
        $user = User::join('customers','customers.u_id','users.id')
            ->select('users.*','customers.plan')
            ->get();  
            $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->get();  
      
       $coupon = Coupon::find($id);
        return view('admin.coupon_update')->with([
           'cards'=>$cards,
             'users'=>$user,
             'clicks'=>$clicks,
             'coupon'=>$coupon
        ]);
    }

//     public function coupon_update_do(Request $request){
//             Stripe\Stripe::setApiKey('sk_test_ztVbNHluhZr81SWTah99pu4100SyHXc1Pp');

// $this->validate($request,[
//     'code'=>'unique:coupons'
// ]);

// $newcoupon=Stripe\Coupon::create([
//   "percent_off" => $request->percent,
//   "duration" => "once",
//   "redeem_by" => strtotime($request->last_date),
//   "id"=>$request->code,
// ]);

// $coupon = Coupon::find($request->id);
// $coupon->code = $request->code;
// $coupon->last_date = $request->last_date;
// $coupon->percent = $request->percent;
// $coupon->save();
//     }


    public function coupon_delete_do(Request $request){
                Stripe\Stripe::setApiKey('sk_test_ztVbNHluhZr81SWTah99pu4100SyHXc1Pp');

$coupon = Coupon::find($request->id);


        $coupon_get = Stripe\Coupon::retrieve($coupon->code);
$coupon_get->delete();

$coupon->delete();
echo "Done";
    }
}
