<style>
body {font-family: 'Montserrat', sans-serif; background-color:#e1e9f7;}
#register .nav-tabs {font-family: 'Quicksand', sans-serif; border: none; margin: 0 auto 35px; width:62%;}
#register {background-color: #3463b9; padding:5% 10%; margin:50px auto; box-shadow:0px 5px 30px -5px;}
#register .r-btn button {border: none; border-radius: 50%; background-color: #5c85d4; color: #fff; font-size: 32px; width: 60px; height: 60px; margin-top: 35px;}
#register #home .box {height: 46px;
    border: none;
    border-radius: 8px;
    width: 60%;
    margin: 3px auto; background-color: #5c85d4; color: #fff;}
#register .nav-tabs .active a {background: none; border: none; color: #fff;}
#register .nav-tabs a {color: #bfbfbf;}
#register .nav-tabs .n-right {float:right;}
#register input::placeholder {color:#fff;}
#register select {color:#fff;}
#menu1 {margin-top: 50px;}
#menu1 label {text-align:left; color:#fff;}
#menu1 .box-2 {height: 46px; border: none; border-radius: 8px; background-color: #5c85d4; margin: 3px 0; color: #fff;}
#menu1 ..half-check {width: 50%; float:left;}
#menu1 .form-submit {color: #000;
    background-color: #fece36;
    font-size: 18px;
    font-weight: 600;
    margin-top: 20px;
    border: none;
    border-radius: 8px;
    height: 46px;
    padding: 12px;
    width: 200px;}

     .navbar {margin:0; border-radius:0; height:175px; background-image:url(<?Php echo base_url()."assets/newfrontpage/"; ?>nav-back.png); padding:20px; border:none; box-shadow:1px -2px 17px 1px; border-top:4px solid #ffcc00;}
.navbar .navbar-right {background-color: hsl(0deg 0% 3% / 60%); border-radius: 10px; margin-top: 38px;}
.navbar-inverse .navbar-nav>.active>a {background:none;}
.navbar-inverse .navbar-nav a {color:#fff !important; font-weight: 600; padding: 10px 25px;}
.navbar-inverse .dropdown-menu {background-color: hsl(225deg 8% 19% / 80%);}
.navbar-inverse .dropdown-menu li:hover a {background-color:#000;}
#myNavbar {border: none !important;}

#footer {background-image: url(<?Php echo base_url()."assets/newfrontpage/"; ?>foot-back.png); color: #fff; background-repeat: no-repeat; background-size: cover;}
#footer .btn-pre-foot {background-color: #4276cf;}
#footer .search-box {height: 32px; border: none; border-radius: 50px; width: 145px; padding-left: 15px;}
#footer .pre-foot {padding: 30px;}
#footer .foot-content {background-color: rgb(0 0 0 / 34%); padding: 17px;}
#footer .foot-content a {color:#fff;}
#footer .foot-content h2 {font-size: 26px; font-weight: 600; margin-bottom: 20px;}
#footer .foot-content .contact .social i {    font-size: 32px; margin-right: 10px;}
#footer .foot-content .btn-donate {color: #000;}
#footer .foot-content .fa-key {font-size: 40px; margin-top: 50px;}
#footer .copy-right {background: #19191b; padding: 18px;}
#footer .copy-right .btn-up {background-color:#4276cf;}


#firstnamemsg ,#lastnamemsg , #positionmsg{color: cyan;  }
/***********responsive*************/

@media (max-width: 1024px){
  a.navbar-brand {width: 75%;}
  .navbar-brand>img { display: block; width: 80%;}
  .navbar .navbar-right{margin-top: 0px !important;}
}
@media (max-width: 767px){
  .navbar .navbar-right {width: 60%;position: relative;left: 52%;background-color: hsl(0deg 0% 3% / 92%);z-index: 1;}
  .navbar-brand>img { display: block; width: 60% !important;}
  #footer .btn-pre-foot {padding: 8px 5px;font-size: 12px;margin: 10px auto; display: block;}
  #register .nav-tabs{width: 100%;}
  .nav-tabs>li{text-align: center; float: none !important;}
  #register .nav-tabs .n-right {float: none !important; text-align: center !important;}
  #register #home .box {width: 100%;}
  #firstnamemsg ,#lastnamemsg ,#positionmsg{margin-left:inherit !important;text-align: center !important;}
  #footer .search-box {margin: 10px auto; display: block;}
}
/************************/
.rc-anchor-error-msg-container{margin-top: 10px !important;}
.rc-anchor-error-msg-container{font-size: 11.48px !important;}
</style>
<div class="navigation"></div>
<div class="container" id="register">
	<?php if($this->session->flashdata('register_errormsg')){?>
        <div class="alert alert-danger" role="alert" style="height: 55px;padding: 0;">
        	<a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-right: 8px;">&times;</a>
            <?php echo $this->session->flashdata('register_errormsg'); ?>
        </div>
    <?php }?>

    <!--  <ul class="nav nav-tabs">
	     <li  class="active"><a id="home_tab" data-toggle="tab" href="#home">YOUR INFORMATION</a></li>
		 <li  class="n-right"><a id="Society_tab" class="society_tab" data-toggle="tab" href="#menu1">SOCIETY INFORMATION</a></li>
	 </ul> -->
	 <center><h3 style="color: white">ORGANISATION INFORMATION</h3></center>

	 <form method="post" id="directory_form" action="<?php echo base_url()."directory/register-insert"; ?>">	

		 <div id="menu1" class="tab-pane">
		   <!--   <form class="form-horizontal" action="/action_page.php"> -->
		   	 	 <div class="form-group">
				     <label class="control-label col-sm-4">Organisation Name <span style="color: red">*</span></label>
					 <div class="col-sm-8">
					     <input  type="text" name="orgname" class="form-control box-2 orgname">
					 </div>
				 </div> 
				 <div class="form-group">
				     <label class="control-label col-sm-4">Organisation Email <span style="color: red">*</span></label>
					 <div class="col-sm-8">
					     <input type="email" name="orgemail" class="form-control box-2 orgemail">
					 </div>
				 </div> 
				 <div class="form-group">
				     <label class="control-label col-sm-4">Organisation Url</label>
					 <div class="col-sm-8">
					     <input type="text" name="orgurl" class="form-control box-2 orgurl">
					 </div>
				 </div>
			    
				
				<div class="form-group">
				     <label class="control-label col-sm-4">Continent</label>
					 <div class="col-sm-8">
					     <select name="continent" class="form-control box-2 continent" id="sel1">
						    <option value="0">Select continent</option>
							<?php
							 if (isset($continent)) {
							 	
								foreach ($continent as $key => $value) {
									echo "<option value=".$value['id'].">".$value['continent_name']."</option>";
								}
							}
							?>
						 </select>
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Country</label>
					 <div class="col-sm-8">
					     <select name="country" class="form-control box-2 country" id="sel1">
						 
						 </select>
					 </div>
				 </div>
				 <div class="form-group state1">
				     <label class="control-label col-sm-4">State/Province</label>
					 <div class="col-sm-8">
					     <select name="state" class="form-control box-2 state" id="sel1">
						  
						 </select>
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Street Name + Number</label>
					 <div class="col-sm-8">
					     <input type="text" name="streetname" class="form-control box-2 streetname">
					 </div>
				 </div>
				
				 <div class="form-group">
				     <label class="control-label col-sm-4">Zip/Postal code</label>
					 <div class="col-sm-8">
					     <input type="text" name="zip" class="zip form-control box-2">
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">City</label>
					 <div class="col-sm-8">
					     <input type="text" name="city" class="form-control box-2 city">
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Focus</label>
					 <div class="col-sm-8">
					     <div class="half-check">
						     <div class="checkbox">
							     <label><input type="checkbox"  name="col23" class="wildlife">Wildlife </label>
							 </div>
							  <div class="checkbox">
							     <label><input type="checkbox"  name="col21" class="Environment">Environment </label>
							 </div>
							  <div class="checkbox">
							     <label><input type="checkbox"  name="col22" class="Diet">Diet/Food </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col30" class="equineprotection">Equine Protection </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col32" class="primateprotection">Primate Protection  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col34" class="fur">Fur  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col37" class="experimentation">Experimentation </label>
							 </div>
						 </div>
					     <div class="half-check">
						     <div class="checkbox">
							     <label><input type="checkbox"  name="col29" class="petprotection">Pet Protection </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col31" class="birdprotection">Bird Protection </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col33" class="marineanimal">Marine Animal Protection  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col35" class="farmanimal">Farm Animal  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col38" class="animalinentertainment">Animals in Entertainment </label>
							 </div>
						 </div>
					 </div>
				 </div>
				  <div class="form-group">
				     <label class="control-label col-sm-4"></label>
					 <div class="col-sm-8">
					     <div class="half-check">
						     <div class="checkbox">
							     <label><input type="checkbox"  name="col40" class="shelter">Shelter </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col44" class="petadoption">Pet Adoption </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col47" class="humaneeducation">Humane Education</label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col53" class="sanctuary">Sanctuary  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  name="col54" class="wildliferehabilitation">Wildlife Rehabilitation </label>
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Geographic Work Area</label>
					 <div class="col-sm-8">
					     <select name="geographic" class="form-control box-2 geographic" id="Geographic">
						  	<option selected="selected" value="0">Please select </option>
							<?php
							 if (isset($workarea)) {
							 	
								foreach ($workarea as $key => $value) {
									echo "<option value=".$value['id'].">".$value['name']."</option>";
								}
							}
							?>
						 </select>
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Facebook</label>
					 <div class="col-sm-8">
					     <input type="text" name="facebook"  class="form-control box-2 facebook">
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Comments</label>
					 <div class="col-sm-8">
						 <textarea name="comments" class="form-control box-2 comments" rows="5" id="comment"></textarea>
					 </div>
				 </div>
<!--				  <div class="form-group">
				     <label class="control-label col-sm-4">Notes</label>
					 <div class="col-sm-8">
						 <textarea  name="notes"class="form-control box-2 notes" rows="5" id="comment"></textarea>
					 </div>
				 </div>                                      -->
<!--				   <div class="form-group">
				     <label class="control-label col-sm-4">Affiliate with WFA</label>
					 <div class="col-sm-8">
						 <input type="checkbox" name="affiliate" class=" box-2 affiliate">
					 </div>                  
					 
				 </div>   -->
				     
					
				 <div class="form-group">
				     <label class="control-label col-sm-4">Password <span style="color: red">*</span></label>
					 <div class="col-sm-8">
					     <input type="password"  name="password" class="form-control box-2 password">
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Verify Password <span style="color: red">*</span></label>
					 <div class="col-sm-8">
					     <input type="password" name="confirmpassword" class="confirmpassword form-control box-2">
					 </div>
				 </div>
				 <div>
				     <div class="col-sm-4"></div>
				     <div class="col-sm-8">
				     	<div class="g-recaptcha" data-sitekey="6Lcx7eMZAAAAAA09BufQyfxj7obO1Qyy4prbYSVv"></div>
				        <input type="hidden" name="g-recaptcha-response" id="send_captcha">

				     	<div id="captcha_msg" style="color: cyan;"></div>
				     </div>
				 </div>
				 <div>
				     <div class="col-sm-4"></div>
				     <div class="col-sm-8"><button type="submit" class="btn form-submit submit">SUBMIT</button></div>
				 </div>
				 
			 </form>
		 </div>
	 </div>
</div>


</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
			
	function email_check(email){
			return	$.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>WanDirectory/check_email",
					data:{orgemail:email},
					dataType:'json',
					success:function(data){
						if (data.flag == true) {
							$('#orgemailmsg').html("");
							$('.orgemail').after('<div id="orgemailmsg" style="color:cyan">email already Exists !</div>');
						}else{
							$('#orgemailmsg').html("");
						}
					}
			});
	}
		$(document).on("keyup",".orgemail",function(){
			var email = $(this).val();
			email_check(email);
		});

		$(document).on("click",".submit",function(e){
							e.preventDefault();

			var password = $(".password").val();
			var confirmpassword = $(".confirmpassword").val();
			var orgname = $(".orgname").val();
			var orgemail = $(".orgemail").val();
		  
			
			var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				

				$('#passwordmsg').html("");
				$('#confirmpasswordmsg').html("");
				$('#g-recaptchamsg').html("");
				$('#orgnamemsg').html("");
				$('#orgemailmsg').html("");

				if((password == "") || (confirmpassword == "") || (grecaptcha.getResponse() == "") || (orgname == "") || (orgname == "") || !pattern.test(orgemail))
				{
										
					$('.orgname').after('<div id="orgnamemsg" style="color:cyan">Invalid Input</div>');
					$('.orgemail').after('<div id="orgemailmsg" style="color:cyan">Please enter a valid email address.</div>');
					
					$('.password').after('<div id="passwordmsg" style="color:cyan">Empty passwords are not allowed. Please fill in your desired password.</div>');
					$('.confirmpassword').after('<div id="confirmpasswordmsg" style="color:cyan">Invalid Input</div>');
				    $('.g-recaptcha').after('<div id="g-recaptchamsg" style="color:cyan">Invalid Input</div>');
				   

					if((orgname != ""))
					{ $('#orgnamemsg').html(""); }
					if(pattern.test(orgemail))
					{ $('#orgemailmsg').html(""); }
					
					if((password != ""))
					{ $('#passwordmsg').html(""); }
					if((confirmpassword != ""))
					{ $('#confirmpasswordmsg').html(""); }
					if(grecaptcha.getResponse() != "")
					{ $('#g-recaptchamsg').html(""); }
					return false;
				}

				if (password != confirmpassword)
				{
					$('.confirmpassword').after('<div id="confirmpasswordmsg" style="color:cyan">Confirm password miss-match.</div>');
					// if((confirmpassword != ""))
					// { $('#confirmpasswordmsg').html(""); }
					return false;
				}
				var captcha = grecaptcha.getResponse();
				$("#send_captcha").val(captcha);

				email_check(orgemail).then(function(res){
		              var con2 = res.flag;
		              if (con2 != true) {
		              	$("#directory_form").submit();
		              }
		           });


		});


		$(document).on("click",".continent",function(){
			var id = $(this).val();
			  if(id != 0)
			  {
				$.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>WanDirectory/get_country",
					data:{id:id},
					dataType:'json',
					beforeSend: function() {
						//$("#state-list").addClass("loader");
					},
					success:function(data){
						var xx="";
						xx  = "<option value='0'>Select country</option>";
						for(var i=0;i<=data.length;i++)
						{
							 xx += "<option value="+data[i].id+">"+data[i].name+"</option>";

					         $('.country').html(xx);
						}
					}	
				})
			}else{
				 $('.country').html("");
				 $('.state').html("");
			}
		});


		$(document).on("click",".country",function(){
			var id = $(this).val();
			  if(id != 0)
			  {
			  	$('.state1').css("display","inline");
				$.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>WanDirectory/get_state",
					data:{id:id},
					dataType:'json',
					beforeSend: function() {
						//$("#state-list").addClass("loader");
					},
					success:function(data){
					  if ($.trim(data)) {
						var xx="";
						xx  = "<option value='0'>Select state</option>";
						for(var i=0;i<=data.length;i++)
						{
							 xx += "<option value="+data[i].id+">"+data[i].name+"</option>";

					         $('.state').html(xx);
						}
					  }else{
						$('.state1').css("display","none");
					  }

					}	
				})
			}else{
				$('.state').html("");
				$('.state1').css("display","none");
			}
		});

	});
</script>