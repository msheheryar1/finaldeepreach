<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - DeepReach</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<meta name="_token" content="{{csrf_token()}}" />
<!--===============================================================================================-->	<!-- 
	<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/login/css/main.css')}}">
<!--===============================================================================================-->
<style>
 .onoffswitch {
    position: relative; width: 117px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    margin:0 auto;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #E3E3E3; border-radius: 36px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 16px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "Login";
    padding-left: 15px;
    background-color: #0078ca; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "Signup";
    padding-right: 15px;
    background-color: #0078ca; color: #FFFFFF;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 36px; margin: 0px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 77px;
    border: 2px solid #E3E3E3; border-radius: 36px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}
  .loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 10px 15px 10px 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}
</style>
</head>
<body style="background-color: #666666;">

<?php
$url=$_SERVER['REQUEST_URI'];

if($url=='/login'){
    echo '
<style>
    .signup_form{
        display:none;
    }
</style>';
}
else{
       echo '
<style>
    .login_form{
        display:none;
    }
</style>';
}
?>
	
	<div class="limiter">
		<div class="container-login100">
		    
			<div class="wrap-login100">
			    
			<div class="login100-form" style="padding-top:100px;">
<div class="onoffswitch" data-index='0'>
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
    <label class="onoffswitch-label myswitch" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>			

<form class="login_form" action="{{route('do_login')}}" method="post">
					{{csrf_field()}}
					
					

					
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					@if(!$errors->message->isEmpty())
						<p class="alert alert-danger">Invalid Credentails</p>
						
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" value="1" type="checkbox" name="remember">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="forgot_password txt1" data-toggle="modal" data-target="#exampleModal">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or login using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="{{route('facebook_signup')}}" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						{{-- <a href="{{route('google_signup')}}" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a> --}}
					</div>
				</form>
				
				
				
				
				<form class="signup_form" action="{{route('do_signup')}}" method="post">

					{{csrf_field()}}
					<span class="login100-form-title p-b-43">
						Sign Up
					</span>

					@if($errors->any())
						@forelse($errors->all() as $error)
						<p class="alert alert-danger">{{$error}}</p>
						@empty

						@endforelse
					@endif
					
					<div class="wrap-input100 validate-input" data-validate = "Valid name is required: John Doe">
						<input class="input100" autocomplete="name" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" autocomplete="email" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Signup
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="{{route('facebook_signup')}}" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>
{{-- 
						<a href="{{route('google_signup')}}" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a> --}}
					</div>
				</form>

				
				
</div>
				<div class="login100-more" style="background-image: url('media/SocialMedia3.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="p-3">
        	<p class="alert alert-success forget_success" style="display: none;">Resent Link Sent To Your Email</p>
        	<p class="alert alert-danger forget_danger" style="display: none;">Your Email was not found in our records.</p>
        	<div class="wrap-input100 validate-input" style="height: 50px;">
						<input class="input100 forget_email" autocomplete="name"  placeholder="Email" type="text" name="name">
						
			</div>
			<div class="container-login100-form-btn">
						<button type="button" class="reset_btn login100-form-btn">
							Send Reset Link
						</button>
					</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

	
	
<!--===============================================================================================-->
	<script src="{{asset('asset/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('asset/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('asset/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->

<script>
<?php
if($url=='/login'){
    echo "var swi=1;";
}
else{
    echo "var swi=2;";
    
}
?>

    $(".myswitch").click(function(){
       swi++;
      
        if(swi%2==0){
            $(".login_form").css('display','none');
            $(".signup_form").css('display','block');
            window.history.pushState('Signup', 'Signup', '/signup');
            $("title").html("Signup - DeepReach");
        }
        else{
            $(".login_form").css('display','block');
            $(".signup_form").css('display','none');
            window.history.pushState('Login', 'Login', '/login');
            $("title").html("Login - DeepReach");
        }
    });
    $(".reset_btn").click(function(){

    	$.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('forget_password')}}",
                  method: 'post',
                  data: {
                     email: $(".forget_email").val(),
                  },
                  success: function(data){
                    if(data == "Done"){
                        $(".forget_success").css("display",'block');
                        $(".forget_danger").css("display",'none');
                        
                    }
                    else{
                        
                        $(".forget_success").css("display",'none');
                        $(".forget_danger").css("display",'block');
                    }
                    
                    
                    }
                    
                  });
          
    });
</script>

</body>
</html>