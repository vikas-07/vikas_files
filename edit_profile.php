<style>
body {font-family: 'Montserrat', sans-serif; background-color:#e1e9f7;}
#register .nav-tabs {font-family: 'Quicksand', sans-serif; border: none; margin: 0 auto 35px; width:60%;}
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
#menu1{ margin-top: 50px; }
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
</style>
<div class="navigation"></div>
<div class="container" id="register">

	<?php if($this->session->flashdata('update_errormsg')){?>
        <div class="alert alert-danger" role="alert" style="height: 55px;padding: 0;">
        	<a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-right: 8px;">&times;</a>
            <?php echo $this->session->flashdata('update_errormsg'); ?>
        </div>
    <?php
    	$bpcss = "bottom: 125px";
     }else{
    	$bpcss = "bottom: 50px";
     }
     ?>

	<div class="col-sm-3 bpcss" style="float: right;<?php echo $bpcss; ?>;left: 200px;"><a style="color: white;" href="<?php echo base_url(); ?>registration/profile">Back to Profile</a></div>


	

   <!--   <ul class="nav nav-tabs">
	     <li  class="active"><a id="home_tab" data-toggle="tab" href="#home">YOUR INFORMATION</a></li>
		 <li  class="n-right"><a id="Society_tab" class="society_tab" data-toggle="tab" href="#menu1">SOCIETY INFORMATION</a></li>
	 </ul> -->
	 	 <center><h3 style="color: white">ORGANISATION INFORMATION</h3></center>

	<form method="post" action="<?php echo base_url()."WanDirectory/update_profile"; ?>">	
	 
		 <div id="menu1" class="tab-pane ">
		   	 	 <div class="form-group">
				     <label class="control-label col-sm-4">Organisation Name <span style="color: red">*</span></label>
					 <div class="col-sm-8">
					     <input  type="text" name="orgname"  value="<?php echo $data['organisation_name']; ?>" class="form-control box-2 orgname">
					 </div>
				 </div> 
				 <div class="form-group">
				     <label class="control-label col-sm-4">Organisation Email <span style="color: red">*</span></label>
					 <div class="col-sm-8">
					     <input type="text" value="<?php echo $data['organisation_email']; ?>" name="orgemail" class="form-control box-2 orgemail">
					 </div>
				 </div> 
				 <div class="form-group">
				     <label class="control-label col-sm-4">Organisation Url</label>
					 <div class="col-sm-8">
					     <input type="text" name="orgurl" value="<?php echo $data['organisation_url']; ?>" class="form-control box-2 orgurl">
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
									if ($data['continent'] == $value['id']) {
											$selected = "selected";
										}else{
											$selected = "";
										}
									echo "<option ".$selected." value=".$value['id'].">".$value['continent_name']."</option>";
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
					     <input type="text" value="<?php echo $data['streetname']; ?>" name="streetname" class="form-control box-2 streetname">
					 </div>
				 </div>
				
				 <div class="form-group">
				     <label class="control-label col-sm-4">Zip/Postal code</label>
					 <div class="col-sm-8">
					     <input type="text" value="<?php echo $data['zip']; ?>" name="zip" class="zip form-control box-2">
					 </div>
				 </div>
				 
				 <div class="form-group">
				     <label class="control-label col-sm-4">City</label>
					 <div class="col-sm-8">
					     <input type="text"  value="<?php echo $data['city']; ?>" name="city" class="form-control box-2">
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Focus</label>
					 <div class="col-sm-8">
					     <div class="half-check">
						     <div class="checkbox">
							     <label><input type="checkbox"  <?php echo !empty($data['col23']) ? "checked" : "" ; ?> name="col23" class="wildlife">Wildlife </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  <?php echo !empty($data['col21']) ? "checked" : "" ; ?> name="col21" class="wildlife">Environment </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox"  <?php echo !empty($data['col22']) ? "checked" : "" ; ?> name="col22" class="wildlife">Diet/Food </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" 
							     	<?php echo !empty($data['col30']) ? "checked" : "" ; ?> name="col30" class="equineprotection">Equine Protection </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col32']) ? "checked" : "" ; ?> name="col32" class="primateprotection">Primate Protection  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col34']) ? "checked" : "" ; ?> name="col34" class="fur">Fur  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col37']) ? "checked" : "" ; ?> name="col37" class="experimentation">Experimentation </label>
							 </div>
						 </div>
					     <div class="half-check">
						     <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col29']) ? "checked" : "" ; ?> name="col29" class="petprotection">Pet Protection </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col31']) ? "checked" : "" ; ?> name="col31" class="birdprotection">Bird Protection </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col33']) ? "checked" : "" ; ?> name="col33" class="marineanimal">Marine Animal Protection  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col35']) ? "checked" : "" ; ?> name="col35" class="farmanimal">Farm Animal  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col38']) ? "checked" : "" ; ?> name="col38" class="animalinentertainment">Animals in Entertainment </label>
							 </div>
						 </div>
					 </div>
				 </div>
				  <div class="form-group">
				     <label class="control-label col-sm-4"></label>
					 <div class="col-sm-8">
					     <div class="half-check">
						     <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col40']) ? "checked" : "" ; ?> name="col40" class="shelter">Shelter </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col44']) ? "checked" : "" ; ?> name="col44" class="petadoption">Pet Adoption </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col47']) ? "checked" : "" ; ?> name="col47" class="humaneeducation">Humane Education</label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col53']) ? "checked" : "" ; ?> name="col53" class="sanctuary">Sanctuary  </label>
							 </div>
							 <div class="checkbox">
							     <label><input type="checkbox" <?php echo !empty($data['col54']) ? "checked" : "" ; ?> name="col54" class="wildliferehabilitation">Wildlife Rehabilitation </label>
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Geographic Work Area</label>
					 <div class="col-sm-8">
					     <select name="geographic" class="form-control box-2 geographic" id="Geographic">
						  	<option  value="0">Please select </option>
							<?php
							 if (isset($workarea)) {
							 	
								foreach ($workarea as $key => $value) {
									if ($data['workarea'] == $value['id']) {
										$selected = "selected";
									}else{
										$selected = "";
									}
									echo "<option ".$selected." value=".$value['id'].">".$value['name']."</option>";
								}
							}
							?>
						 </select>
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Facebook</label>
					 <div class="col-sm-8">
					     <input type="text" value="<?php echo $data['facebook']; ?>" name="facebook"  class="form-control box-2 facebook">
					 </div>
				 </div>
				 <div class="form-group">
				     <label class="control-label col-sm-4">Comments</label>
					 <div class="col-sm-8">
						 <textarea name="comments"  class="form-control box-2 comments" rows="5" id="comment">
						 	<?php echo $data['comment']; ?>
						 </textarea>
					 </div>
				 </div>
<!--				  <div class="form-group">
				     <label class="control-label col-sm-4">Notes</label>
					 <div class="col-sm-8">
						 <textarea  name="notes"class="form-control box-2 notes" rows="5" id="comment">
					     <?php echo $data['notes']; ?>
						 </textarea>
					 </div>                                       -->
				 </div>
<!--				   <div class="form-group">
				     <label class="control-label col-sm-4">Affiliate with WFA</label>
					 <div class="col-sm-8">

						 <input type="checkbox" <?php echo !empty($data['affiliate']) ? "checked" : "" ; ?>  name="affiliate" class=" box-2 affiliate">
					 </div>
				 </div>  -->
				
			   
				

			  <div>
	                <label><a style="color: white;" class="chg_pwd">Change Password ?</a></label>
	                <label>
	                <a class="chg_pwd_close" style="display: none;color: white;">Close Password ?</a>
	                </label>
              </div>
				 <div class="form-group" id="pwd_html">
				    <!--  <label class="control-label col-sm-4">Password</label>
					 <div class="col-sm-8">
					     <input type="password"  name="password" class="form-control box-2 password">
					 </div> -->
				 </div>
				 <div class="form-group" id="con_pwd_html">
				    <!--  <label class="control-label col-sm-4">Verify Password</label>
					 <div class="col-sm-8">
					     <input type="password" name="confirmpassword"  class="confirmpassword form-control box-2">
					 </div> -->
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
				     <div class="col-sm-8"><input type="submit" class="btn form-submit submit" value="update" name="update" ></div>
				 </div>
				 
		 </div>
	 </div>
</div>
			 </form>


</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on("click",".chg_pwd",function(e){
              e.preventDefault();
                $(this).css("display","none");
                $(".chg_pwd_close").css("display","inline-block");
                $("#pwd_html").css("display","block").html('<label class="control-label col-sm-4">Password <span style="color: red">*</span></label><div class="col-sm-8"><input type="password"  name="password" class="form-control box-2 password"></div>');
                $("#con_pwd_html").css("display","block").html('<label class="control-label col-sm-4">Verify Password <span style="color: red">*</span></label><div class="col-sm-8"><input type="password" name="confirmpassword"  class="confirmpassword form-control box-2"></div>');

                
          });
          $(document).on("click",".chg_pwd_close",function(e){
                e.preventDefault();
                $(this).css("display","none");
                $(".chg_pwd").css("display","inline-block");
                $("#pwd_html").css("display","none").html("");
                $("#con_pwd_html").css("display","none").html("");
                                
          });


		$(document).on("click","#change_tab",function(e){
			 	e.preventDefault();

					var firstname = $(".firstname").val();
					var lastname = $(".lastname").val();
					var email = $(".email").val();
					var position = $('.position option:selected').val();

					var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			
					$('#firstnamemsg').html("");
				    $('#lastnamemsg').html("");
				    $('#emailmsg').html("");
				    $('#positionmsg').html("");

					if((firstname == "") || (lastname == "") || !pattern.test(email) || (position == 0)){
						$('.firstname').after('<div id="firstnamemsg" style="color:cyan;margin-left:200px;">Please let us know your first name.</div>');
						$('.lastname').after('<div id="lastnamemsg" style="color:cyan;margin-left:200px;">Please let us know your last name.</div>');
						$('.email').after('<div id="emailmsg" style="color:cyan;margin-left:200px;">Please enter a valid email address.</div>');
						$('.position').after('<div id="positionmsg" style="color:cyan;margin-left:200px;">Invalid Input</div>');

						if((firstname != ""))
						{ $('#firstnamemsg').html(""); }
						if((lastname != ""))
						{ $('#lastnamemsg').html(""); }
						if(pattern.test(email))
						{ $('#emailmsg').html(""); }
						if((position != 0))
						{ $('#positionmsg').html(""); }

						return false;
					}


			 		$("#Society_tab").click();
					
			});

			$(document).on("click",".society_tab",function(e){
				e.preventDefault();

					var firstname = $(".firstname").val();
					var lastname = $(".lastname").val();
					var email = $(".email").val();
					var position = $('.position option:selected').val();
					var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					$('#firstnamemsg').html("");
				    $('#lastnamemsg').html("");
				    $('#emailmsg').html("");
				    $('#positionmsg').html("");

					if(firstname == ""){
						$('.firstname').after('<div id="firstnamemsg" style="color:cyan;margin-left:200px;">Please let us know your first name.</div>');
						$("#home_tab").click();
						setTimeout(function(){
						$(".tab-content #menu1").removeClass("active");
						},200);
					}

					if(lastname == ""){
						$('.lastname').after('<div id="lastnamemsg" style="color:cyan;margin-left:200px;">Please let us know your last name.</div>');
						$("#home_tab").click();
						setTimeout(function(){
						$(".tab-content #menu1").removeClass("active");
						},200);
					}

					if(!pattern.test(email)){
						$('.email').after('<div id="emailmsg" style="color:cyan;margin-left:200px;">Please enter a valid email address.</div>');
						$("#home_tab").click();
						setTimeout(function(){
						$(".tab-content #menu1").removeClass("active");
						},200);
					}
					if(position == 0){
						$('.position').after('<div id="positionmsg" style="color:cyan;margin-left:200px;">Invalid Input</div>');
						$("#home_tab").click();
						setTimeout(function(){
						$(".tab-content #menu1").removeClass("active");
						},200);
					}
				
			});
			
		$(document).on("click",".submit",function(e){
							//e.preventDefault();

			var societyname = $(".societyname").val();
			var password = $(".password").val();
			var confirmpassword = $(".confirmpassword").val();
			var orgname = $(".orgname").val();
			var orgemail = $(".orgemail").val();
		    var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

				$('#societynamemsg').html("");
				$('#passwordmsg').html("");
				$('#confirmpasswordmsg').html("");
				$('#g-recaptchamsg').html("");
				$('#orgnamemsg').html("");
				$('#orgemailmsg').html("");

				if((societyname == "") || (password == "") || (confirmpassword == "") || (grecaptcha.getResponse() == "") || (orgname == "") || (orgname == "") || !pattern.test(orgemail))
				{
										
					$('.orgname').after('<div id="orgnamemsg" style="color:cyan">Invalid Input</div>');
					$('.orgemail').after('<div id="orgemailmsg" style="color:cyan">Please enter a valid email address.</div>');
					$('.societyname').after('<div id="societynamemsg" style="color:cyan">Invalid Input</div>');
					$('.password').after('<div id="passwordmsg" style="color:cyan">Empty passwords are not allowed. Please fill in your desired password.</div>');
					$('.confirmpassword').after('<div id="confirmpasswordmsg" style="color:cyan">Invalid Input</div>');
				    $('.g-recaptcha').after('<div id="g-recaptchamsg" style="color:cyan">Invalid Input</div>');

					if((orgname != ""))
					{ $('#orgnamemsg').html(""); }
					if(pattern.test(orgemail))
					{ $('#orgemailmsg').html(""); }
					if((societyname != ""))
					{ $('#societynamemsg').html(""); }
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

		});

		var continent_id = "<?php echo $data['continent']; ?>";
		continent(continent_id);

	    
		$(document).on("click",".continent",function(){
			var id = $(this).val();
			  continent(id);
			  country(0);
		});

		function continent(id){
			var country_id = "<?php echo $data['country']; ?>";

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
							if(country_id == data[i].id){
								var selected = "selected";
							}else{
								var selected = "";
							}
							 xx += "<option "+selected+" value="+data[i].id+">"+data[i].name+"</option>";

					         $('.country').html(xx);
						}
					}	
				})
			}else{
				 $('.country').html("");
				 $('.state').html("");
			}
		}

		var country_id = "<?php echo $data['country']; ?>";
		country(country_id);

		$(document).on("click",".country",function(){
			var id = $(this).val();
			 country(id);
		});

		function country(id){
			 if(id != 0)
			  {
			   	$('.state1').css("display","inline");

			  	var state_id = "<?php echo $data['state']; ?>";
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
						 if(state_id == data[i].id){
			                var selected = "selected";
			              }else{
			                var selected = "";
			              }
						  xx += "<option "+selected+" value="+data[i].id+">"+data[i].name+"</option>";

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
		}
		$(document).on("click",".close",function(){
			$(".bpcss").css("bottom","50px");
		});



	});
</script>