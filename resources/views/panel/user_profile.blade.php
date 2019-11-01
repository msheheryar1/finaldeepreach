@extends('panel.layout.master')
@section('title','Profile - Deep Reach')

@section('profile_active','active')
@section('content')
<script src="{{asset('js/dropzone.js')}}"></script>
<link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
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
               <form action="{{route('account_update')}}" method="post">
                  @csrf
                  @if($errors->any())
                  @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
                  @endif
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Name</label>
                              <input type="text" id="input-username" class="form-control form-control-alternative" name="name" placeholder="Username" value="{{Auth::user()->name}}">
                           </div>
                        </div>
                        @if(Auth::user()->facebook_id=='' && Auth::user()->google_id=='')
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="form-control-label" for="input-email">Email address</label>
                              <input type="email" id="input-email" class="form-control form-control-alternative" name="email" value="{{Auth::user()->email}}" placeholder="jesse@example.com">
                           </div>
                        </div>
                        @endif
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
                      @if(Auth::user()->img!='')
                  <img alt="Image placeholder" src="{{asset('media/user_image')}}/{{Auth::user()->img}}" class="rounded-circle">
                  @else
                  <img alt="Image placeholder" src="{{asset('media/person.png')}}" class="rounded-circle">
                  @endif
                    
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
                <form action="{{route('user-img')}}" method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="dropzonewidget">
                  @csrf
               <div class="dz-default dz-message"><span>Drop your new photo here!</span></div></form>
              </div>
            </div>
          </div>
        </div>
        @if(Auth::user()->facebook_id=='' && Auth::user()->google_id=='')
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
               <form action="{{route('password_change')}}" method="post">
                  @csrf
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
      @endif
   
   <!-- Footer -->
</div>
@endsection