<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  
<meta name="_token" content="<?php echo e(csrf_token()); ?>" />
  <title><?php echo $__env->yieldContent('title','Dashboard - DeepReach'); ?></title>
  <!-- Favicon -->
  <link href="<?php echo e(asset('media/icon.png')); ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('panel/assets/vendor/nucleo/css/nucleo.css')); ?>" rel="stylesheet">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo e(asset('panel/assets/css/argon.css?v=1.0.0')); ?>" rel="stylesheet">
  
  
    <link type="text/css" href="<?php echo e(asset('panel/assets/datatable/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo e(asset('panel/assets/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo e(asset('panel/assets/datatable/select.bootstrap4.min.css')); ?>" rel="stylesheet">
  
  
   <script src="<?php echo e(asset('panel/assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('panel/assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('panel/assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  
  <script src="<?php echo e(asset('panel/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo e(asset('panel/assets/js/argon.js?v=1.0.0')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  </head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?php echo e(route('home')); ?>">
        <img src="<?php echo e(asset('media/logo2.png')); ?>"  class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                  <?php if(Auth::user()->img!=''): ?>
                  <img alt="Image placeholder" src="<?php echo e(asset('media/user_image')); ?>/<?php echo e(Auth::user()->img); ?>">
                  <?php else: ?>
                  <img alt="Image placeholder" src="<?php echo e(asset('media/person.png')); ?>">
                  <?php endif; ?>
                
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="<?php echo e(route('user_profile')); ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
             
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item" onclick="$('#logout').submit();">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
          </div>
        </li>
      </ul>
      
            <form id="logout" action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                    </form>
                    
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="<?php echo e(asset('panel/assets/img/brand/blue.png')); ?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
       
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo $__env->yieldContent('dashboard_active'); ?>" href="<?php echo e(route('dashboard')); ?>">
              <i class="ni ni-tv-2 text-blue"></i> Dashboard
            </a>
          </li>
          <?php if($customer->plan!='Basic'): ?>
          <li class="nav-item">
            <a class="nav-link <?php echo $__env->yieldContent('domain_active'); ?>" href="<?php echo e(route('custom-domain')); ?>">
              <i class="fas fa-globe-americas text-blue"></i> Domains
            </a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link <?php echo $__env->yieldContent('package_active'); ?>" href="<?php echo e(route('package-details')); ?>">
              <i class="fas fa-file-invoice-dollar text-blue"></i> Package & Billing Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $__env->yieldContent('profile_active'); ?>" href="<?php echo e(route('user_profile')); ?>">
              <i class="ni ni-single-02 text-blue"></i> Profile
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                    <?php if(Auth::user()->img!=''): ?>
                  <img alt="Image placeholder" src="<?php echo e(asset('media/user_image')); ?>/<?php echo e(Auth::user()->img); ?>">
                  <?php else: ?>
                  <img alt="Image placeholder" src="<?php echo e(asset('media/person.png')); ?>">
                  <?php endif; ?>
                  
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo e(Auth::user()->name); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="<?php echo e(route('user_profile')); ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
             
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item" onclick="$('#logout').submit();">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Cards</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo e($cards->count()); ?></span>
                    </div>
                
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-list-ol"></i>
                      </div>
                    </div>
                  </div>
                  
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-level-up-alt"></i> Since You Registered</span>
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Clicks</h5>
                      <?php
                        $total_clicks = ($clicks[0]->total1)+($clicks[0]->total2)+($clicks[0]->total3)+($clicks[0]->total4)+($clicks[0]->total5);
                      ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo e($total_clicks); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-up"></i> Since</span>
                    <span class="text-nowrap"> <?php echo e(date_format(date_create(Auth::user()->created_at),'jS M, Y')); ?></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Avg Clicks</h5>
                      <span class="h2 font-weight-bold mb-0"><?php 
                      if($cards->count()!=0){
                       echo intval($total_clicks / $cards->count());
                      }
                      else{
                        echo '0';
                      } ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-up"></i> Since</span>
                    <span class="text-nowrap"><?php echo e(date_format(date_create(Auth::user()->created_at),'jS M, Y')); ?></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Cards Remaining</h5>
                      <span class="h2 font-weight-bold mb-0">
                          <?php if($customer->plan=='Elite'): ?>
                          UNLIMITED
                          <?php else: ?>
                          <?php echo e($customer->card_remaining); ?>

                          <?php endif; ?>
                          </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap">In Your Monthly Package</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <?php echo $__env->yieldContent('content'); ?>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="<?php echo e(route('home')); ?>" class="font-weight-bold ml-1" target="_blank">Deep Reach</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              
              <li class="nav-item">
                <a href="<?php echo e(route('contact')); ?>" class="nav-link" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('privacy')); ?>" class="nav-link" target="_blank">Privacy Policy</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('terms')); ?>" class="nav-link" target="_blank">Terms</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
 
  <script src="<?php echo e(asset('panel/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('panel/assets/js/argon2.js?v=1.0.0')); ?>"></script>
     <script src="<?php echo e(asset('panel/assets/datatable/dataTables.select.min.js')); ?>"></script>
     <script src="<?php echo e(asset('panel/assets/datatable/jquery.dataTables.min.js')); ?>"></script>
     <script src="<?php echo e(asset('panel/assets/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
     <script src="<?php echo e(asset('panel/assets/datatable/dataTables.buttons.min.js')); ?>"></script>
      <script src="<?php echo e(asset('panel/assets/js/argon3.js?v=1.0.0')); ?>"></script>
  
</body>

</html><?php /**PATH E:\laravel_september\finaldeepreach\resources\views/panel/layout/master.blade.php ENDPATH**/ ?>