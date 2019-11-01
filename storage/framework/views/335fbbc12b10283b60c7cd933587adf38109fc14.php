<?php $__env->startSection('title','Card Completed - Deep Reach'); ?>
<?php $__env->startSection('content'); ?>


<div id="main_section">
	<div id="in_main_section">
		<h1><div class=""><b>It's Complete!</b></div> Now Share it With your Target Audience on Social Media</h1>

<div class="upload_long row" >
	<div id="input_url">
	    <?php
	    if($card!=[]){
	    if($card->custom_check==0){
	    $url = 'https://'.$_SERVER['HTTP_HOST'].'/c/'.$card->site.'/'.$card->slug;
	    $url2 = 'https://'.$_SERVER['HTTP_HOST'].'/c/'.$card->site.'/'.$card->slug;
	    $lin_url=urlencode($url);
	       
	    }
	    
	    else{
	        $url = $card->site.'/dr.php?card='.$card->slug;
	    $url2 = $card->site.'/dr.php?card='.$card->slug;
	      $lin_url=urlencode($url);
	   
	    }
	    }
	     ?>
	    <?php if($card!=[]): ?>
		<input type="url" id="copy_this_link" name="" value="<?php echo e($url); ?>">
		<?php else: ?>
		<h4>abc</h4>
		<?php endif; ?>
	</div>
	<div id="input_url_btn">
		<input type="button" name=""  onclick="myFunction()" value="Copy">
	</div>
</div>
<div id="fb-root"></div>
 <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  
  
  
  </script>



  <?php if($card!=[]): ?>
<div class="row  my-0 mt-3" style="margin:0;">
	<div class="col-lg-12 col-12 text-center text-white">
		<b class="text-white">Share It </b>
			&nbsp;&nbsp;&nbsp;
	
			
		<i  class="fa fa-facebook social_share" onClick='window.open("https://www.facebook.com/sharer/sharer.php?u=<?php echo e($url); ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=200,height=200");'  style="background-color:#3b5998"></i>
		<i class="fab fa-twitter social_share" onClick='window.open("http://twitter.com/share?url=<?php echo e($url2); ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=600,height=600");' style="background-color:#38A1F3;"></i>
		
		<!--https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fportfume.justsharedthis.info%2Fkvkxdb%3Fnetwork%3Dlinkedin&title=&summary=-->
		
		
		<i class="fab fa-linkedin-in social_share"  onClick='window.open("http://www.linkedin.com/shareArticle?mini=true&url=<?php echo e($lin_url); ?>&title=&summary=&source=", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=600,height=600");' style="background-color:#0077B5;"></i>
	
		<i class="fab fa-pinterest social_share" onClick='window.open("http://pinterest.com/pin/create/button/?url=<?php echo e($url); ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=600,height=600");' style="background-color:#c8232c;"></i>
		
			<!--<i class="fab fa-slack-hash social_share" onClick='window.open("http://pinterest.com/pin/create/button/?url=<?php echo e($url); ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=600,height=600");' style="background-color:#000000;"></i>-->
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-white text-center">

	<br>
		<b>or</b>
		
	</div>
</div>
<?php endif; ?>
<div class="row text-center my-0" style="margin:0;">

	<div class="new_btn">
		<br>
	<div id="new_btn1">
		<button type="button" onClick="location.href='<?php echo e(route('home')); ?>'" name="">Create New Card &nbsp;<i class="fas fa-magic"></i></button>
	</div>
	<div id="new_btn2">
		<button type="button" onClick="location.href='<?php echo e(route('make-card')); ?>'" name="">Create Similar Card &nbsp;<i class="far fa-copy"></i></button>
	</div>
</div>


</div>


	</div>
	
</div>



  <?php if($card!=[]): ?>
<div id="main_body" class="row">
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
<?php if($card->card_size=='large'): ?>
 <div class="main_div2 large_card col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
      <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
      <div class="slider">
         <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
         <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
         <div class="slider_main">
            <div class="your-class">
               <div class="social_cards">
                  <div id="static_slide" style="height: 276px;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det" class="fb_card">
                     <a href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p><span class="fb_description"><?php echo e($card->description); ?></span><span class="continue_dots" style="display: none;">...</span></p>
                  </div>
                  
                  
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards">
                  <div id="static_slide" style="height: 285px;width:510px;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det" style="" class="fb_card">
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p style="
                        word-wrap: break-word;
                        overflow: hidden;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;"><span class="fb_description"><?php echo e($card->description); ?></span><span class="continue_dots" style="display: none;">...</span></p>
                     <a style="" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards">
                  <div id="static_slide" style="height: 295px;width:520px;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det" style="" class="fb_card">
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <a style="" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                  
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards pt-5">
                  <div id="static_slide" style="height: 125px;width:240px;margin:0 auto;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det" style="margin:0 auto;" class="fb_card">
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span><span style="float: right;font-weight: bold;font-size: 14px;margin-top: -5px;"> ...</span></h6>
                  </div>
                 
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards mt-5">
                  <div id="card_det" style="margin:0 auto;" class="fb_card">
                     <h6><span class="fb_title" style="color:#1264a3;font-family: 'Lato', sans-serif;font-weight: 500;"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p style="
                        word-wrap: break-word;
                        overflow: hidden;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;"><span class="fb_description"><?php echo e($card->description); ?></span><span class="continue_dots" style="display: none;">...</span></p>
                  </div>
                  <div id="static_slide" style="height: 180px;width:360px;margin:0 auto;border-radius:10px;overflow:hidden;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>





<?php else: ?>
<style>
    .small_card{
        display:block;
    }
</style>
 <div class="main_div2 small_card col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
      <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
      <div class="slider">
         <div class="arrows arrow_left"><i class="fas fa-chevron-left"></i></div>
         <div class="arrows arrow_right"><i class="fas fa-chevron-right"></i></div>
         <div class="slider_main">
            <div class="your-class mt-5">
               <div class="social_cards row bg-white">
                  <div id="static_slide" style="height: 150px;width:150px;float:left;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det2" class="fb_card" style="float:left;height:100%;">
                     
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p><span class="fb_description"><?php echo e($card->description); ?></span><span class="continue_dots" style="display: none;">...</span></p>
                     <a style="margin-top: 55px;float: left;" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
                 
               </div>
            </div>
             <div class="your-class mt-5">
               <div class="social_cards row bg-white" style="">
                  <div id="static_slide" style="height: 120px;width:120px;float:left;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det2" style="height: 100%;border-top-right-radius: 6px;border-bottom-right-radius: 6px;" class="fb_card">
                     
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p class="my-0"><span class="fb_description"><?php echo e($card->description); ?></span><span class="continue_dots" style="display: none;">...</span></p>
                     <a style="text-transform: lowercase;" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
               </div>
            </div>

             <div class="your-class mt-5">
               <div class="social_cards row bg-white" style="">
                  
                  <div id="card_det2" style="float:left;overflow:visible;width:500px;height:auto;border-top-right-radius: 6px;border-bottom-right-radius: 6px;" class="fb_card">
                  	 <div id="static_slide" style="height: 100px;width:100px;float:left;margin-right:10px;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                     
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     
                     <a style="text-transform: lowercase;" href=""><span class="fb_destination" style="display:none;"></span><?php echo e($_SERVER['HTTP_HOST']); ?></a>
                  </div>
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards pt-5">
                  <div id="static_slide" style="height: 125px;width:240px;margin:0 auto;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  <div id="card_det" style="margin:0 auto;" class="fb_card">
                     <h6><span class="fb_title"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span><span style="float: right;font-weight: bold;font-size: 14px;margin-top: -5px;"> ...</span></h6>
                  </div>
                  
               </div>
            </div>
            <div class="your-class">
               <div class="social_cards mt-5" style="width:500px;">
                  <div id="card_det2" style="border:none;border-left:2px solid rgba(0,0,0,.1);;height:100px;background:none;margin:0 auto;float: left;" class="fb_card">
                     <h6><span class="fb_title" style="color:#1264a3;font-family: 'Lato', sans-serif;font-weight: 500;"><?php echo e($card->title); ?></span><span class="continue_dots" style="display: none;">...</span></h6>
                     <p style="
                        word-wrap: break-word;
                        overflow: hidden;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;"><span class="fb_description"><?php echo e($card->description); ?></span><span class="continue_dots" style="display: none;">...</span></p>
                  </div>
                  <div id="static_slide" style="border-radius:6px;overflow:hidden;height: 100px;width:100px;float:right;">
			        <img src="<?php echo e(asset('media/upload_image')); ?>/<?php echo e($card->fb_image); ?>" width="100%" height="100%"> 

		            </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>

<?php endif; ?>

<?php endif; ?>

	
	
</div>

<script>
    function myFunction() {
  var copyText = document.getElementById("copy_this_link");
  copyText.select();
  document.execCommand("copy");
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/public_html/asher/asher/resources/views/frontend/card_completed.blade.php ENDPATH**/ ?>