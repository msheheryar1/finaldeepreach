<?php $__env->startSection('user_active','active'); ?>
<?php $__env->startSection('title',$myuser->name.' - DeepReach'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--7">
      <div class="row">
          
          <?php $__empty_1 = true; $__currentLoopData = $user_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mycard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-xl-4 mb-5 mb-xl-0 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    
                  </a>
                </div>
              </div>
            </div>
            
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                      <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($mycard->fb_image); ?>" width="100%">
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo e($mycard->title); ?><span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo e($mycard->description); ?>

                </div>
                <div class="h5 mt-4 text-primary">
                  <i class="ni business_briefcase-24 mr-2 text-blue" style="color:blue;"></i><?php echo e($mycard->destination); ?>

                </div>
                <div class="h5 mt-4 text-primary">
                  <i class="ni business_briefcase-24 mr-2 text-info" style="color:blue;"></i>
                  <?php if($mycard->custom_check==0): ?>
                  <?php echo e('http://www.portfume.com/c/'.$mycard->site.'/'.$mycard->slug); ?>

                  <input type="text" style="display:none;" id="copy_link" value="<?php echo e('http://www.portfume.com/c/'.$mycard->site.'/'.$mycard->slug); ?>">
                  </div>
                
                <button id="copy_btn" class="btn mybtn-primary" onclick="myFunction('<?php echo e('http://www.portfume.com/c/'.$mycard->site.'/'.$mycard->slug); ?>')">Click To Copy</button>
                  <?php else: ?>
                  <?php echo e($mycard->site.'/'.$mycard->slug); ?>

                  <input type="text" style="display:none;" id="copy_link" value="<?php echo e($mycard->site.'/'.$mycard->slug); ?>">
                  </div>
                
                <button id="copy_btn" class="btn mybtn-primary" onclick="myFunction('<?php echo e($mycard->site.'/'.$mycard->slug); ?>')">Click To Copy</button>
                  <?php endif; ?>

                
                
                
                
                <hr class="my-4">
                <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="<?php echo e($mycard->fb_clicks); ?> Clicks">
                          <img alt="Image placeholder" src="<?php echo e(asset('media/fb.png')); ?>" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="<?php echo e($mycard->tw_clicks); ?> Clicks">
                          <img alt="Image placeholder" src="<?php echo e(asset('media/twi.png')); ?>" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="<?php echo e($mycard->lin_clicks); ?> Clicks">
                          <img alt="Image placeholder" src="<?php echo e(asset('media/lin.png')); ?>" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="<?php echo e($mycard->pin_clicks); ?> Clicks">
                          <img alt="Image placeholder" src="<?php echo e(asset('media/pin.png')); ?>" class="rounded-circle">
                        </a>
                        
                      </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        "no cards"
        <?php endif; ?>
        
        
      <!-- Footer -->
      
    </div>
    <script>
        

 
    function myFunction(val) {
       
     var aux = document.createElement("input");

  // Assign it the value of the specified element
  aux.setAttribute("value", val);

  // Append it to the body
  document.body.appendChild(aux);

  // Highlight its content
  aux.select();

  // Copy the highlighted text
  document.execCommand("copy");

  // Remove it from the body
  document.body.removeChild(aux);
  
  
}
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/deepreach/resources/views/admin/user_id.blade.php ENDPATH**/ ?>