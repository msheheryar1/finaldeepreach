<?php $__env->startSection('title','Users - Deep Reach'); ?>

<?php $__env->startSection('user_active','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Users <?php echo e($users->count()); ?></h3>
            </div>
            <div class="table-responsive p-2">
              <table class="table align-items-center table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Plan</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php $count=0;
                    ?>
                    
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php $count++; ?>
                    
                    <tr class="row<?php echo e($myuser->id); ?>">
                      <td>
                          <?php echo e($count); ?>

                      </td>
                    <td>
                      <?php echo e($myuser->name); ?>

                    </td>
                    
                    <td>
                      <?php echo e($myuser->email); ?>

                    </td>
                    
                    <td>
                      <?php echo e($myuser->plan); ?>

                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="<?php echo e(route('user_id',$myuser->id)); ?>">View Full</a>
                          <a class="dropdown-item text-danger del_card" data-del='<?php echo e($myuser->id); ?>' >Delete</a>
                         
                        </div>
                      </div>
                    </td>
                  </tr>
                 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    <?php endif; ?>
                  
                </tbody>
              </table>
            </div>
            <!--<div class="card-footer py-4">-->
            <!--  <nav aria-label="...">-->
            <!--    <ul class="pagination justify-content-end mb-0">-->
            <!--      <li class="page-item disabled">-->
            <!--        <a class="page-link" href="#" tabindex="-1">-->
            <!--          <i class="fas fa-angle-left"></i>-->
            <!--          <span class="sr-only">Previous</span>-->
            <!--        </a>-->
            <!--      </li>-->
            <!--      <li class="page-item active">-->
            <!--        <a class="page-link" href="#">1</a>-->
            <!--      </li>-->
            <!--      <li class="page-item">-->
            <!--        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>-->
            <!--      </li>-->
            <!--      <li class="page-item"><a class="page-link" href="#">3</a></li>-->
            <!--      <li class="page-item">-->
            <!--        <a class="page-link" href="#">-->
            <!--          <i class="fas fa-angle-right"></i>-->
            <!--          <span class="sr-only">Next</span>-->
            <!--        </a>-->
            <!--      </li>-->
            <!--    </ul>-->
            <!--  </nav>-->
            <!--</div>-->
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/deepreach/resources/views/admin/users.blade.php ENDPATH**/ ?>