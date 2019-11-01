<?php $__env->startSection('title','Domains - Deep Reach'); ?>

<?php $__env->startSection('domain_active','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Custom Domains <?php echo e($domain->count()); ?></h3>
            </div>
            <div class="table-responsive p-2">
              <table class="table align-items-center table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Domain</th>
                    <th scope="col">User</th>
                    <!--<th scope="col"></th>-->
                  </tr>
                </thead>
                <tbody>
                    <?php $count=0;
                    ?>
                    
                    <?php $__empty_1 = true; $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mydomain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php $count++; ?>
                    
                    <tr class="row<?php echo e($mydomain->id); ?>">
                      <td>
                          <?php echo e($count); ?>

                      </td>
                    <td>
                      <?php echo e($mydomain->domain); ?>

                    </td>
                    
                    <td>
                      <?php echo e($mydomain->email); ?>

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
      
$(document).on('click','.del_card',function(e){

 var id= $(this).attr('data-del');
 var check=confirm("Are you sure you want to delete this card?");
 if(check){

               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "<?php echo e(route('delete-card')); ?>",
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/resources/views/admin/domains.blade.php ENDPATH**/ ?>