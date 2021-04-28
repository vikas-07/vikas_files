<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<style type="text/css">
	
</style>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url().'admin/wan'; ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Directory edit</a>
					</li>
				</ul>
			
			</div>
			<h3 class="page-title">
			Directory edit 
			</h3>
			<!-- END PAGE HEADER-->

		<div class="row">
      <?php if($this->session->flashdata('update_errormsg')){?>
        <div class="alert alert-danger" role="alert" style="height: 55px;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-right: 8px;">&times;</a>
            <?php echo $this->session->flashdata('update_errormsg'); ?>
        </div>
    <?php
     }
     ?>
		

      <div class="container-fluid" style="margin-left: 30%;">
          <!-- <button class="btn btn-primary">Edit</button>
          <button class="btn btn-danger dir_delete">Delete</button> -->
    <form method="post" action="<?php echo base_url()."AdminController/update_dir"; ?>">
      
        <input type="hidden" name="id" value="<?php echo isset($data['id']) ?  $data['id'] : '-'; ?>">
               <div class="form-group row" style="margin-top: 5%;">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Organisation Name <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                
                  <input class="form-control organisation_name" type="text" name="organisation_name" value="<?php echo isset($data['organisation_name']) ?  $data['organisation_name'] : ''; ?>">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Organisation Email <span style="color: red;">*</span></label>
                <div class="col-sm-5">
                
                  <input class="form-control organisation_email" type="text" name="organisation_email" value="<?php echo isset($data['organisation_email']) ?  $data['organisation_email'] : ''; ?>">
                </div>
                </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Organisation Url</label>
                <div class="col-sm-5">
                    <input class="form-control organisation_url" type="text" name="organisation_url" value="<?php echo isset($data['organisation_url']) ?  $data['organisation_url'] : ''; ?>">
                </div>
                </div>
            
           
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Continent</label>
                <div class="col-sm-5">
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
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-5">
                    <select name="country" class="form-control box-2 country" id="sel1">
             
                    </select>
                </div>
              </div>
               <div class="form-group row state1">
                <label for="inputEmail3" class="col-sm-3 col-form-label">State/Province</label>
                <div class="col-sm-5">
                    <select name="state" class="form-control box-2 state" id="sel1">
              
                    </select>
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Street Name + Number</label>
                <div class="col-sm-5">
                 
                    <input class="form-control streetname" type="text" name="streetname" value="<?php echo isset($data['streetname']) ?  $data['streetname'] : ''; ?>">
                </div>
              </div>
             
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Zip/Postal code</label>
                <div class="col-sm-5">
                 
                   <input class="form-control zip" type="text" name="zip" value="<?php echo isset($data['zip']) ?  $data['zip'] : ''; ?>">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-5">
                  
                   <input class="form-control city" type="text" name="city" value="<?php echo isset($data['city']) ?  $data['city'] : ''; ?>">
                </div>
              </div>

               

              <h3 style="border-bottom: 1px solid;width: fit-content;">Focus</h3>
              <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Wildlife</label>
                <div class="col-sm-5">
                 <input type="checkbox"  <?php echo !empty($data['col23']) ? "checked" : "" ; ?> name="col23" class="wildlife">
                </div>
              </div>
               <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Environment</label>
                <div class="col-sm-5">
                 <input type="checkbox"  <?php echo !empty($data['col21']) ? "checked" : "" ; ?> name="col21" class="wildlife">
                </div>
              </div>
               <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Diet/Food</label>
                <div class="col-sm-5">
                 <input type="checkbox"  <?php echo !empty($data['col22']) ? "checked" : "" ; ?> name="col22" class="wildlife">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Equine Protection</label>
                <div class="col-sm-5">
                  <input type="checkbox" 
                    <?php echo !empty($data['col30']) ? "checked" : "" ; ?> name="col30" class="equineprotection">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Primate Protection</label>
                <div class="col-sm-5">
                 <input type="checkbox" <?php echo !empty($data['col32']) ? "checked" : "" ; ?> name="col32" class="primateprotection">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Fur</label>
                <div class="col-sm-5">
                 <input type="checkbox" <?php echo !empty($data['col34']) ? "checked" : "" ; ?> name="col34" class="fur">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Experimentation</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col37']) ? "checked" : "" ; ?> name="col37" class="experimentation">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Pet Protection</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col29']) ? "checked" : "" ; ?> name="col29" class="petprotection">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Bird Protection</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col31']) ? "checked" : "" ; ?> name="col31" class="birdprotection">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Marine Animal Protection</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col33']) ? "checked" : "" ; ?> name="col33" class="marineanimal">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Farm Animal</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col35']) ? "checked" : "" ; ?> name="col35" class="farmanimal">
                </div>
              </div>  
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Animals in Entertainment</label>
                <div class="col-sm-5">
                 <input type="checkbox" <?php echo !empty($data['col38']) ? "checked" : "" ; ?> name="col38" class="animalinentertainment">
                </div>
              </div>

<!--               <h3 style="border-bottom: 1px solid;width: fit-content;">Activities/Facilities</h3>
 -->                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Shelter</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col40']) ? "checked" : "" ; ?> name="col40" class="shelter">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Pet Adoption</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col44']) ? "checked" : "" ; ?> name="col44" class="petadoption">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Humane Education</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col47']) ? "checked" : "" ; ?> name="col47" class="humaneeducation">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Sanctuary</label>
                <div class="col-sm-5">
                 <input type="checkbox" <?php echo !empty($data['col53']) ? "checked" : "" ; ?> name="col53" class="sanctuary">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Wildlife Rehabilitation</label>
                <div class="col-sm-5">
                  <input type="checkbox" <?php echo !empty($data['col54']) ? "checked" : "" ; ?> name="col54" class="wildliferehabilitation">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Geographic Work Area</label>
                <div class="col-sm-5">
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
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Facebook</label>
                <div class="col-sm-5">
                 <input type="text" value="<?php echo $data['facebook']; ?>" name="facebook"  class="form-control box-2 facebook">
                </div>
                </div>
                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Comments</label>
                <div class="col-sm-5">
                  <textarea name="comments"  class="form-control box-2 comments" rows="5" id="comment">
                  <?php echo $data['comment']; ?>
                 </textarea>
                </div>
                </div>
                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Notes</label>
                <div class="col-sm-5">
                   <textarea  name="notes"class="form-control box-2 notes" rows="5" id="comment">
                     <?php echo $data['notes']; ?>
                   </textarea>
                </div>
                </div>
                <input type="submit" name="update" class="update btn btn-primary" value="update">
 </form> 
         </div>
      </div>
			
		</div>		

	</div>
</div>
	<!-- END CONTENT -->



<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>


<script src="<?php echo base_url().'assets/'; ?>global/scripts/datatable.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url().'assets/'; ?>global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
		 
	$(document).ready(function(){
       $(document).on("click",".update",function(e){
        var societyname = $(".society_name").val();
        var orgname = $(".organisation_name").val();
        var orgemail = $(".organisation_email").val();
        var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        $('#societynamemsg').html("");
       // $('#g-recaptchamsg').html("");
        $('#orgnamemsg').html("");
        $('#orgemailmsg').html("");

        if((societyname == "") || (orgname == "") || !pattern.test(orgemail))
        {

          $('.organisation_name').after('<div id="orgnamemsg" style="color:red;">Invalid Input</div>');
          $('.organisation_email').after('<div id="orgemailmsg" style="color:red;">Please enter a valid email address.</div>');
          $('.society_name').after('<div id="societynamemsg" style="color:red;">Invalid Input</div>');
          
           // $('.g-recaptcha').after('<div id="g-recaptchamsg" style="color:cyan">Invalid Input</div>');

           
          if((orgname != ""))
          { $('#orgnamemsg').html(""); }
          if(pattern.test(orgemail))
          { $('#orgemailmsg').html(""); }
          if((societyname != ""))
          { $('#societynamemsg').html(""); }
           
          // if(grecaptcha.getResponse() != "")
          // { $('#g-recaptchamsg').html(""); }
          return false;
        }
        //var captcha = grecaptcha.getResponse();
        //console.log("captcha",grecaptcha.getResponse());
        //  return false;

       // $("#send_captcha").val(captcha);
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
           $('.state1').css("display","block");

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
	});
</script>