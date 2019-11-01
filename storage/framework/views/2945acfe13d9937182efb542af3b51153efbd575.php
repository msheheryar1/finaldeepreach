
<?php $__env->startSection('title','Admin Profile - Deep Reach'); ?>

<?php $__env->startSection('coupon_active','active'); ?>
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/dropzone.js')); ?>"></script>
<link href="<?php echo e(asset('css/dropzone.css')); ?>" rel="stylesheet">
<div class="container-fluid mt--7">
   <div class="row">
      <div class="col-xl-12">
         <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-8=">
                     <h3 class="mb-0">Add Coupon</h3>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form action="<?php echo e(route('admin_coupon_add_do')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php if($errors->any()): ?>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <p class="alert alert-danger"><?php echo e($error); ?></p>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>


                  <?php if(session()->has('success')): ?>
                   <p class="alert alert-success">Coupon Created Successfully</p>
                  
                  <?php endif; ?>
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Coupon Code</label>
                              <input type="text" id="input-username" class="form-control form-control-alternative" name="code" placeholder="Code" value="">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Last Date</label>
                              <input type="date" id="input-username" class="form-control form-control-alternative" name="last_date" placeholder="Last Date" value="">
                           </div>
                        </div> 

                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Percent Off</label>
                              <input type="number" id="input-username" class="form-control form-control-alternative" name="percent" placeholder="Percent Off" step="0.05" value="">
                           </div>
                        </div>


                       
                     </div>
                     <button class="btn mybtn-primary">Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
 
        
   
   <!-- Footer -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/public_html/asher/asher/resources/views/admin/coupon_add.blade.php ENDPATH**/ ?>