<?php $__env->startSection('content'); ?>


<link href="<?php echo e(asset('css/dropzone2.css')); ?>" rel="stylesheet">
<style>
   .box
   {
   font-size: 1.25rem; /* 20 */
   background-color: transparent;
   position: relative;
   padding: 50px 20px;
   padding-bottom: 0px;
   margin-bottom: 0;
   }
   .box.has-advanced-upload
   {
   outline-offset: -10px;
   -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
   transition: outline-offset .15s ease-in-out, background-color .15s linear;
   }
   .box.is-dragover
   {
   outline-offset: -20px;
   outline-color: #c8dadf;
   background-color: #fff;
   z-index: 10;
   }
   .box__dragndrop,
   .box__icon
   {
   display: none;
   }
   .box.has-advanced-upload .box__dragndrop
   {
   display: inline;
   }
   .box.has-advanced-upload .box__icon
   {
   width: 100%;
   height: 80px;
   fill: #92b0b3;
   display: block;
   margin-bottom: 0px;
   }
   .box.is-uploading .box__input,
   .box.is-success .box__input,
   .box.is-error .box__input
   {
   visibility: hidden;
   }
   .box__uploading,
   .box__success,
   .box__error
   {
   display: none;
   }
   .box.is-uploading .box__uploading,
   .box.is-success .box__success,
   .box.is-error .box__error
   {
   display: block;
   position: absolute;
   top: 50%;
   right: 0;
   left: 0;
   -webkit-transform: translateY( -50% );
   transform: translateY( -50% );
   }
   .box__uploading
   {
   font-style: italic;
   }
   .box__success
   {
   -webkit-animation: appear-from-inside .25s ease-in-out;
   animation: appear-from-inside .25s ease-in-out;
   }
   @-webkit-keyframes appear-from-inside
   {
   from	{ -webkit-transform: translateY( -50% ) scale( 0 ); }
   75%		{ -webkit-transform: translateY( -50% ) scale( 1.1 ); }
   to		{ -webkit-transform: translateY( -50% ) scale( 1 ); }
   }
   @keyframes  appear-from-inside
   {
   from	{ transform: translateY( -50% ) scale( 0 ); }
   75%		{ transform: translateY( -50% ) scale( 1.1 ); }
   to		{ transform: translateY( -50% ) scale( 1 ); }
   }
   .box__restart
   {
   font-weight: 700;
   }
   .box__restart:focus,
   .box__restart:hover
   {
   color: #39bfd3;
   }
   .js .box__file
   {
   width: 0.1px;
   height: 0.1px;
   opacity: 0;
   overflow: hidden;
   position: absolute;
   z-index: -1;
   }
   .js .box__file + label
   {
   max-width: 80%;
   text-overflow: ellipsis;
   white-space: nowrap;
   cursor: pointer;
   display: inline-block;
   overflow: hidden;
   }
   .js .box__file + label:hover strong,
   .box__file:focus + label strong,
   .box__file.has-focus + label strong
   {
   color: #39bfd3;
   }
   .js .box__file:focus + label,
   .js .box__file.has-focus + label
   {
   outline: 1px dotted #000;
   outline: -webkit-focus-ring-color auto 5px;
   }
   .js .box__file + label *
   {
   /* pointer-events: none; */ /* in case of FastClick lib use */
   }
   .no-js .box__file + label
   {
   display: none;
   }
   .no-js .box__button
   {
   display: block;
   }
   .box__button
   {
   font-weight: 700;
   color: #e5edf1;
   background-color: #39bfd3;
   display: none;
   padding: 8px 16px;
   margin: 40px auto 0;
   }
   .box__button:hover,
   .box__button:focus
   {
   background-color: #0f3c4b;
   }
</style>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<style type="text/css">
   @font-face {
   font-weight: 400;
   font-style:  normal;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Regular.woff2') format('woff2');
   }
   @font-face {
   font-weight: 400;
   font-style:  italic;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Italic.woff2') format('woff2');
   }
   @font-face {
   font-weight: 500;
   font-style:  normal;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Medium.woff2') format('woff2');
   }
   @font-face {
   font-weight: 500;
   font-style:  italic;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-MediumItalic.woff2') format('woff2');
   }
   @font-face {
   font-weight: 700;
   font-style:  normal;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Bold.woff2') format('woff2');
   }
   @font-face {
   font-weight: 700;
   font-style:  italic;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BoldItalic.woff2') format('woff2');
   }
   @font-face {
   font-weight: 900;
   font-style:  normal;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Black.woff2') format('woff2');
   }
   @font-face {
   font-weight: 900;
   font-style:  italic;
   font-family: 'Inter-Loom';
   src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BlackItalic.woff2') format('woff2');
   }
</style>
<div id="main_section">
   <div id="in_main_section">
		<h1>Increase 10% Brand Awareness From <div class=""><b>Social Media</b></div> by Turning Your Images into clickable Social Cards!</h1>

<div class="upload_long row">
	<form action="<?php echo e(route('image_upload_url')); ?>" class="image_url_form" method="post" style="width: 100%">
		<?php echo csrf_field(); ?>
	<div id="input_url">
		<input type="url" name="url" placeholder="Enter Image Url">
	</div>
	<div id="input_url_btn">
		<input type="submit" name="" value="Next">
	</div>
	</form>
</div>




<div id="drop_here_main" class="row">
	<div id="drop_here">
	    <form action="<?php echo e(route('image_upload_drop')); ?>" method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="dropzonewidget">
                  <?php echo csrf_field(); ?>
                 
               <div class="dz-default dz-message"><span><img src="<?php echo e(asset('media/drop.png')); ?>" width="80px">
		&nbsp;
		<h4>Drop Image Here</h4></span></div></form>
		
	</div>
	<div id="or">or</div>
	<div id="upload_here">
	    
		<input type="button" class="upload_image_btn" name="" value="Upload">
	</div>
</div>
<form style="display:none;" id="image_upload_form" enctype="multipart/form-data" action="<?php echo e(route('image_upload')); ?>" method="post">
    
    <?php echo csrf_field(); ?>
    <input type="file" id="upload_image_input" name="image"/>
</form>


	</div>
   
</div>

<script>
   
   
   $(".upload_image_btn").click(function(){
       
      $("#upload_image_input").click(); 
   });
   $("#upload_image_input").change(function(){
      $("#image_upload_form").submit(); 
        $(".loader").css("display","block"); 
   });
   $(".image_url_form").submit(function(){
      $(".loader").css("display","block"); 
       
   });
   
   
   
   
</script>
<div id="main_body" style="padding-top:20px;" class="row">
    <h2 class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">How It Works?</h2>

    <div class="main_div2 col-lg-6 mt-4 col-md-12 col-sm-12 col-12">
      <div id="static_slide2" class="row">
         <h4>Importance Of Social Cards</h4>
         <p><img src="<?php echo e(asset('media/cards.png')); ?>" width="350px"></p>
      </div>
   </div>
   <div class="main_div1 mt-4 col-lg-6 col-md-12 col-sm-12 col-12">
      
      <p>Social Cards are fun and easy to create.  They have the capacity to increase your business sales and awareness. Create social cards in just a few seconds with our app. The process is based on 3 simple steps shared below:</p>
      <p><img src="<?php echo e(asset('media/icon-1.png')); ?>" width="40px"> &nbsp; <b>Upload Your Image</b></p>
      <p><img src="<?php echo e(asset('media/icon-2.png')); ?>" width="40px"> &nbsp; <b>Write Title & Description</b></p>
      <p><img src="<?php echo e(asset('media/icon-3.png')); ?>" width="40px"> &nbsp; <b>Share it on Social Media!</b></p>
   </div>
   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wnaezmgawim0/public_html/resources/views/frontend/index.blade.php ENDPATH**/ ?>