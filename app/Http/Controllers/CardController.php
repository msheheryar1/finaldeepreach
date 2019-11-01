<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use Illuminate\Support\Str;
use Auth;
use App\Customer;
use Image;
use App\Clicks;
class CardController extends Controller
{
    //

    public function finish_card(Request $request){


        $this->validate($request,[

            'title'=>'required|max:191',
            'description'=>'required|max:191',
            'destination'=>'required|max:191',
        ]);

        $new_slug = 'yuvtU';

        $card = new Card();
        $slug_check = false;
        $new_slug = Str::random(8);
        $card->slug =$new_slug;
        if(Auth::user()){
            $card->u_id = Auth::user()->id;

        }
        else{
            $card->u_id = 0;
        }
        
        $card->title = $request->title;
        $card->description = $request->description;
        $card->destination = $request->destination;
        $card->card_size = $request->card_size;

session(['c_title'=>$request->title,'c_description'=>$request->description,'c_destination'=>$request->destination]);

        $data = $request->imagebase64;
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);

        $card->fb_image = time().'.png';
        $card->twitter_image =  time().'.png';
        $card->linkedin_image =  time().'.png';
        $card->slack_image =  time().'.png';
        $card->pinterest_image =  time().'.png';
        if($request->custom_domain){
        $card->site = $request->custom_domain; 
        $card->custom_check = 1;
        }
        else{
            $card->site = $request->site;
            
        }
        $card->save();
        
        
            session(['card_sheheryar_id'=>$card->id]);

   
Image::make($data)->resize(600, null,
    function ($constraint) {
        $constraint->aspectRatio();
    })
->save('media/upload_image/'.time().'.png');
       

return redirect()->route('card-completed',$new_slug);

    }
    
    
    
    public function mycard($site,$slug){
        
        
        
        $social='';
        $referrer = '';
        if(isset($_SERVER[ 'HTTP_REFERER' ])){
            $referrer = $_SERVER[ 'HTTP_REFERER' ];    
        }
        
        
        $card = Card::all()->where('slug',$slug)->first();
        
        $url= url()->full();
        if(strpos($referrer,'https://t.co/')!==false){
             $clicks=$card->tw_clicks;
           $card->tw_clicks =$clicks+1;
           $card->save(); 
           $social='twitter';
          
        }
        else if(strcmp($referrer,'https://www.facebook.com/')==0){
             $clicks=$card->fb_clicks;
           $card->fb_clicks =$clicks+1;
           $card->save();
           $social='facebook';
           
           
        }
        else if(strcmp($referrer,'https://www.linkedin.com/feed/')==0){
              $clicks=$card->lin_clicks;
           $card->lin_clicks =$clicks+1;
           $card->save();
           
           $social='linkedin';
        }
        
        else if(strcmp($referrer,'https://www.pinterest.com/')==0){
              $clicks=$card->pin_clicks;
           $card->pin_clicks =$clicks+1;
           $card->save();
           
           $social='pinterest';
        }
        
        function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}



function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}


$user_ip = getUserIP();
 if($social!=''){
 $click = new Clicks();
 $click->card_id = $card->id;
 $click->country = ip_info($user_ip, "Country");
 $click->social = $social;
 $click->save();
 }
        
        return view('frontend.card')->with([
            'card'=>$card,
            ]);
    }
    
    
    
    
    
    
    
    
    
    
    // for api
    
     public function mycardapi(){
        
        
        
        $social='';
        $referrer ='' ;
        $slug = $_GET['slug'];
        $connecting_ip='';
        $client_ip='';
        $forwarder_for ='';
        $remote_addr='';
        
        if(isset($_GET['referrer'])){
            $referrer=rawurldecode($_GET['referrer']);
        }
        
        if(isset($_GET["connecting_ip"])){
        $connecting_ip=rawurldecode($_GET["connecting_ip"]);
            
        }
        
        if(isset($_GET['client_ip'])){
            $client_ip=rawurldecode($_GET['client_ip']);
        }
        
        if(isset($_GET['forwarder_for'])){
            $forwarder_for=rawurldecode($_GET['forwarder_for']);
        }
        
        if(isset($_GET['remote_addr'])){
            $remote_addr=$_GET['remote_addr'];
        }
        
        
        $card = Card::all()->where('slug',$slug)->first();
        
        $url= url()->full();
        if(strcmp($referrer,'https://t.co/')==0){
             $clicks=$card->tw_clicks;
           $card->tw_clicks =$clicks+1;
           $card->save(); 
           $social='twitter';
        }
        else if(strcmp($referrer,'https://www.facebook.com/')==0){
             $clicks=$card->fb_clicks;
           $card->fb_clicks =$clicks+1;
           $card->save();
           $social='facebook';
        }
        else if(strcmp($referrer,'https://www.linkedin.com/feed/')==0){
              $clicks=$card->lin_clicks;
           $card->lin_clicks =$clicks+1;
           $card->save();
           
           $social='linkedin';
        }
        
        else if(strcmp($referrer,'https://www.pinterest.com/')==0){
              $clicks=$card->pin_clicks;
           $card->pin_clicks =$clicks+1;
           $card->save();
           
           $social='pinterest';
        }
        
        
        function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($connecting_ip)) {
              $remote_addr = $connecting_ip;
              $client_ip = $connecting_ip;
    }
    $client  = @$client_ip;
    $forward = @$forwarder_for;
    $remote  = '';
     if(isset($_GET['remote_addr'])){
            $remote=$_GET['remote_addr'];
        }
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}



function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        
        $ip  = '';
     if(isset($_GET['remote_addr'])){
            $ip=$_GET['remote_addr'];
        }
        
        if ($deep_detect) {
            if (filter_var(@$forwarder_for, FILTER_VALIDATE_IP))
                $ip = $forwarder_for;
            if (filter_var(@$client_ip, FILTER_VALIDATE_IP))
                $ip = $client_ip;
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}


$user_ip = getUserIP();
 if($social!=''){
 $click = new Clicks();
 $click->card_id = $card->id;
 $click->country = ip_info($user_ip, "Country");
 $click->social = $social;
 $click->save();
 }
        return view('frontend.card')->with([
            'card'=>$card,
            ]);
    }
    
    
    
    
    
    
    
    
}
