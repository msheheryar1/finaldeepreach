@extends('frontend.layout.master')
@section('title','Contact Us - Deep Reach')
@section('content')
<br><br>
<section class="section-padding">
   <div class="container">
        <div class="row">
            
			<div class="col-md-12  mt-6">
			    
			    <h1>Contact Us</h1>
			    
			    
			    <div class="row pt-4 pb-4">
			        
			        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			            <p>
                           <b> Address:</b> str. Studenților 9/11 Chișinău, Moldova
                        </p> 
                        <p>
                           <b> Phone:</b> 92 1231230123
                        </p> 
                        
			            <p>
                            <b>Email:</b> office@deep-reach.com</b>
                        </p> 
                        
                        <form>
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" required name="name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" required name="name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Message:</label>
                                <textarea required name="name" class="form-control" rows="5">
                                    </textarea>
                            </div>
                            
                            
                            <div class="form-group text-center">
                                
                                <button class="btn mybtn-primary">Send</button>
                            </div>
                            
                            
                        </form>
                        
			        </div>
			        
			        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=str.%20Studen%C8%9Bilor%209%2F11%20Chi%C8%99in%C4%83u%2C%20Moldova&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
<!-- 20% Discount on Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
			            
			        </div>
			        

			    </div>
			    
			    
			</div>
		</div>
   </div>
</section>
<script type="text/javascript">
    
         

</script>
@endsection