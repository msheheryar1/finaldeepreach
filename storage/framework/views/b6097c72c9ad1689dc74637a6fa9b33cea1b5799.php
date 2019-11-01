<?php $__env->startSection('content'); ?>
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
		<h1>Increase 10% Brand Awareness From <div class="animated infinite bounce"><b>Facebook</b></div> by Turning Your Images into clickable Social Cards!</h1>

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
		<img src="http://portfume.com/media/drop.png" width="80px">
		&nbsp;
		<h4>Drop Image Here</h4>
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
   'use strict';
   
   ;( function ( document, window, index )
   {
   	// feature detection for drag&drop upload
   	var isAdvancedUpload = function()
   		{
   			var div = document.createElement( 'div' );
   			return ( ( 'draggable' in div ) || ( 'ondragstart' in div && 'ondrop' in div ) ) && 'FormData' in window && 'FileReader' in window;
   		}();
   
   
   	// applying the effect for every form
   	var forms = document.querySelectorAll( '.box' );
   	Array.prototype.forEach.call( forms, function( form )
   	{
   		var input		 = form.querySelector( 'input[type="file"]' ),
   			label		 = form.querySelector( 'label' ),
   			errorMsg	 = form.querySelector( '.box__error span' ),
   			restart		 = form.querySelectorAll( '.box__restart' ),
   			droppedFiles = false,
   			showFiles	 = function( files )
   			{
   				label.textContent = files.length > 1 ? ( input.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', files.length ) : files[ 0 ].name;
   			},
   			triggerFormSubmit = function()
   			{
   				var event = document.createEvent( 'HTMLEvents' );
   				event.initEvent( 'submit', true, false );
   				form.dispatchEvent( event );
   			};
   
   		// letting the server side to know we are going to make an Ajax request
   		var ajaxFlag = document.createElement( 'input' );
   		ajaxFlag.setAttribute( 'type', 'hidden' );
   		ajaxFlag.setAttribute( 'name', 'ajax' );
   		ajaxFlag.setAttribute( 'value', 1 );
   		form.appendChild( ajaxFlag );
   
   		// automatically submit the form on file select
   		input.addEventListener( 'change', function( e )
   		{
   			showFiles( e.target.files );
   
   			
   			triggerFormSubmit();
   
   			
   		});
   
   		// drag&drop files if the feature is available
   		if( isAdvancedUpload )
   		{
   			form.classList.add( 'has-advanced-upload' ); // letting the CSS part to know drag&drop is supported by the browser
   
   			[ 'drag', 'dragstart', 'dragend', 'dragover', 'dragenter', 'dragleave', 'drop' ].forEach( function( event )
   			{
   				form.addEventListener( event, function( e )
   				{
   					// preventing the unwanted behaviours
   					e.preventDefault();
   					e.stopPropagation();
   				});
   			});
   			[ 'dragover', 'dragenter' ].forEach( function( event )
   			{
   				form.addEventListener( event, function()
   				{
   					form.classList.add( 'is-dragover' );
   				});
   			});
   			[ 'dragleave', 'dragend', 'drop' ].forEach( function( event )
   			{
   				form.addEventListener( event, function()
   				{
   					form.classList.remove( 'is-dragover' );
   				});
   			});
   			form.addEventListener( 'drop', function( e )
   			{
   				droppedFiles = e.dataTransfer.files; // the files that were dropped
   				showFiles( droppedFiles );
   
   				
   				triggerFormSubmit();
   
   								});
   		}
   
   
   		// if the form was submitted
   		form.addEventListener( 'submit', function( e )
   		{
   			// preventing the duplicate submissions if the current one is in progress
   			if( form.classList.contains( 'is-uploading' ) ) return false;
   
   			form.classList.add( 'is-uploading' );
   			form.classList.remove( 'is-error' );
   
   			if( isAdvancedUpload ) // ajax file upload for modern browsers
   			{
   				e.preventDefault();
   
   				// gathering the form data
   				var ajaxData = new FormData( form );
   				if( droppedFiles )
   				{
   					Array.prototype.forEach.call( droppedFiles, function( file )
   					{
   						ajaxData.append( input.getAttribute( 'name' ), file );
   					});
   				}
   
   				// ajax request
   				var ajax = new XMLHttpRequest();
   				ajax.open( form.getAttribute( 'method' ), form.getAttribute( 'action' ), true );
   
   				ajax.onload = function()
   				{
   					form.classList.remove( 'is-uploading' );
   					if( ajax.status >= 200 && ajax.status < 400 )
   					{
   						var data = JSON.parse( ajax.responseText );
   						form.classList.add( data.success == true ? 'is-success' : 'is-error' );
   						if( !data.success ) errorMsg.textContent = data.error;
   					}
   					else alert( 'Error. Please, contact the webmaster!' );
   				};
   
   				ajax.onerror = function()
   				{
   					form.classList.remove( 'is-uploading' );
   					alert( 'Error. Please, try again!' );
   				};
   
   				ajax.send( ajaxData );
   			}
   			else // fallback Ajax solution upload for older browsers
   			{
   				var iframeName	= 'uploadiframe' + new Date().getTime(),
   					iframe		= document.createElement( 'iframe' );
   
   					$iframe		= $( '<iframe name="' + iframeName + '" style="display: none;"></iframe>' );
   
   				iframe.setAttribute( 'name', iframeName );
   				iframe.style.display = 'none';
   
   				document.body.appendChild( iframe );
   				form.setAttribute( 'target', iframeName );
   
   				iframe.addEventListener( 'load', function()
   				{
   					var data = JSON.parse( iframe.contentDocument.body.innerHTML );
   					form.classList.remove( 'is-uploading' )
   					form.classList.add( data.success == true ? 'is-success' : 'is-error' )
   					form.removeAttribute( 'target' );
   					if( !data.success ) errorMsg.textContent = data.error;
   					iframe.parentNode.removeChild( iframe );
   				});
   			}
   		});
   
   
   		// restart the form if has a state of error/success
   		Array.prototype.forEach.call( restart, function( entry )
   		{
   			entry.addEventListener( 'click', function( e )
   			{
   				e.preventDefault();
   				form.classList.remove( 'is-error', 'is-success' );
   				input.click();
   			});
   		});
   
   		// Firefox focus bug fix for file input
   		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
   		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
   
   	});
   }( document, window, 0 ));
   
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
<div id="main_body" class="row">
   <div class="main_div1 col-lg-6 col-md-12 col-sm-12 col-12">
      <h2>Popular <b class="animated slower bounceIn infinite">Social Media</b> Images at One Place</h2>
      <div class="socials_main_div">
         <i class="socials fa fa-facebook"></i>
         <i class="socials fab fa-twitter"></i>
         <i class="socials fab fa-linkedin-in"></i>
         <i class="socials fab fa-google-plus-g"></i>
      </div>
   </div>
   <div class="main_div2 col-lg-6 col-md-12 col-sm-12 col-12">
      <div id="static_slide">
         <h4>Image Preview</h4>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sheheryar\resources\views/frontend/index.blade.php ENDPATH**/ ?>