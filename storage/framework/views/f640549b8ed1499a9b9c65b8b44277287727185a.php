<?php $__env->startSection('title','Custom Domain - DeepReach'); ?>
<?php $__env->startSection('domain_active','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--7">
    <div class="row">
      <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Your Domains
              <?php if($customer->plan=='Pro' && $domains->count()<1): ?>
              <a style="float:right;" class="btn mybtn-primary" href="<?php echo e(route('add-domain')); ?>">Add Domain</a>
              <?php elseif($customer->plan=='Elite' && $domains->count()<10): ?>
              <a style="float:right;" class="btn mybtn-primary" href="<?php echo e(route('add-domain')); ?>">Add Domain</a>
              <?php else: ?>
              
              <?php endif; ?>
              </h3>
              
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Domain</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $domains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mydomains): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    
                  <tr class="row<?php echo e($mydomains->id); ?>">
                    
                    <td>
                     <?php echo e($mydomains->domain); ?>

                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Active
                      </span>
                    </td>
                    
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a data-del="<?php echo e($mydomains->id); ?>" class="dropdown-item text-danger del_domain" href="#">Delete</a>
                          
                        </div>
                      </div>
                    </td>
                  </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    <?php endif; ?>
                 
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
   </div>
   
   <script>
        
$(document).on('click','.del_domain',function(e){

 var id= $(this).attr('data-del');
 var check=confirm("Are you sure you want to delete this domain?");
 if(check){

               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "<?php echo e(route('del-domain')); ?>",
                  method: 'post',
                  data: {
                     id: id
                  },
                  success: function(data){
                    if(data == "Done"){
                    	$(".row"+id).remove();
                    
                    }
                    
                    }
                    
                  });
        


}
else{

}


});
   </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/resources/views/panel/custom_domain.blade.php ENDPATH**/ ?>