@extends('panel.layout.master')

@section('dashboard_active','active')
@section('title',$mycard->title.' - DeepReach')
@section('content')
<div class="container-fluid mt--7">
      <div class="row">
          
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
                      <img src="{{asset('media/upload_image')}}/{{$mycard->fb_image}}" width="100%">
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  {{$mycard->title}}<span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>{{$mycard->description}}
                </div>
                <div class="h5 mt-4 text-primary">
                  <i class="ni business_briefcase-24 mr-2 text-blue" style="color:blue;"></i>{{$mycard->destination}}
                </div>
                <div class="h5 mt-4 text-primary">
                  <i class="ni business_briefcase-24 mr-2 text-info" style="color:blue;"></i>
                  @if($mycard->custom_check==0)
                  {{'https://'.$_SERVER['HTTP_HOST'].'/c/'.$mycard->site.'/'.$mycard->slug}}
                  <input type="text" style="display:none;" id="copy_link" value="{{'https://'.$_SERVER['HTTP_HOST'].'/c/'.$mycard->site.'/'.$mycard->slug}}">
                  @else
                  {{$mycard->site.'/'.$mycard->slug}}
                  <input type="text" style="display:none;" id="copy_link" value="{{$mycard->site.'/'.$mycard->slug}}">
                  @endif

                </div>
                <button id="copy_btn" class="btn mybtn-primary" onclick="myFunction()">Click To Copy</button>
                
                
                
                <hr class="my-4">
                <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{$mycard->fb_clicks}} Clicks">
                          <img alt="Image placeholder" src="{{asset('media/fb.png')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{$mycard->tw_clicks}} Clicks">
                          <img alt="Image placeholder" src="{{asset('media/twi.png')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{$mycard->lin_clicks}} Clicks">
                          <img alt="Image placeholder" src="{{asset('media/lin.png')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{$mycard->pin_clicks}} Clicks">
                          <img alt="Image placeholder" src="{{asset('media/pin.png')}}" class="rounded-circle">
                        </a>
                        
                      </div>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Traffic</h6>
                  <h2 class="mb-0">Total Clicks</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <canvas id="chart-orders" class="chart-canvas chartjs-render-monitor" width="1430" height="700" style="display: block; width: 715px; height: 350px;"></canvas>
              </div>
            </div>
          </div>
          </div> 
      <!-- Footer -->
      
    </div>
    <script>
        
var OrdersChart = (function() {

	//
	// Variables
	//

	var $chart = $('#chart-orders');
	var $ordersSelect = $('[name="ordersSelect"]');


	//
	// Methods
	//

	// Init chart
	function initChart($chart) {

		// Create chart
		var ordersChart = new Chart($chart, {
			type: 'bar',
			options: {
				scales: {
					yAxes: [{
						ticks: {
							callback: function(value) {
								if (!(value % 10)) {
									//return '$' + value + 'k'
									return value
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

							content += '<span class="popover-body-value">' + yLabel + '</span>';
							
							return content;
						}
					}
				}
			},
			data: {
				labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'Clicks',
					data: [{{$m1_clicks[0]->month1}}, {{$m2_clicks[0]->month2}}, {{$m3_clicks[0]->month3}}, {{$m4_clicks[0]->month4}}, {{$m5_clicks[0]->month5}}, {{$m6_clicks[0]->month6}}]
				}]
			}
		});

		// Save to jQuery object
		$chart.data('chart', ordersChart);
	}


	// Init chart
	if ($chart.length) {
		initChart($chart);
	}

})();
 
    function myFunction() {
       
     var aux = document.createElement("input");

  // Assign it the value of the specified element
  aux.setAttribute("value", $("#copy_link").val());

  // Append it to the body
  document.body.appendChild(aux);

  // Highlight its content
  aux.select();

  // Copy the highlighted text
  document.execCommand("copy");

  // Remove it from the body
  document.body.removeChild(aux);
  
  $("#copy_btn").html("Copied!");
  
}
    </script>
    @endsection
