<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Image;
use App\Card;
use App\Clicks;
use App\Domain;
use Auth;
use Validator;
use DB;
use App\Customer;
use App\User;
use App\Coupon;
class UserController extends Controller
{

    public function dashboard(){
        
        $month1=date('Y-m', strtotime('-2 months'));
        $month2=date('Y-m', strtotime('-1 months'));
        $month3=date('Y-m');
        $month4=date('Y-m', strtotime('+1 months'));
        $month5=date('Y-m', strtotime('+2 months'));
        $month6=date('Y-m', strtotime('+3 months'));
        $month7=date('Y-m', strtotime('+4 months'));
        $month8=date('Y-m', strtotime('+5 months'));
        
        $cards = Card::all()->where('u_id',Auth::user()->id);
        $id=Auth::user()->id;
        $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->where('u_id',Auth::user()->id)->get();
        $customer=Customer::all()->where('u_id',Auth::user()->id)->first();
        
        $m1_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month1'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month1.'%')
                    ->get();
                    
        $m2_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month2'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month2.'%')
                    ->get();
                    

        $m3_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month3'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month3.'%')
                    ->get();
                    
        $m4_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month4'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month4.'%')
                    ->get();
                    
        $m5_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month5'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month5.'%')
                    ->get();
                    
        $m6_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month6'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month6.'%')
                    ->get();
        $m7_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month7'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month7.'%')
                    ->get();
                    
        $m8_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month8'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('countries_clicks.created_at','like','%'.$month8.'%')
                    ->get();
                    
                    
        $country_clicks =   Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select('country',DB::raw('count(*) as clicks'))
                    ->groupBy('countries_clicks.country')
                    ->where('cards.u_id',Auth::user()->id)
                    ->get();       
        
        $social_clicks =   Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select('social',DB::raw('count(*) as clicks'))
                    ->groupBy('countries_clicks.social')
                    ->where('cards.u_id',Auth::user()->id)
                    ->get();       
                    
                    
                    
        return view('panel.dashboard')->with([
                'cards'=>$cards,
                'clicks'=>$clicks,
                'm1_clicks'=>$m1_clicks,
                'm2_clicks'=>$m2_clicks,
                'm3_clicks'=>$m3_clicks,
                'm4_clicks'=>$m4_clicks,
                'm5_clicks'=>$m5_clicks,
                'm6_clicks'=>$m6_clicks,
                'm7_clicks'=>$m7_clicks,
                'm8_clicks'=>$m8_clicks,
                'country_clicks'=> $country_clicks,
                'social_clicks'=>$social_clicks,
                'customer'=>$customer,
            ]);
    }
   
    public function card($id){
        $cards = Card::all()->where('u_id',Auth::user()->id);
        $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->where('u_id',Auth::user()->id)->get();
        $mycard = Card::find($id);
        $customer=Customer::all()->where('u_id',Auth::user()->id)->first();
        
        
        $month3=date('Y-m');
        $month4=date('Y-m', strtotime('+1 months'));
        $month5=date('Y-m', strtotime('+2 months'));
        $month6=date('Y-m', strtotime('+3 months'));
        $month7=date('Y-m', strtotime('+4 months'));
        $month8=date('Y-m', strtotime('+5 months'));
    
        $m3_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month1'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('cards.id',$id)
                    ->where('countries_clicks.created_at','like','%'.$month3.'%')
                    ->get();
                    
        $m4_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month2'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('cards.id',$id)
                    ->where('countries_clicks.created_at','like','%'.$month4.'%')
                    ->get();
                    
        $m5_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month3'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('cards.id',$id)
                    ->where('countries_clicks.created_at','like','%'.$month5.'%')
                    ->get();
                    
        $m6_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month4'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('cards.id',$id)
                    ->where('countries_clicks.created_at','like','%'.$month6.'%')
                    ->get();
        $m7_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month5'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('cards.id',$id)
                    ->where('countries_clicks.created_at','like','%'.$month7.'%')
                    ->get();
                    
        $m8_clicks = Clicks::join('cards','cards.id','countries_clicks.card_id')
                    ->select(DB::raw('count(*) as month6'))
                    ->where('cards.u_id',Auth::user()->id)
                    ->where('cards.id',$id)
                    ->where('countries_clicks.created_at','like','%'.$month8.'%')
                    ->get();
        
        if($mycard->u_id != Auth::user()->id){
            abort(404);
        }
        
        return view('panel.card')->with([
                'cards'=>$cards,
                'clicks'=>$clicks,
                'mycard'=>$mycard,
                'm1_clicks'=>$m3_clicks,
                'm2_clicks'=>$m4_clicks,
                'm3_clicks'=>$m5_clicks,
                'm4_clicks'=>$m6_clicks,
                'm5_clicks'=>$m7_clicks,
                'm6_clicks'=>$m8_clicks,
                'customer'=>$customer,
            ]);
    }

 public function delete_card(Request $request){
     
        $card = Card::find($request->id)->delete();
        $clicks= Clicks::where('card_id',$request->id)->delete();
        return "Done";
    }
    
    public function custom_domain(){
        $cards = Card::all()->where('u_id',Auth::user()->id);
        $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->where('u_id',Auth::user()->id)->get();
      $domains = Domain::all()->where('u_id',Auth::user()->id);
      $customer=Customer::all()->where('u_id',Auth::user()->id)->first();
       if($customer->plan=='Basic'){
            return redirect()->back();
        }
        return view('panel.custom_domain')->with([
                'cards'=>$cards,
                'clicks'=>$clicks,
                'domains'=>$domains,
                'customer'=>$customer,
                
            ]);
    }
    
    public function add_domain(){
        
        $cards = Card::all()->where('u_id',Auth::user()->id);
        $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->where('u_id',Auth::user()->id)->get();
         $domains = Domain::all()->where('u_id',Auth::user()->id);
     
      $customer=Customer::all()->where('u_id',Auth::user()->id)->first();
        if($customer->plan=='Pro' &&  $domains->count()==1){
            return redirect()->back();
        }
        else if($customer->plan=='Elite' &&  $domains->count()==10){
            return redirect()->back();
        }
        else if($customer->plan=='Basic'){
            return redirect()->back();
        }
        return view('panel.add_domain')->with([
                'cards'=>$cards,
                'clicks'=>$clicks,
                'customer'=>$customer,
                
            ]);
    }
    
    public function delete_domain(Request $request){
        $domain = Domain::find($request->id)->delete();
        return 'Done';
    }
    public function check_domain(Request $request){
        $validator=  Validator::make($request->all(),[
                    'url'=>'required|url|unique:domains,domain',
                ]);
                if($validator->fails()){
                    return "error2";
                }
            
        $url = $request->url;
        $url .= "/dr.php?check";
        try{
        if(file_get_contents($url)=='done'){
           
            $domain = new Domain();
            $domain->u_id = Auth::user()->id;
            $domain->domain= $request->url;
            $domain->save();
            return "Done";
        }
        }    
        catch(\Exception $e){
            $url = $request->url;
        $url .= "/aiwp.php?check";
        try{
        if(file_get_contents($url)=='done'){
           
            $domain = new Domain();
            $domain->u_id = Auth::user()->id;
            $domain->domain= $request->url;
            $domain->save();
            return "Done";
        }
        }
        catch(\Exception $e){
            return "error";
        }
            
        }
        
    }
    
     public function check_domain2(Request $request){
        $validator=  Validator::make($request->all(),[
                    'url'=>'required|url|unique:domains,domain',
                ]);
                if($validator->fails()){
                    return "error2";
                }
        
            $domain = new Domain();
            $domain->u_id = Auth::user()->id;
            $domain->domain= $request->url;
            $domain->save();
            return "Done";
        
        
    }
    
    public function profile(){
            $cards = Card::all()->where('u_id',Auth::user()->id);
        
        $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->where('u_id',Auth::user()->id)->get();
        $customer=Customer::all()->where('u_id',Auth::user()->id)->first();
        
        return view('panel.user_profile')->with([
            'cards'=>$cards,
                'clicks'=>$clicks,
                'customer'=>$customer
            ]);
    }
    
    
    public function password_change(Request $request){
        $this->validate($request,[
                'password'=>'required|max:191|confirmed'
            ]);
            
        $user = User::find(Auth::user()->id)->update(['password'=>bcrypt($request->password)]);
        Auth::logout();
        return redirect()->back();
    }
    
    
    public function account_update(Request $request){
        
        $user = User::find(Auth::user()->id);
        
        if(Auth::user()->facebook_id==''){
        if($user->email == $request->email){
            $this->validate($request,[
                'name'=>'required|max:191',
                'email'=>'required|max:191'
            ]);
            
        }
        else{
            $this->validate($request,[
                'name'=>'required|max:191',
                'email'=>'required|max:191|unique:users'
            ]);
        
        }    
        $user = User::find(Auth::user()->id)->update(['name'=>$request->name,'email'=>$request->email]);
        }
        else{
            $this->validate($request,[
                'name'=>'required|max:191'
            ]);
            $user = User::find(Auth::user()->id)->update(['name'=>$request->name]);
            
        }
        
            
        
    
        return redirect()->back();
    }
    
    public function package_details(){
            $cards = Card::all()->where('u_id',Auth::user()->id);
        
        $clicks = Card::select(DB::raw('SUM(fb_clicks) as total1,SUM(tw_clicks) as total2,SUM(lin_clicks) as total3,SUM(pin_clicks) as total4,SUM(slack_clicks) as total5'))->where('u_id',Auth::user()->id)->get();
        
        $customer = Customer::all()->where('u_id',Auth::user()->id)->first();
        if($customer==''){
            $customer=[
                    'plan'=>'Basic'
                ];
        }
        return view('panel.package_details')->with([
            'cards'=>$cards,
                'clicks'=>$clicks,
                'customer'=>$customer,
            ]);
    }
    
    
    public function user_image(Request $request){
        
        $this->validate($request,[
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ]);
         $photo_name = '';
        $photo = $request->only('file');
        if($photo){
            
        $photo_name=time().'.'.$request->file('file')->getClientOriginalExtension();
            $request->file('file')->move('media/user_image',$photo_name);
        }
        
        $user= User::find(Auth::user()->id)->update(['img'=>$photo_name]);
        return redirect()->back();
        
    }

    public function validate_coupon(Request $request){
        $coupon = Coupon::where('code',$request->code)->first();
        if($coupon){
            session(['coupon'=>$coupon->code]);
            echo $coupon->percent;
            return '';
        }
        else{
           
        }
    }
    
}
