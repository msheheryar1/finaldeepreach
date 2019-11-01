@extends('panel.layout.master')
@section('title','Add Domain - DeepReach')
@section('domain_active','active')
@section('content')
<style>
    #DIV_1 {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    display: flex;
    height: 302px;
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    width: 352.828px;
    column-rule-color: rgb(74, 85, 104);
    align-items: center;
    justify-content: center;
    perspective-origin: 176.406px 151px;
    transform-origin: 176.414px 151px;
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    flex-flow: column nowrap;
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
    padding: 32px;
}/*#DIV_1*/

#DIV_1:after {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    display: block;
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_1:after*/

#DIV_1:before {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    display: block;
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_1:before*/

#DIV_2 {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    height: 52px;
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    width: 130.781px;
    column-rule-color: rgb(74, 85, 104);
    perspective-origin: 65.3906px 26px;
    transform-origin: 65.3906px 26px;
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_2*/

#DIV_2:after {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_2:after*/

#DIV_2:before {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_2:before*/

#DIV_3 {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    height: 48px;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    width: 130.781px;
    column-rule-color: rgb(74, 85, 104);
    perspective-origin: 65.3906px 24px;
    transform-origin: 65.3906px 24px;
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 600 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
    padding: 0px 0px 24px;
}/*#DIV_3*/

#DIV_3:after {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 600 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_3:after*/

#DIV_3:before {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 600 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_3:before*/

#DIV_4 {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    height: 4px;
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    width: 96px;
    column-rule-color: rgb(74, 85, 104);
    perspective-origin: 48px 2px;
    transform-origin: 48px 2px;
    caret-color: rgb(74, 85, 104);
    border-top: 0px solid #0078ca;
    border-right: 0px solid #0078ca;
    border-bottom: 4px solid #0078ca;
    border-left: 0px solid #0078ca;
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 0px 16px;
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_4*/

#DIV_4:after {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_4:after*/

#DIV_4:before {
    box-sizing: border-box;
    color: rgb(74, 85, 104);
    text-decoration: none solid rgb(74, 85, 104);
    text-size-adjust: 100%;
    column-rule-color: rgb(74, 85, 104);
    caret-color: rgb(74, 85, 104);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(74, 85, 104) none 0px;
}/*#DIV_4:before*/

#DIV_5 {
    box-sizing: border-box;
    color: rgb(113, 128, 150);
    height: 128px;
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(113, 128, 150);
    text-size-adjust: 100%;
    width: 288.828px;
    column-rule-color: rgb(113, 128, 150);
    perspective-origin: 144.406px 64px;
    transform-origin: 144.414px 64px;
    caret-color: rgb(113, 128, 150);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 32px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 16px 0px 0px;
    outline: rgb(113, 128, 150) none 0px;
    padding: 0px 0px 32px;
}/*#DIV_5*/

#DIV_5:after {
    box-sizing: border-box;
    color: rgb(113, 128, 150);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(113, 128, 150);
    text-size-adjust: 100%;
    column-rule-color: rgb(113, 128, 150);
    caret-color: rgb(113, 128, 150);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 32px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(113, 128, 150) none 0px;
}/*#DIV_5:after*/

#DIV_5:before {
    box-sizing: border-box;
    color: rgb(113, 128, 150);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(113, 128, 150);
    text-size-adjust: 100%;
    column-rule-color: rgb(113, 128, 150);
    caret-color: rgb(113, 128, 150);
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 400 normal 16px / 32px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(113, 128, 150) none 0px;
}/*#DIV_5:before*/

#A_6 {
    box-sizing: border-box;
    color: #0078ca;
    display: block;
    height: 42px;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #0078ca;
    text-size-adjust: 100%;
    width: 288.828px;
    column-rule-color: #0078ca;
    perspective-origin: 144.406px 21px;
    transform-origin: 144.414px 21px;
    caret-color: #0078ca;
    background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 1px solid #0078ca;
    border-radius: 4px 4px 4px 4px;
    font: normal normal 600 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: #0078ca none 0px;
    padding: 8px 16px;
}/*#A_6*/

#A_6:after {
    box-sizing: border-box;
    color: #0078ca;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #0078ca;
    text-size-adjust: 100%;
    column-rule-color: #0078ca;
    caret-color: #0078ca;
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 600 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: #0078ca none 0px;
}/*#A_6:after*/

#A_6:before {
    box-sizing: border-box;
    color: #0078ca;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #0078ca;
    text-size-adjust: 100%;
    column-rule-color: #0078ca;
    caret-color: #0078ca;
    border: 0px solid rgb(226, 232, 240);
    font: normal normal 600 normal 16px / 24px "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: #0078ca none 0px;
}/*#A_6:before*/


</style>
<div class="container-fluid mt-3 py-4">
    <div class="row">
        <div class="col">
            
      <div class="card shadow">
          <div class="card-header bg-transparent">
              <h3 class="mb-0">1. Download Our File</h3>
            </div>
            <div class="card-body row">
                <div class="col-lg-6 col-md-6 col-sm-12" id="DIV_1">
	<div id="DIV_2">
		<div id="DIV_3">
			Using Wordpress
		</div>
		<div id="DIV_4">
		</div>
	</div>
	<div id="DIV_5">
		Download our WordPress plugin and install it on your website. We will link it with DeepReach on the next step.
	</div> <a download href="{{asset('drwp.zip')}}" class="btn mybtn-primary">Download WordPress Plugin</a>
	
	
	</div>
	
	            <div class="col-lg-6 col-md-6 col-sm-12" id="DIV_1">
	<div id="DIV_2">
		<div id="DIV_3">
			Using PHP Script
		</div>
		<div id="DIV_4">
		</div>
	</div>
	<div id="DIV_5">
	Download our dr.php script and upload it to the root folder of your website. We will link it with DeepReach on the next step.
                        
	</div> <a download href="{{asset('dr.php')}}" class="btn mybtn-primary">Download PHP Script</a>
	
	
</div>
 <!--<button style="float:right;position:relative;" class="next1 btn btn-info btn-block">Next</button>-->
            </div>
           
      </div>
      
      
        </div>
        
        
        
     
</div>

    <div class="row mt-2">
        <div class="col">
            
      <div class="card shadow">
          <div class="card-header bg-transparent">
              <h3 class="mb-0">1. Or Do It Yourself</h3>
            </div>
            <div class="card-body row">
                <div class="col-lg-12 col-md-12 col-sm-12">

<div>
   <p></p>
   
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">This process will allow you to turn any domain that you own into your own personal or brand link shortener. All you have to do is change your DNS records to have it “point” at DeepReach.</span><br></p>
   <p><span style="color: rgb(255,0,0);font-size: 15px;font-family: Roboto, sans-serif;"><strong>WARNING: If you have a website already hosted at your domain and modify your settings, you could lose access to your website! Remember, one domain can only be used for one thing – e.g. pointing to your website.</strong></span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">To connect your DNS follow these steps:</span></p>
   
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">1.) Log into your domain hosting account (HostGator, GoDaddy, InMotion, etc).</span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">2.) Navigate to DNS Settings page.</span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">3.) Delete all records associated with the domain’s root name (e.g. mydomainname.com), if there are any.</span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">4.) Add a new record for the root domain name:</span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">– Record type: <strong>CNAME</strong></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">– Hostname (or Name): @</span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">– Point to (or Address/Value): <strong>{{$_SERVER['HTTP_HOST']}}</strong></span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">Add another record to support also “www.mydomainname.com” redirection:</span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">– Record type: <strong>CNAME</strong></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">– Hostname (or Name): <strong>www</strong></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">– Point to (or Address/Value): <strong>{{$_SERVER['HTTP_HOST']}}</strong></span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;"><strong>Finally, add the last record to support any random appendages to your domain:</strong></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;"><strong>– Record type: CNAME</strong></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;"><strong>– Hostname (or Name): *</strong></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;"><strong>– Point to (or Address/Value): {{$_SERVER['HTTP_HOST']}}</strong></span><br></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">5.) Save your changes</span></p>
   <p><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;"><em>Note:</em></span><br><span style="color: rgb(51,51,51);font-size: 15px;font-family: Roboto, sans-serif;">Your domain should work almost immediately. If you’ve freed up this domains from pointing anywhere else, it may take 24 hours to work depending on your domain registrar.</span></p>
   <p></p>
</div>
                </div>
 <!--<button style="float:right;position:relative;" class="next1 btn btn-info btn-block">Next</button>-->
            </div>
           
      </div>
      
      
        </div>
        
        
        
     
</div>



<div class="row mt-5 step1" style="">
            
            
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="mb-0">2. Which Method Chosen?</h3>
                    </div>
                    <div class="card-body">
                        
                        
                            
                            <select name="method_chosen" id="method_chosen" class="form-control">
                                <option>Select a method</option>
                                <option value="1">Wordpress Plugin / PHP File</option>
                                <option value="2">DNS</option>
                            </select>
                            
                        
                 
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        


<div class="row mt-5 step2" style="display:none;">
            
            
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="mb-0">3. Verify Installation</h3>
                    </div>
                    <div class="card-body">
                        <h2>Upload the file and enter your website's URL:</h2>
                        
                            
                            
                            <input type="url" placeholder="https://my-website.com" class="form-control domain_url" name="url" required>
                            
                            <p>Complete url needed e.g. http://example.com</p>
                            
                            <p>We will try to find our dr.php file or WordPress plugin. If you need help, contact support.</p>
                        <button class="submit_website btn mybtn-primary">Connect This Website To DeepReach</button>
                 
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        

<div class="row mt-5 step3" style="display:none;">
            
            
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="mb-0">3. Enter Your Website</h3>
                    </div>
                    <div class="card-body">
                        <h2>Enter your website's URL:</h2>
                        
                            
                            <input type="url" placeholder="https://my-website.com" class="form-control domain_url2" name="url" required>
                            <p>Complete url needed e.g. http://example.com</p>
                           
                        <button class="submit_domain btn mybtn-primary">Connect This Website To DeepReach</button>
                 
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        

     
        
        
  <script>
      $(".next1").click(function(){
         $(".step2").slideDown(300);
      });
     
      $(".submit_website").click(function(){
          var myurl=$(".domain_url").val()
          if(myurl.indexOf('http://')==0 || myurl.indexOf('https://')==0){
          $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('check_domain')}}",
                  method: 'post',
                  data: {
                     url: $(".domain_url").val(),
                  },
                  success: function(data){
                    if(data == "Done"){
                        $(".submit_website").parent().append('<p class="alert alert-success">Your Domain Is Added Successfuly.</p>');
                        
                        setTimeout(function(){
                            location.href='../custom-domain';
                        },2000);
                    }
                    else if(data == 'error2'){
                        alert("Domain Already In Use");
                    }
                    else{
                        alert('Please place the dr.php file or wordpress plugin in your website\'s root directory');
                    }
                    
                    }
                    
                  });
          }
          else{
              alert("Enter A Valid URL");
          }
      });
        
          $(".submit_domain").click(function(){
              var myurl=$(".domain_url2").val()
          if(myurl.indexOf('http://')==0 || myurl.indexOf('https://')==0){
          $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('check_domain2')}}",
                  method: 'post',
                  data: {
                     url: $(".domain_url2").val(),
                  },
                  success: function(data){
                    if(data == "Done"){
                        $(".submit_domain").parent().append('<p class="alert alert-success">Your Domain Is Added Successfuly.</p>');
                        
                        setTimeout(function(){
                            location.href='../custom-domain';
                        },2000);
                    }
                    else{
                        alert("Domain Already In Use");
                    }
                    
                    
                    }
                    
                  });
          }
          else{
               alert("Enter A Valid URL");
          }
      });
      
    
      
      $("#method_chosen").change(function(){
          if($(this).val()=='1'){
              
              
         $(".step3").slideUp(3);
         $(".step2").slideDown(300);
          }
          else{
              
         $(".step2").slideUp(3);
         $(".step3").slideDown(300);
          }
          
      })
      
  </script>
   
    @endsection