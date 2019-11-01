<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use Stripe;
class CheckoutController extends Controller
{
    //
    public function checkout(Request $request){
    	Stripe\Stripe::setApiKey('sk_test_tJR4rbMd9QJaOrZdqNYgMbJh');

// Create a Customer:
$customer = \Stripe\Customer::create([
    'source' => $request->stripeToken,
    'email' => Auth::user()->email,
]);

$plan_id='';
if($request->plan=='Pro'){
    $plan_id = 'plan_FS8HWCNYGLDxDu';
}
else if($request->plan=='Elite'){
    $plan_id = 'plan_FS8IdbvV4O0NyP';
}

if(session()->has('coupon')){
\Stripe\Subscription::create([
  "customer" => $customer->id,
  "coupon"=>session()->get('coupon'),
  "items" => [
    [
      "plan" => $plan_id,
    ],
  ]
]);

}
else{
\Stripe\Subscription::create([
  "customer" => $customer->id,
  "items" => [
    [
      "plan" => $plan_id,
    ],
  ]
]);

}

$mycustomer = Customer::all()->where('u_id',Auth::user()->id)->first();
$mycustomer->customer_id = $customer->id;
$mycustomer->plan = $request->plan;
$mycustomer->status=0;
$mycustomer->save();

    	return redirect()->route('package-details');
    }

public function subscription_created(Request $request){
    
    $mycustomer = Customer::where('customer_id',$request->data['object']['customer'])->first();
    $mycustomer->due_date = $request->data['object']['current_period_end'];
    $mycustomer->s_id = $request->data['object']['id'];
    if($mycustomer->plan=='Pro'){
        $mycustomer->card_limit=500;
        $mycustomer->card_remaining=500;
    }
    else if($mycustomer->plan=='Elite'){
        $mycustomer->card_limit=1000;
        $mycustomer->card_remaining=1000;
    }
    $mycustomer->status=1;
    $mycustomer->save();
    
    
}











    public function upgrade(Request $request){
    	Stripe\Stripe::setApiKey('sk_test_tJR4rbMd9QJaOrZdqNYgMbJh');

$customer = Customer::all()->where('u_id',Auth::user()->id)->first();


$subscription = \Stripe\Subscription::retrieve($customer->s_id);
$subscription->cancel();

    $plan_id = 'plan_FS8IdbvV4O0NyP';

\Stripe\Subscription::create([
  "customer" => $customer->customer_id,
  "items" => [
    [
      "plan" => $plan_id,
    ],
  ]
]);

$mycustomer = Customer::all()->where('u_id',Auth::user()->id)->first();
$mycustomer->plan ='Elite';
$mycustomer->status=0;
$mycustomer->save();

    	return redirect()->route('package-details');
    }


public function cancel(Request $request){
        	Stripe\Stripe::setApiKey('sk_test_tJR4rbMd9QJaOrZdqNYgMbJh');

$customer = Customer::all()->where('u_id',Auth::user()->id)->first();
$subscription = \Stripe\Subscription::retrieve($customer->s_id);
$subscription->cancel();

$customer->s_id='';
$customer->status=0;
$customer->save();

return redirect()->back();
}



public function delete_payment(Request $request){
   Stripe\Stripe::setApiKey('sk_test_tJR4rbMd9QJaOrZdqNYgMbJh');
   
   
   $mycustomer = Customer::all()->where('u_id',Auth::user()->id)->first();
    $customer = \Stripe\Customer::retrieve($mycustomer->customer_id);
$customer->delete();


$mycustomer->customer_id='';
$mycustomer->status=0;
$mycustomer->save();

return redirect()->back();

}

public function add_payment(Request $request){
   Stripe\Stripe::setApiKey('sk_test_tJR4rbMd9QJaOrZdqNYgMbJh');

// Create a Customer:
$customer = \Stripe\Customer::create([
    'source' => $request->stripeToken,
    'email' => Auth::user()->email,
]);
$mycustomer = Customer::all()->where('u_id',Auth::user()->id)->first();
$mycustomer->customer_id=$customer->id;
$mycustomer->save();
return redirect()->back();

}

}
