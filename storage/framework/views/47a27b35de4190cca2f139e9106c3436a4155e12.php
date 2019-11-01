<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup - Portfume</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	<!-- 
	<link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon.ico')); ?>"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/login/css/main.css')); ?>">
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
<div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label myswitch" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>	

<form class="login_form" action="<?php echo e(route('do_login')); ?>" method="post">
					<?php echo e(csrf_field()); ?>

					
					

					
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<?php if(!$errors->message->isEmpty()): ?>
						<p class="alert alert-danger">Invalid Credentails</p>
						
					<?php endif; ?>

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
							<a href="#" class="txt1">
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
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="<?php echo e(route('facebook_signup')); ?>" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="<?php echo e(route('google_signup')); ?>" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				
				
				
				
						<form class="signup_form" action="<?php echo e(route('do_signup')); ?>" method="post">

					<?php echo e(csrf_field()); ?>

					<span class="login100-form-title p-b-43">
						Sign Up
					</span>

					<?php if($errors->any()): ?>
						<?php $__empty_1 = true; $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<p class="alert alert-danger"><?php echo e($error); ?></p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

						<?php endif; ?>
					<?php endif; ?>
					
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
						<a href="<?php echo e(route('facebook_signup')); ?>" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="<?php echo e(route('google_signup')); ?>" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				
				
</div>
				<div class="login100-more" style="background-image: url('media/SocialMedia2.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('asset/login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/vendor/daterangepicker/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('asset/login/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('asset/login/js/main.js')); ?>"></script>

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
</script>

</body>
</html><?php /**PATH /var/www/html/deepreach/resources/views/frontend/signup.blade.php ENDPATH**/ ?>