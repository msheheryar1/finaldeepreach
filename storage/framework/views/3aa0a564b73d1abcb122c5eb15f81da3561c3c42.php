<?php $__env->startSection('title','Package & Billing - DeepReach'); ?>
<?php $__env->startSection('package_active','active'); ?>
<?php $__env->startSection('content'); ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Upgrade Subscription To Elite?</h4>
          <br>
        <p>Your Previous Subscription will be cancelled and you will be charged $13.99 for the next 1 month.</p>
      </div>
      <div class="modal-footer">
        <a onclick="$('.upgrade_form').submit();" class="text-white btn btn-success">Upgrade</A>
      </div>
    </div>

  </div>
  <form class="upgrade_form" action="<?php echo e(route('upgrade')); ?>" method="post">
     <?php echo csrf_field(); ?>
  </form>
</div>
<!--Model ends-->

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Cancel Subscription?</h4>
          <br>
        <p>Your Subscription will be cancelled but you will still be subscribed till the end of current package.</p>
      </div>
      <div class="modal-footer">
        <a onclick="$('.cancel_form').submit();" class="text-white btn btn-danger">Cancel Subscription</A>
      </div>
    </div>

  </div>
  <form class="cancel_form" action="<?php echo e(route('cancel')); ?>" method="post">
     <?php echo csrf_field(); ?>
  </form>
</div>
<!--Model ends-->

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Delete Payment Method?</h4>
          <br>
        <p>Your Subscription will be cancelled by deleting the current payment method, but you will still be subscribed till the end of current package.</p>
      </div>
      <div class="modal-footer">
        <a onclick="$('.delete_form').submit();" class="text-white btn btn-danger">Delete Payment Method</A>
      </div>
    </div>

  </div>
  <form class="delete_form" action="<?php echo e(route('delete_payment')); ?>" method="post">
     <?php echo csrf_field(); ?>
  </form>
</div>
<!--Model ends-->


<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Add Payment Method</h4>
          <br>
        <div class="container-fluid">
        
        <div id="card-errors" role="alert"></div>
        <div class="card">
            <div class="card-body">
                <form id="payment-form" action="<?php echo e(route('add_payment')); ?>" method="post">
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
                            <button style="z-index: 2;" id="payment-submit" class="btn btn-info mt-1">Add Payment Method</button>
                        </span>
                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
      </div>
      
    </div>

  </div>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
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

  

  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
  </script>
</div>
<!--Model ends-->


<div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-10 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Package & Billing</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                <?php if($customer->card_remaining==0): ?>
                <p class="alert alert-danger">Your cards limit for this package has been reached!</p>
                
                <?php endif; ?>
              <form action="<?php echo e(route('account_update')); ?>" method="post">
                <?php echo csrf_field(); ?>
               
               
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Package : </label>
                        <label class="form-control-label" for="input-username"><?php echo e($customer->plan); ?> Plan </label>
                            <br>
                        <?php if($customer->plan=='Basic'): ?>
                        <a href="<?php echo e(route('pricing')); ?>" style='font-weight:bold;font-size:14px;' class="badge badge-warning">Upgrade Subscription</a> 
                        
                        <?php elseif($customer->plan=='Pro'): ?>
                        <a href="#" data-toggle="modal" data-target="#myModal" style='font-weight:bold;font-size:14px;' class="badge badge-warning">Upgrade Subscription</a> 
                            <?php if($customer->status==1): ?>
                            
                        &nbsp;&nbsp; <a href="#" data-toggle="modal" data-target="#myModal2" class="badge badge-danger">Cancel Subscription</a></label>
                        <?php else: ?>
                        <a href="#" data-toggle="modal" data-target="#myModal2" class="badge badge-warning">Unsubscribed</a>
                        <?php endif; ?>
                        
                        <?php else: ?>
                        
                        <?php if($customer->status==1): ?>
                        <a href="#" data-toggle="modal" data-target="#myModal2" class="badge badge-danger">Cancel Subscription</a></label>
                             <?php else: ?>
                        &nbsp;&nbsp; <a data-toggle="modal" data-target="#myModal2" class="badge badge-warning">Unsubscribed</a></label>
                        <?php endif; ?>
                        
                        
                        <?php endif; ?>
                        
                      </div>
                    </div>
                    <?php if($customer->plan!='Basic'): ?>
                        
                    <div class="col-lg-6">
                      <div class="form-group focused">
                          <?php if($customer->status==1): ?>
                        <label class="form-control-label" for="input-username">Days To Auto Renewal: </label>
                        <label class="form-control-label" for="input-username">
                            <?php
                            
                           $date=date_create(date("Y-m-d H:i:s", strtotime("+1 month", strtotime($customer->updated_at))));
                               $today =date_create(date('Y-m-d H:i:s'));
                               
                               $diff= $date->diff($today);
                       
                            ?>
                        <?php echo e($diff->format('%D')); ?> 
                            
                       
                        <?php endif; ?>
                      </div>
                    </div>
                        
                    <?php else: ?>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Time Remaining In Free Trial: </label>
                        <label class="form-control-label" for="input-username">
                            <?php
                            
                           $date=date_create(date("Y-m-d H:i:s", strtotime("+1 week", strtotime($customer->updated_at))));
                               $today =date_create(date('Y-m-d H:i:s'));
                               
                               $diff= $date->diff($today);
                       
                            ?>
                        <?php echo e($diff->format('%D days %h hours')); ?> 
                            
                       
                        
                      </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Cards Allowed: </label>
                        <label class="form-control-label" for="input-username">
                           <?php if($customer->plan=='Elite'): ?>
                            UNLIMITED
                           <?php else: ?>
                        <?php echo e($customer->card_limit); ?> 
                            <?php endif; ?>
                       
                        
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Cards Remaining: </label>
                        <label class="form-control-label" for="input-username">
                           
                            <?php if($customer->plan=='Elite'): ?>
                            UNLIMITED
                           <?php else: ?>
                            <?php echo e($customer->card_remaining); ?> 
                            <?php endif; ?>
                         
                            
                       
                        
                      </div>
                    </div>
                    
                    
                    <?php if($customer->customer_id!=''): ?>
                    <div class="col-lg-12">
                      <div class="form-group">
                          
                          
                        <label class="form-control-label" for="input-email">Delete Payment Method</label>
                        <label class="form-control-label" for="input-email">
                            <a href="#" data-toggle="modal" data-target="#myModal3" class="badge badge-danger">Delete Payment Method</a>
                        </label>
                        
                      </div>
                    </div>
                    
                    <?php else: ?>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Add Payment Method</label>
                        <label class="form-control-label" for="input-email">
                            <a href="#" data-toggle="modal" data-target="#myModal4" class="badge badge-success" style="font-size:14px;font-weight:bold;">Add Payment Method</a>
                        </label>
                        
                      </div>
                    </div>
                    <?php endif; ?>
                    
                  </div>
                 
              
                </div>
              </form>
            </div>
          </div>
        </div>
        
       
      </div>
      <!-- Footer -->
     

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/deepreach/resources/views/panel/package_details.blade.php ENDPATH**/ ?>