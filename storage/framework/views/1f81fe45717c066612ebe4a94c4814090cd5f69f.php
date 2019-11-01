<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AnyImage</title>
    <meta name="description" content="Get random quotes over your photos personalized for your social media and personal branding."/>

<meta name="_token" content="<?php echo e(csrf_token()); ?>" />

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/mysheet2.css')); ?>" id="theme-color">
     <link rel="stylesheet" href="<?php echo e(asset('asset/css/cards-gallery.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/mysheet.css')); ?>" id="theme-color">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">



<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/slick/slick.css')); ?>"/>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/slick/slick-theme.css')); ?>"/>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="<?php echo e(asset('asset/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/myscript.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/FileSaver.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/canvas-toBlob.js')); ?>"></script>

 -->
<!-- <script type="text/javascript" src="https://raw.githubusercontent.com/jseidelin/exif-js/master/exif.js"></script>
 --> <link href="<?php echo e(asset('dropzone/dropzone.css')); ?>" rel="stylesheet" type="text/css">
 <script src="<?php echo e(asset('dropzone/dropzone.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('asset/js/myscript.js')); ?>" type="text/javascript"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<link rel="stylesheet" href="<?php echo e(asset('asset/croppie.css')); ?>" />
<script src="<?php echo e(asset('asset/croppie.js')); ?>"></script>

</head>
<body>
<style>
    .lds-hourglass {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  margin:0 auto;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 6px auto;
  box-sizing: border-box;
  border: 26px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes  lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
.loader_message{
    color:white;
    width:100%;
    text-align:center;
    font-weight:bold;
    font-style:italic;
    text-shadow:0.5px 0.5px 2px #1B93F3;
    font-size:22px;
}
</style>

<div class="loader" style="display:none;width:100%;height:100%;position:fixed;top:0;left:0;padding:20% 0;text-align:center;background:rgba(0,0,0,0.8);z-index:10;">
<div class="lds-hourglass" style="margin:0 auto;"></div>
<div class="animated flash infinite slower loader_message">Computing... </div>
    
</div>


<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand heading-black" href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('media/logo.png')); ?>" width="200px">
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
               <i class="fas fa-ellipsis-h"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              
                <ul class="navbar-nav ml-auto">
                   
                    
                   
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo e(route('pricing')); ?>">Pricing</a>
                    </li>
                    <?php if(Auth::user()): ?>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" onclick="$('#logout').submit();" href="#">Logout</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-btn page-scroll" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                    </li>
                    
                    <form id="logout" action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                    </form>

                    <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo e(route('login')); ?>">Log in</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link nav-link-btn page-scroll" href="<?php echo e(route('signup')); ?>">Free Sign up</a>
                    </li>
                    

                    <?php endif; ?>
                    
                   
                    
                </ul>
              
             
         
  <!-- Modal -->

  
                
        
      
      



            </div>
        </nav>
    
    </div>
</section>




  
  
<?php echo $__env->yieldContent('content'); ?>

<!--footer-->


  
<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mr-auto">
                <h5><img src="<?php echo e(asset('media/logo.png')); ?>" width="200px"></h5>
                <br>
                <p class="">AnyImage add random quotes on your photos and make it personalized for your social media personal branding.</p>
                <ul class="list-inline social social-rounded social-sm">
                    <li class="list-inline-item">
                        <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href=""><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Products</h5>
                <ul class="list-unstyled">
                  <li><a href="">Login / Sign Up</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Create Card</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Information</h5>
                <ul class="list-unstyled">
                      <li><a href="">FAQ</a></li>
                    <li><a href="">Live Chat</a></li>
                    <li><a href="">Contact Us</a></li>
                  
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Contact Details</h5>
                <ul class="list-unstyled">
                     <li><a href="">Infographic</a></a></li>
                      <li><a href="">Terms Of Use</a></a></li>
                    <li><a href="">Privacy Policy</a></li>
                   
                </ul>
            </div>
        </div>
        
    </div>
    <hr>
        <div class="container mt-1 footer_last">
            <div class="col-12  text-left text-white small-xl ">&copy; AnyImage Copyrights 2019
            </div>
        </div>
</footer>

<!--scroll to top-->




</body>

</html><?php /**PATH D:\sheheryar\resources\views/frontend/layout/master.blade.php ENDPATH**/ ?>