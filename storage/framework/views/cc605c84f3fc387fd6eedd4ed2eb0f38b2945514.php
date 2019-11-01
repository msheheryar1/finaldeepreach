<?php $__env->startSection('title','Admin Profile - Deep Reach'); ?>

<?php $__env->startSection('profile_active','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/dropzone.js')); ?>"></script>
<link href="<?php echo e(asset('css/dropzone.css')); ?>" rel="stylesheet">
<div class="container-fluid mt--7">
   <div class="row">
      <div class="col-xl-8">
         <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-8=">
                     <h3 class="mb-0">My account</h3>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form action="<?php echo e(route('account_update')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php if($errors->any()): ?>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <p class="alert alert-danger"><?php echo e($error); ?></p>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Name</label>
                              <input type="text" id="input-username" class="form-control form-control-alternative" name="name" placeholder="Username" value="<?php echo e(Auth::user()->name); ?>">
                           </div>
                        </div>
                        <?php if(Auth::user()->facebook_id=='' && Auth::user()->google_id==''): ?>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="input-email">Email address</label>
                              <input type="email" id="input-email" class="form-control form-control-alternative" name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="jesse@example.com">
                           </div>
                        </div>
                        <?php endif; ?>
                     </div>
                     <button class="btn mybtn-primary">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      <div class="col-xl-4">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                      <?php if(Auth::user()->img!=''): ?>
                  <img alt="Image placeholder" src="<?php echo e(asset('media/user_image')); ?>/<?php echo e(Auth::user()->img); ?>" class="rounded-circle">
                  <?php else: ?>
                  <img alt="Image placeholder" src="<?php echo e(asset('media/person.png')); ?>" class="rounded-circle">
                  <?php endif; ?>
                    
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <br><br>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              
              <div class="text-center">
                <h3>
                 Profile Pic
                </h3>
                <form action="<?php echo e(route('user-img')); ?>" method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="dropzonewidget">
                  <?php echo csrf_field(); ?>
               <div class="dz-default dz-message"><span>Drop your new photo here!</span></div></form>
              </div>
            </div>
          </div>
        </div>
        <?php if(Auth::user()->facebook_id=='' && Auth::user()->google_id==''): ?>
      <div class="col-xl-8 mt-3">
         <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h3 class="mb-0">Change Password</h3>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form action="<?php echo e(route('password_change')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-first-name">New Password</label>
                              <input type="password" id="input-first-name" class="form-control form-control-alternative" name="password">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-last-name">Confirm Password</label>
                              <input type="password" id="input-last-name" class="form-control form-control-alternative" name="password_confirmation">
                           </div>
                        </div>
                     </div>
                     <button class="btn mybtn-primary" type="submit">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <?php endif; ?>
   
   <!-- Footer -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_august\getdata-master\deepreach2\resources\views/admin/profile.blade.php ENDPATH**/ ?>