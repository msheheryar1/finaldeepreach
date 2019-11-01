<?php $__env->startSection('title','Make Card - Deep Reach'); ?>
<?php $__env->startSection('content'); ?>

 <div class="some-container">
    <pixie-editor></pixie-editor>
</div>
<div id="main_section">
   <div id="in_main_section">
      <h1>
         Increase 10% Brand Awareness From 
         <div class=""><b>Social Media</b></div>
         by Turning Your Images into clickable Social Cards!
      </h1>
      <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p class="alert alert-danger"><?php echo e($error); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
      <form action="<?php echo e(route('finish_card')); ?>" id="form" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
         <input type="hidden" id="imagebase64" name="imagebase64">
         <input type="hidden" name="site">
         <div class="upload_long">
            <div id="make_card1_btn">
                <button type="button" onClick="location.href='<?php echo e(route('home')); ?>'" ><i class="fas fa-angle-left"></i> &nbsp;&nbsp;&nbsp;&nbsp;Back </button>
               
            </div>
            <div class="make_card1">
               <div id="make_card1">
                  <input type="text" required class="title" name="title" placeholder="Enter Your Title">
               </div>
               <div id="make_card1">
                  <input type="text" required class="description" name="description" placeholder="Enter Your Description">
               </div>
            </div>
         </div>
         
         <div class="upload_long row">
            <div class="make_card1">
               <div id="make_card1">
                  <input type="text" required name="destination" class="destination" placeholder="Enter Destination URL">
               </div>
               <div id="make_card1">
                  <select class="card_size_select" name="card_size">
                     <option>Select Card Size</option>
                     <option value="small">Small Card</option>
                     <option value="large" selected>Large Card</option>
                  </select>
               </div>
            </div>
            
            <?php if($domains==[]): ?>
            <div id="make_card1_btn">
               <button type="submit" name="" class="upload-result">Finish &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-right"></i></button>
            </div>
            <?php endif; ?>
            
         </div>
         
         <?php if($domains!=[]): ?>
         
             <div class="upload_long row py-0">
            <div class="make_card1">
               <div id="make_card1" style="background:transparent;font-size:22px;border:none;">
                   
                  <input type="checkbox" style="width:20px;position:relative;top:12px;" class="destination" placeholder="Enter Destination URL" class="custom_check" id="custom_domain">
                  <label class="custom_check" for="custom_domain" style="font-size:20px;color:white;">Show Custom Domain</label>
               </div>
               <div id="make_card1" class="domain_dropdown" style="display:none;">
                  <select class="card_size_select" name="custom_domain">
                      <option value="">Select a domain</option>
                     <?php $__empty_1 = true; $__currentLoopData = $domains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mydomain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($mydomain->domain); ?>"><?php echo e($mydomain->domain); ?></option>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                     <?php endif; ?>
                     
                  </select>
               </div>
            </div>
            
            <div id="make_card1_btn">
               <input type="submit" name="" class="upload-result" value="Finish  >">
            </div>
         </div> 
         <?php endif; ?>
         
        
         
      </form>
      
      
   </div>
   
</div>

<div id="main_body" class="row">
    
    <?php if($customer!=''): ?>
        <?php if($customer->plan!='Basic'): ?>
    <div class="main_div1 col-lg-12 text-center">
        
         <button id="button" class="btn mybtn-primary text-white">Edit Picture</button>
    </div>
        <?php endif; ?>
    <?php endif; ?>
    
    
   <div class="main_div1 col-lg-6 col-md-12 col-sm-12 col-12">
      <h2>Popular <b class="">Social Media</b> Images at One Place</h2>
      <div class="socials_main_div">
         <i class="socials fb_click fa fa-facebook social_active"></i>
         <i class="socials twitter_click fab fa-twitter"></i>
         <i class="socials linkedin_click fab fa-linkedin-in"></i>
         <i class="socials pinterest_click fab fa-pinterest-p"></i>
         <i class="socials slack_click fab fa-slack-hash"></i>
      </div>
   </div>
   <style type="text/css">
      #page {
      }
      #demo-basic {
      width: ;
      height: 276px;
      }
      #demo-basic2 {
      width: ;
      height: 285px;
      }
      #demo-basic3 {
      width: ;
      height: 295px;
      }
      #demo-basic4 {
      width: ;
      height: 125px;
      }
      #demo-basic5 {
      width: ;
      height: 180px;
      }
      #demo-basic6 {
      width: 150px;
      height: 150px;
      }
      #demo-basic7 {
      width: 100px;
      height: 100px;
      }
      #demo-basic8 {
      width: 100px;
      height: 80px;
      }
      #demo-basic9 {
      width: ;
      height: 125px;
      }
      #demo-basic10 {
      width: 100px;
      height: 100px;
      }
   </style>
   <div class="main_div2 large_card col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
      <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
      <div class="slider">
         <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
         <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
         <div class="slider_main">
            <div class="your-class">
               <div class="social_cards">
                  <div id="page">
                     <div id="demo-basic">
                     </div>
                  </div>
                  <div id="card_det" class="fb_card">
                     <a href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p><span class="fb_description">Your description</span><span class="continue_dots" style="display: none;">...</span></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
                  <!-- 						<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-1 row ml-0" style="z-index: 0;">
                     <div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right"></div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left"><i class="fas fa-search-plus"></i></div>
                     </div> -->
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards">
                  <div id="page">
                     <div id="demo-basic2">
                     </div>
                  </div>
                  <div id="card_det" style="" class="fb_card">
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p style="
                        word-wrap: break-word;
                        overflow: hidden;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;"><span class="fb_description">Your description</span><span class="continue_dots" style="display: none;">...</span></p>
                     <a style="" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
                  <!-- 						<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-1 row ml-0" style="z-index: 0;">
                     <div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right"></div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left"><i class="fas fa-search-plus"></i></div>
                     </div> -->
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards">
                  <div id="page">
                     <div id="demo-basic3">
                     </div>
                  </div>
                  <div id="card_det" style="" class="fb_card">
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <a style="" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards pt-5">
                  <div id="page">
                     <div id="demo-basic4">
                     </div>
                  </div>
                  <div id="card_det" style="margin:0 auto;" class="fb_card">
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span><span style="float: right;font-weight: bold;font-size: 14px;margin-top: -5px;"> ...</span></h6>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards mt-5">
                  <div id="card_det" style="margin:0 auto;" class="fb_card">
                     <h6><span class="fb_title" style="color:#1264a3;font-family: 'Lato', sans-serif;font-weight: 500;">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p style="
                        word-wrap: break-word;
                        overflow: hidden;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;"><span class="fb_description">Your description</span><span class="continue_dots" style="display: none;">...</span></p>
                  </div>
                  <div id="page">
                     <div id="demo-basic5">
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="main_div2 small_card col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
      <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
      <div class="slider">
         <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
         <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
         <div class="slider_main">
            <div class="your-class mt-6">
               <div class="social_cards">
                  <div id="page" style="width: 150px;height: 150px;float: left;">
                     <div id="demo-basic6">
                     </div>
                  </div>
                  <div id="card_det2" class="fb_card">
                     
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p><span class="fb_description">Your description</span><span class="continue_dots" style="display: none;">...</span></p>
                     <a style="margin-top: 55px;float: left;" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
                  <!-- 						<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-1 row ml-0" style="z-index: 0;">
                     <div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right"></div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left"><i class="fas fa-search-plus"></i></div>
                     </div> -->
               </div>
            </div>
             <div class="your-class mt-6">
               <div class="social_cards" style="">
                  <div id="page" style="width: 100px;height: 100px;float: left;">
                     <div id="demo-basic7">
                     </div>
                  </div>
                  <div id="card_det2" style="height: 100px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;" class="fb_card">
                     
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p class="my-0"><span class="fb_description">Your description</span><span class="continue_dots" style="display: none;">...</span></p>
                     <a style="text-transform: lowercase;" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
                  <!-- 						<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-1 row ml-0" style="z-index: 0;">
                     <div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right"></div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left"><i class="fas fa-search-plus"></i></div>
                     </div> -->
               </div>
            </div>

             <div class="your-class mt-6">
               <div class="social_cards" style="">
                  
                  <div id="card_det2" style="overflow:visible;width:500px;height: 120px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;" class="fb_card">
                  	<div id="page" style="width: 100px;float: left;margin-right: 10px;">
                     <div id="demo-basic8">
                     </div>
                  </div>
                     
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     
                     <a style="text-transform: lowercase;" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
                  <!-- 						<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-1 row ml-0" style="z-index: 0;">
                     <div class="col-lg-8 col-md-8 col-sm-8 col-8 text-right"></div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left"><i class="fas fa-search-plus"></i></div>
                     </div> -->
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards pt-5">
                  <div id="page">
                     <div id="demo-basic9">
                     </div>
                  </div>
                  <div id="card_det" style="margin:0 auto;" class="fb_card">
                     <h6><span class="fb_title">Your title</span><span class="continue_dots" style="display: none;">...</span><span style="float: right;font-weight: bold;font-size: 14px;margin-top: -5px;"> ...</span></h6>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;"><i class="fas fa-search-plus"></i></div>
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards mt-5">
                  <div id="card_det2" style="height:100px;background:none;margin:0 auto;float: left;" class="fb_card">
                     <h6><span class="fb_title" style="color:#1264a3;font-family: 'Lato', sans-serif;font-weight: 500;">Your title</span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p style="
                        word-wrap: break-word;
                        overflow: hidden;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;"><span class="fb_description">Your description</span><span class="continue_dots" style="display: none;">...</span></p>
                  </div>
                  <div id="page" style="float: left;">
                     <div id="demo-basic10">
                     </div>
                  </div>
                  <div class="row" style="width: 100%;float: left;height: 1px;"></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right py-1" style="float: left;"><i class="fas fa-search-minus"></i></div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-left py-1" style="float: right;margin-right: 20px;"><i class="fas fa-search-plus"></i></div>
                
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(function() {
     var basic = $('#demo-basic').croppie({
       viewport: {
         width: 492,
         height: 276
       },
        boundary: {
               width: 492,
               height: 276
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   
   
   
   $(function() {
     var basic = $('#demo-basic2').croppie({
       viewport: {
         width: 510,
         height: 285
       },
        boundary: {
               width: 510,
               height: 285
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic2').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   
   
   
   $(function() {
     var basic = $('#demo-basic3').croppie({
       viewport: {
         width: 520,
         height: 295
       },
        boundary: {
               width: 520,
               height: 295
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic3').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   
   
   $(function() {
     var basic = $('#demo-basic4').croppie({
       viewport: {
         width: 240,
         height: 125
       },
        boundary: {
               width: 240,
               height: 125
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic4').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   
   
   
   
   $(function() {
     var basic = $('#demo-basic5').croppie({
       viewport: {
         width: 360,
         height: 180
       },
        boundary: {
               width: 360,
               height: 180
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic5').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   
   

   
   
   $(function() {
     var basic = $('#demo-basic6').croppie({
       viewport: {
         width: 150,
         height: 150
       },
        boundary: {
               width: 150,
               height: 150
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic6').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   
   
   $(function() {
     var basic = $('#demo-basic7').croppie({
       viewport: {
         width: 100,
         height: 100
       },
        boundary: {
               width: 100,
               height: 100
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic7').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   


   $(function() {
     var basic = $('#demo-basic8').croppie({
       viewport: {
         width: 100,
         height: 100
       },
        boundary: {
               width: 100,
               height: 100
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic8').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   




   $(function() {
     var basic = $('#demo-basic9').croppie({
       viewport: {
         width: 240,
         height: 125
       },
        boundary: {
               width: 240,
               height: 125
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic9').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   


   
   $(function() {
     var basic = $('#demo-basic10').croppie({
       viewport: {
         width: 100,
         height: 100
       },
        boundary: {
               width: 100,
               height: 100
           },
     });
     basic.croppie('bind', {
       url: '<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>',
     
     });
   $('#form').on('submit', function (ev) {
           
           $(".loader_message").html("Uploading..."); 
            $(".loader").css("display","block"); 
       });
       
   
   
   
   $('#demo-basic10').on('update.croppie', function(ev, cropData) {
   	 basic.croppie('result', {
               type: 'canvas',
               size: 'original'
           }).then(function (resp) {
               $('#imagebase64').val(resp);
               
           });
   });
   
   
   });
   


   setTimeout(function(){
   
   $(".cr-slider-wrap").eq(0).css('margin-top','110px');
   $(".cr-slider-wrap").eq(1).css('margin-top','110px');
   $(".cr-slider-wrap").eq(2).css('margin-top','80px');
   $(".cr-slider-wrap").eq(3).css('margin-top','60px');
   $(".cr-slider-wrap").eq(4).css('margin-top','10px');
   $(".cr-boundary").eq(4).css('border-radius','12px');
   $(".cr-viewport").eq(4).css('border-radius','12px');

   $(".cr-slider-wrap").eq(5).css('margin-top','10px').css('width','500px');
	$(".cr-slider-wrap").eq(6).css('margin-top','10px').css('width','500px');
	   $(".cr-boundary").eq(6).css('border-top-left-radius','6px').css('border-bottom-left-radius','6px');
	   $(".cr-viewport").eq(6).css('border-top-left-radius','6px').css('border-bottom-left-radius','6px');
	$(".cr-slider-wrap").eq(7).css('margin-top','10px').css('width','500px');
		$(".cr-slider-wrap").eq(8).css('margin-top','60px');

   $(".cr-slider-wrap").eq(9).css('margin-top','10px').css('width','500px').css("margin-left","-350px");
   $(".cr-boundary").eq(9).css('border-radius','12px');
   $(".cr-viewport").eq(9).css('border-radius','12px');
  
   },500);
   
   
   function WordCount(str) { 
     return str.split(" ").length;
   }
   
   $(".title").keyup(function(){
   
   	if($(this).val().length <= 115){
   
   		$(".fb_title").next().css('display','none');
   	$(".fb_title").html($(this).val());
   	}
   	else{
   		$(".fb_title").next().css('display','inline-block');
   
   	}
   
   
   
   let height=$(".fb_card").eq(0).height();
   let height2=$(".fb_card").eq(1).height();
   let height3=$(".fb_card").eq(2).height();
   let height4=$(".fb_card").eq(3).height();
   let height5=$(".fb_card").eq(4).height();
   
   
   $(".cr-slider-wrap").eq(0).css('margin-top',(height+30)+'px');
   
   $(".cr-slider-wrap").eq(1).css('margin-top',(height2+30)+'px');
   
   $(".cr-slider-wrap").eq(2).css('margin-top',(height3+30)+'px');
   
   $(".cr-slider-wrap").eq(3).css('margin-top',(height4+30)+'px');
   
   
   
   
   
   });
   
   $(".description").keyup(function(){
   
       if($(this).val().length <= 140){
   
           $(".fb_description").next().css('display','none');
           $(".fb_description").html($(this).val());
       }
       else{
           $(".fb_description").next().css('display','inline-block');
   
       }
   
   
   
   let height=$(".fb_card").eq(0).height();
   let height2=$(".fb_card").eq(1).height();
   let height3=$(".fb_card").eq(2).height();
   let height4=$(".fb_card").eq(3).height();
   let height5=$(".fb_card").eq(4).height();
   
   
   $(".cr-slider-wrap").eq(0).css('margin-top',(height+30)+'px');
   
   $(".cr-slider-wrap").eq(1).css('margin-top',(height2+30)+'px');
   
   $(".cr-slider-wrap").eq(2).css('margin-top',(height3+30)+'px');
   
   $(".cr-slider-wrap").eq(3).css('margin-top',(height4+30)+'px');
   
   
   
   
   });
   $(".destination").keyup(function(){
   
       let url = $(this).val();
       let if_com = url.indexOf('http://');
   
   
       if(if_com==0){
   
           url = url.substr(7);
       }
       else{
   
           if_com = url.indexOf('https://');
   
           if(if_com==0){
   
               url = url.substr(8);
           }
   
       }
   
       let if_www = url.indexOf('www.');
   
       if(if_www>=0){
   
           url = url.substr(4);
       }
   
       let if_dotcom = url.indexOf('.com');
       if(if_dotcom>=0){
   
           url = url.substring(0,if_dotcom);
   
       }
   
   
   $("input[name='site']").val(url);
   
       $(".fb_destination").html(url+".");
   
   
   });
   
   $(".card_size_select").change(function(){

   			if($(this).val()=='small'){
   	
   				$(".small_card").css("display","block");
   				$(".large_card").css("display","none");
   			
   			}
   			else{
   				$(".large_card").css("display","block");
   				$(".small_card").css("display","none");
   			}
   });
   
   $("#custom_domain").change(function(){
      if(this.checked){
          $(".domain_dropdown").css("display",'block');
      } 
      else{
          $(".domain_dropdown").css("display",'none');
      }
       
   });
</script>

<script>
 var pixie = new Pixie({
        ui: {
            visible: false,
            openImageDialog: false,
            mode: 'overlay',
            theme: 'dark',
        },
        onSave: function(data, name) {
            
            pixie.close();
             
     $('#demo-basic').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic2').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic3').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic4').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic5').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic6').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic7').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic8').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic9').croppie('bind', {
       url: data,
     
     });
     $('#demo-basic10').croppie('bind', {
       url: data,
     
     });
     $('#imagebase64').val(data);
            
            
        },
        
    });
   
    //open pixie on button click
    document.querySelector('#button').addEventListener('click', function() {
        pixie.openEditorWithImage("<?php echo e(asset('media/upload_image')); ?>/<?php echo e(session('image_name')); ?>");
    });
    
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/deepreach/resources/views/frontend/makeCard.blade.php ENDPATH**/ ?>