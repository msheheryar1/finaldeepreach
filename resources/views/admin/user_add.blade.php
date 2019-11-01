@extends('admin.layout.master')
@section('title','Admin Profile - Deep Reach')

@section('user_add_active','active')
@section('content')
<script src="{{asset('js/dropzone.js')}}"></script>
<link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
<div class="container-fluid mt--7">
   <div class="row">
      <div class="col-xl-12">
         <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-8=">
                     <h3 class="mb-0">Add Beta User</h3>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form action="{{route('admin_user_add_do')}}" method="post">
                  @csrf
                  @if($errors->any())
                  @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
                  @endif


                  @if(session()->has('success'))
                   <p class="alert alert-success">Account Created Successfully</p>
                  
                  @endif
                  <div class="pl-lg-4">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Name</label>
                              <input type="text" id="input-username" class="form-control form-control-alternative" name="name" placeholder="Name" value="">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Email</label>
                              <input type="email" id="input-username" class="form-control form-control-alternative" name="email" placeholder="Email" value="">
                           </div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Password</label>
                              <input type="text" id="input-username" class="form-control form-control-alternative" name="password" placeholder="Password" value="">
                           </div>
                        </div>



                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">No Of Cards Allowing</label>
                              <input type="number" id="input-username" class="form-control form-control-alternative" name="cards" placeholder="No. Of Cards" value="">
                           </div>
                        </div>


                        <div class="col-lg-6">
                           <div class="form-group focused">
                              <label class="form-control-label" for="input-username">No Of Days For Beta Account</label>
                              <input type="number" id="input-username" class="form-control form-control-alternative" name="days" placeholder="No. Of Days" value="">
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
@endsection