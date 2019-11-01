@extends('admin.layout.master')

@section('user_active','active')
@section('title',$myuser->name.' - DeepReach')
@section('content')
<div class="container-fluid mt--7">
      <div class="row">
          
          @forelse($user_cards as $mycard)
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
                  {{'https://cards.deep-reach.com/c/'.$mycard->site.'/'.$mycard->slug}}
                  <input type="text" style="display:none;" id="copy_link" value="{{'https://cards.deep-reach.com/c/'.$mycard->site.'/'.$mycard->slug}}">
                  </div>
                
                <button id="copy_btn" class="btn mybtn-primary" onclick="myFunction('{{'https://cards.deep-reach.com/c/'.$mycard->site.'/'.$mycard->slug}}')">Click To Copy</button>
                  @else
                  {{$mycard->site.'/'.$mycard->slug}}
                  <input type="text" style="display:none;" id="copy_link" value="{{$mycard->site.'/'.$mycard->slug}}">
                  </div>
                
                <button id="copy_btn" class="btn mybtn-primary" onclick="myFunction('{{$mycard->site.'/'.$mycard->slug}}')">Click To Copy</button>
                  @endif

                
                
                
                
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
        @empty
        "no cards"
        @endforelse
        
        
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
    @endsection