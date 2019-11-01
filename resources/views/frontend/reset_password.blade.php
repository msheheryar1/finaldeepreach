<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Portfume</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    content: "Signup";
    padding-left: 15px;
    background-color: #0078ca; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "Login";
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
					
						<p class="alert alert-success forget_success">Password Has Been Reset. Now you can <a href="{{route('login')}}">login</a></p>
        	<p class="alert alert-danger forget_danger">Something is not good</p>
        

					
					<span class="login100-form-title p-b-43">
						Reset Password
					</span>
					
					
					@if(!$errors->message->isEmpty())
						<p class="alert alert-danger">Invalid Credentails</p>
						
					@endif
					<input type="hidden" class="f_email" value="{{\App\User::where('verifyToken',$token)->first()->email}}" name="">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 f_password" type="password" >
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button type="button" class="reset_btn login100-form-btn">
							Reset Password
						</button>
					</div>
					
					
				</form>
				
				
				
				
</div>
				<div class="login100-more" style="background-image: url('media/SocialMedia2.jpg');">
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
            $("title").html("Signup - Portfume");
        }
        else{
            $(".login_form").css('display','block');
            $(".signup_form").css('display','none');
            window.history.pushState('Login', 'Login', '/login');
            $("title").html("Login - Portfume");
        }
    });
    $(".reset_btn").click(function(){

    	$.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('do_forget')}}",
                  method: 'post',
                  data: {
                     email: $(".f_email").val(),
                     password: $(".f_password").val(),
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