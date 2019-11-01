<?php $__env->startSection('title','Pricing - Deep Reach'); ?>
<?php $__env->startSection('content'); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('asset/pricing/assets/css/style.css')); ?>">
	
<br><br>
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<!-- Heading -->
				<div class="col-md-12 mt-6 text-center">
					<h1 class="section-title red-heading">The Pricing Table</h1>
					
				</div>
				<!-- Pricing Table Area -->
				<div class="gg-pricing-table icon-table col-md-12 mt-50">
					<!-- Single Table -->
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 pull-left">
						<div class="single-pricing-table text-center clearfix">
							<!-- Heading -->
							<div class="pricing-table-heading">
								<div class="pricing-icon">
									<img src="<?php echo e(asset('asset/pricing/assets/images/bicycle.png')); ?>" alt="" class="center-block img-responsive">
								</div>
								<h2>Basic Plan</h2>
							</div>
							<!-- Price -->
							<div class="price">
								<span>$0</span>
							</div>
							<!-- Price Item -->
							<div class="pricing-item">
								<ul>
									<li><p><strong>10</strong> Cards Per Month</p></li>
									<li><p><strong>Dashboard</strong> Access</p></li>
									<li><p><del><strong>Track</strong> Card Clicks</del></p></li>
									<li><p><del>Use <strong>Custom Domains</strong></del></p></li>
									<li><p>Shared <strong>Domains</strong></p></li>
									<li><p>Basic <strong>Support</strong></p></li>
								</ul>
							</div>
							<!-- Button -->
							<?php if(Auth::user()): ?>
							
							<?php else: ?>
							<div class="pricing-button">
								<a href="<?php echo e(route('signup')); ?>" class="btn btn-pricing"><i class="fa fa-check"></i> Sign Up</a>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<!-- Single Table -->
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 pull-left">
						<div class="single-pricing-table text-center clearfix">
							<!-- Heading -->
							<div class="pricing-table-heading">
								<div class="pricing-icon">
									<img src="<?php echo e(asset('asset/pricing/assets/images/vespa-1.png')); ?>" alt="" class="center-block img-responsive">
								</div>
								<h2>Pro Plan</h2>
							</div>
							<!-- Price -->
							<div class="price">
								<span>$8.99</span>
							</div>
							<!-- Price Item -->
							<div class="pricing-item">
								<ul>
									<li><p><strong>500</strong> Cards Per Month</p></li>
									<li><p><strong>Dashboard</strong> Access</p></li>
									<li><p><strong>Track</strong> Card Clicks</p></li>
									<li><p>1 <strong>Custom Domains</strong></p></li>
									
									<li><p>Priority <strong>Support</strong></p></li>
								</ul>
							</div>
							<!-- Button -->
							<?php if(Auth::user()): ?>
							    <?php if($customer->plan=='Basic'): ?>
        							        
        							<div class="pricing-button">
        								<a data-plan='Pro' data-price='8.99' class="upgrade_btn btn btn-pricing"><i class="fa fa-check"></i>Upgrade</a>
        							</div>
							    
							    
							    <?php endif; ?>

							<?php else: ?>
							<div class="pricing-button">
								<a href="<?php echo e(route('signup')); ?>" class="btn btn-pricing"><i class="fa fa-check"></i> Sign Up</a>
							</div>
							<?php endif; ?>
							
						</div>
					</div>
					<!-- Single Table -->
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 pull-left">
						<div class="single-pricing-table text-center clearfix">
							<!-- Heading -->
							<div class="pricing-table-heading">
								<div class="pricing-icon">
									<img src="<?php echo e(asset('asset/pricing/assets/images/car.png')); ?>" alt="" class="center-block img-responsive">
								</div>
								<h2>Elite Plan</h2>
							</div>
							<!-- Price -->
							<div class="price">
								<span>$13.99</span>
							</div>
							<!-- Price Item -->
							<div class="pricing-item">
								<ul>
									
									<li><p><strong>Unlimited</strong> Cards Per Month</p></li>
									<li><p><strong>Dashboard</strong> Access</p></li>
									<li><p><strong>Track</strong> Card Clicks</p></li>
									<li><p>10 <strong>Custom Domains</strong></p></li>
									
									<li><p>Priority <strong>Support</strong></p></li>
								</ul>
							</div>
							<!-- Button -->
							<?php if(Auth::user()): ?>
							    <?php if($customer->plan=='Basic'): ?>
        							        
        							<div class="pricing-button">
        								<a data-plan='Elite' data-id="" data-price='13.99' class="upgrade_btn btn btn-pricing"><i class="fa fa-check"></i>Upgrade</a>
        							</div>
        						<?php elseif($customer->plan == 'Pro'): ?>
        						<div class="pricing-button">
        								<a href="<?php echo e(route('package-details')); ?>" data-plan='Elite' data-id="" data-price='13.99' class="btn btn-pricing"><i class="fa fa-check"></i>Upgrade</a>
        							</div>
        						
							    <?php endif; ?>

							<?php else: ?>
							<div class="pricing-button">
								<a href="<?php echo e(route('signup')); ?>" class="btn btn-pricing"><i class="fa fa-check"></i> Sign Up</a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			
			</div>

			<br>

<style type="text/css">
	.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>

<div class="checkout_forms" style="display: none;">

<div class="order-summary" ><div class="order-summary-title" style="border: 1px solid rgb(40, 56, 76); border-radius: 5px 5px 0px 0px; padding: 15px 10px; color: white; font-size: 16px !important; background: rgb(40, 56, 76);">
            Checkout Summary
        </div> 
        <div class="order-summary-body" style="border-width: 0px 1px 1px; border-top-style: initial; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: rgb(181, 181, 181); border-bottom-color: rgb(181, 181, 181); border-left-color: rgb(181, 181, 181); border-image: initial; border-radius: 0px 0px 5px 5px; padding: 10px; background: rgb(250, 250, 250); font-size: 16px !important; color: rgb(0, 0, 0);"> <div class="row"><div class="col col-8 selected_plan">Pro Plan</div> <div class="col col-4 text-right">$8.99</div></div> <div style="border-bottom: 1px dashed rgb(181, 181, 181); margin: 10px 0px;"></div> <!----> <!----> <!----> <!----> <!----> <!----> <div class="row"><div class="col col-8 d-flex" style="font-weight: 600;"><div class="text-right">
                        Total <!----></div></div> <div class="col col-4 text-right total_price" style="font-weight: 600;">$8.99</div></div> <!----></div></div>


                        <br>

<div class="order-summary-title" style="border-top: 1px solid rgb(40, 56, 76); border-right: 1px solid rgb(40, 56, 76); border-bottom: none; border-left: 1px solid rgb(40, 56, 76); border-image: initial; font-size: 16px !important; border-radius: 5px 5px 0px 0px; padding: 15px 10px; color: white; background: rgb(40, 56, 76);">
        Choose A Way To Pay
        <!----></div>
        	<div class="credit_card braintree-option braintree-option__card py-3 pl-3" style="border-collapse: collapse; border:2px solid #B5B5B5;background-color: #FAFAFA;" tabindex="0">
<div class="braintree-option__label" aria-label="Paying with Card">
 <i class="far fa-credit-card" style="font-size: 24px;"></i> Card
  <div class="braintree-option__disabled-message"></div>
</div>
</div>




<div class="credit_card2 braintree-option braintree-option__card py-3 pl-3" style="border-collapse: collapse; border:2px solid #B5B5B5;background-color: #FAFAFA;display:none;" tabindex="0">


<div class="container-fluid">
        
        <div id="card-errors" role="alert"></div>
        <div class="card">
            <div class="card-body">
                <form id="payment-form" action="<?php echo e(route('checkout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <label for="card-number">Credit Card Number</label>
                    <div class="input-group mb-2">
                        
                        <span id="card-number" class="form-control">
                            <!-- Stripe Card Element -->
                        </span>
                        
                    </div>
                    <label for="card-cvc">CVC Number</label>
                    <div class="input-group mb-2">
                       
                        <span id="card-cvc" class="form-control">
                            <!-- Stripe CVC Element -->
                        </span>
                    </div>
                    <label for="card-exp">Expiration</label>
                    <div class="input-group mb-2">
                        <span id="card-exp" class="form-control">
                            <!-- Stripe Card Expiry Element -->
                        </span>
                        
                    </div>
                    <div class="input-group mb-2">
                        <span  class="form-control" style="border:none;">
                            <button style="z-index: 2;" id="payment-submit" class="btn btn-info mt-1">Submit Payment</button>
                        </span>
                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

<script src="https://js.stripe.com/v3/"></script>



</div>




		</div>
</div>

	</section>
	<script src="<?php echo e(asset('asset/pricing/assets/js/bootstrap.min.js')); ?>"></script>

<script type="text/javascript">
let selected_plan='';
	$(".credit_card").click(function(){
		$(".credit_card2").slideToggle(300);

	});

	$(".upgrade_btn").click(function(){
selected_plan=$(this).attr('data-plan');
		$(".selected_plan").html($(this).attr('data-plan')+" Plan");
		$(".selected_plan").next().html('$'+$(this).attr('data-price'));
		$(".total_price").html('$'+$(this).attr('data-price'));
		$(".checkout_forms").slideDown(200);
		

	});
	 var stripe = Stripe('pk_test_CYyPRs1yY09z9iQ2TKccpuj000fpVCxDGn');

        // Create an instance of Elements
        var elements = stripe.elements();

        // Try to match bootstrap 4 styling
        var style = {
            base: {
                'lineHeight': '1.35',
                'fontSize': '1.11rem',
                'color': '#495057',
                'fontFamily': 'apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif'
            }
        };

        // Card number
        var card = elements.create('cardNumber', {
            'placeholder': '',
            'style': style
        });
        card.mount('#card-number');

        // CVC
        var cvc = elements.create('cardCvc', {
            'placeholder': '',
            'style': style
        });
        cvc.mount('#card-cvc');

        // Card expiry
        var exp = elements.create('cardExpiry', {
            'placeholder': '',
            'style': style
        });
        exp.mount('#card-exp');

        // Submit
        $('#payment-submit').on('click', function(e){
            e.preventDefault();
            var cardData = {
                'name': $('#name').val()
            };
            stripe.createToken(card, cardData).then(function(result) {
                console.log(result);
                if(result.error && result.error.message){
                    alert(result.error.message);
                }else{
                    stripeTokenHandler(result.token);
                }
            });
        });




// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);

  var hiddenInput2 = document.createElement('input');
  hiddenInput2.setAttribute('type', 'hidden');
  hiddenInput2.setAttribute('name', 'plan');
  hiddenInput2.setAttribute('value', selected_plan);
  

  form.appendChild(hiddenInput);
  form.appendChild(hiddenInput2);

  // Submit the form
  form.submit();
}
</script>


<!--<form action="<?php echo e(route('subscription-created')); ?>" method="post">-->
    
<!--    <input type="text" name="customer">-->
<!--    <input type="text" name="id">-->
<!--    <input type="text" name="current_period_end">-->
<!--    <button type="submit">submit</button>-->
<!--</form>-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/resources/views/frontend/pricing.blade.php ENDPATH**/ ?>