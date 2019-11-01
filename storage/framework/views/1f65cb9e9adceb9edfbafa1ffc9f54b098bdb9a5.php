<?php $__env->startSection('dashboard_active','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <div class="card shadow p-3">
            <div class="card-header border-0">
              <h3 class="mb-0">My Cards</h3>
            </div>
            <div class="table-responsive p-2">
              <table class="table align-items-center table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Shareable Link</th>
                    <th scope="col">Clicks</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php $count=0;
                    ?>
                    
                    <?php $__empty_1 = true; $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mycard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php $count++; ?>
                    
                    <tr class="row<?php echo e($mycard->id); ?>">
                      <td>
                          <?php echo e($count); ?>

                      </td>
                    <td>
                        <img alt="Image placeholder" src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($mycard->fb_image); ?>" width="150px">
                    </td>
                    <td>
                      <?php echo e($mycard->title); ?>

                    </td>
                    <td><span class="data_link_copy text-primary font-weight-bold" style="cursor: pointer;" data-toggle="tooltip" data-original-title="Click To Copy"><?php echo e('https://'.$_SERVER['HTTP_HOST'].'/c/'.$mycard->site.'/'.$mycard->slug); ?></span></td>
                    <td>
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
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" >
                          <a class="dropdown-item" href="<?php echo e(route('user_card',$mycard->id)); ?>">View Full</a>
                          <a class="dropdown-item text-danger del_card" data-del='<?php echo e($mycard->id); ?>' >Delete</a>
                         
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
      <div class="row mt-2">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Clicks</h2>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[<?php echo e($m1_clicks[0]->month1); ?>,<?php echo e($m2_clicks[0]->month2); ?>, <?php echo e($m3_clicks[0]->month3); ?>, <?php echo e($m4_clicks[0]->month4); ?>, <?php echo e($m5_clicks[0]->month5); ?>, <?php echo e($m6_clicks[0]->month6); ?>, <?php echo e($m7_clicks[0]->month7); ?>, <?php echo e($m8_clicks[0]->month8); ?>]}]}}" data-prefix="" data-suffix=" clicks">
                      <a href="#" style="display:none;" class="nav-link month_btn py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Month</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas chartjs-render-monitor" width="1264" height="700" style="display: block; height: 350px; width: 632px;"></canvas>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Overall Cards Clicks Worldwide</h3>
                </div>
                <!--<div class="col text-right">-->
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a>-->
                <!--</div>-->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Country Name</th>
                    <th scope="col">Visitors</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $country_clicks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myclicks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                      
                        <th scope="row">
                      <?php echo e($myclicks->country); ?>

                    </th>
                    <td>
                      <?php echo e($myclicks->clicks); ?>

                    </td>
                     
                    
                      
                     
                    
                  </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                 <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Social traffic</h3>
                </div>
                <!--<div class="col text-right">-->
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a>-->
                <!--</div>-->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    
                  <tr>
                    <th scope="col">Referral</th>
                    <th scope="col">Visitors</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $social_clicks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myclicks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <th scope="row">
                      <?php echo e($myclicks->social); ?>

                    </th>
                    <td>
                      <?php echo e($myclicks->clicks); ?>

                    </td>
                    <td>
                        <?php
                        $total_clicks = ($clicks[0]->total1)+($clicks[0]->total2)+($clicks[0]->total3)+($clicks[0]->total4)+($clicks[0]->total5);
                      ?>
                        
                      <div class="d-flex align-items-center">
                        <span class="mr-2"><?php echo e(number_format($myclicks->clicks/$total_clicks *100,2)); ?>%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="<?php echo e($myclicks->clicks/$total_clicks *100); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo e($myclicks->clicks/$total_clicks *100); ?>%;"></div>
                          </div>
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
setTimeout(function(){$(".month_btn").click();},300);


var SalesChart = (function() {

	// Variables

	var $chart = $('#chart-sales');


	// Methods

	function init($chart) {

		var salesChart = new Chart($chart, {
			type: 'line',
			options: {
				scales: {
					yAxes: [{
						gridLines: {
							color: Charts.colors.gray[900],
							zeroLineColor: Charts.colors.gray[900]
						},
						ticks: {
							callback: function(value) {
								if (!(value % 10)) {
									return '' + value + '';
								}
							}
						}
					}]
				},
				tooltips: {
					callbacks: {
						label: function(item, data) {
							var label = data.datasets[item.datasetIndex].label || '';
							var yLabel = item.yLabel;
							var content = '';

							if (data.datasets.length > 1) {
								content += '<span class="popover-body-label mr-auto">' + label + '</span>';
							}

							content += '<span class="popover-body-value">' + yLabel + ' Clicks</span>';
							return content;
						}
					}
				}
			},
			data: {
				labels: ['May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'Performance',
					data: [<?php echo e($m1_clicks[0]->month1); ?>,<?php echo e($m2_clicks[0]->month2); ?>, <?php echo e($m3_clicks[0]->month3); ?>, <?php echo e($m4_clicks[0]->month4); ?>, <?php echo e($m5_clicks[0]->month5); ?>, <?php echo e($m6_clicks[0]->month6); ?>, <?php echo e($m7_clicks[0]->month7); ?>, <?php echo e($m8_clicks[0]->month8); ?>]
				}]
			}
		});

		// Save to jQuery object

		$chart.data('chart', salesChart);

	};


	// Events

	if ($chart.length) {
		init($chart);
	}

})();

$(".data_link_copy").click(function(){


       
     var aux = document.createElement("input");

  // Assign it the value of the specified element
  aux.setAttribute("value", $(this).html());

  // Append it to the body
  document.body.appendChild(aux);

  // Highlight its content
  aux.select();

  // Copy the highlighted text
  document.execCommand("copy");

  // Remove it from the body
  document.body.removeChild(aux);
  
  $(this).attr("data-original-title","Copied!");

  Swal.fire(
  'Copied!',
  'Link Copied To The Clipboard!',
  'success'
)

});

  function myFunction(val) {
  
}

      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/public_html/asher/asher/resources/views/panel/dashboard.blade.php ENDPATH**/ ?>