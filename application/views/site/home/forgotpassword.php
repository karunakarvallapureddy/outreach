

<!--------------Nav Block------------------->



<!--------------banner-block------------------->

<div class="banner-block-inner">
<div class="site-container">

<div class="banner-main">
		<img src="<?php echo base_url()?>site/images/banners/Agent-registration.png"> </div>

</div>
</div>

<!--------------End banner-block------------------->




<!--------------home-box-block------------------->

<div class="home-box-block white-bg">
<div class="site-container">

<div class="home-text">
		<div class="home-row2">
	<h3>Forgot Password</h3>
	<div class="inner-block">

<div class="booking-left">
<div class="divide-40"> 
<?php if(isset($msg)){ echo "<span style='color:red' class='error'>".$msg."</span><br/>"; } ?>
 </div>
<form  id="reg_form" action="<?php echo base_url() ;?>forgotpassword" method="post"  >
<input type="hidden" id="s_e_msg1" name="s_e_msg1" value="<?php if(isset($s_e_msg1)){ echo $s_e_msg1;} else { echo "";}?>">
<!--<p><label>Office ID<span style="color:red;">*</span></label>
<input name="" type="text" value="" class="text-field1"></p>-->


<p><label>Email<span style="color:red;">*</span></label>

<input type="" value="<?php echo set_value('email_address'); ?>" class="text-field1"  name = "email_address" id = "email"/>



</p>

<input type="hidden" id="login_issue" name="login_issue" value="<?php if(isset($s_e_msg)){ echo $s_e_msg;} else { echo "";}?>">	
<input type="hidden" id="msg" name="msg" value="<?php if(isset($msg)){ echo $msg;} else { echo "";}?>">
	
<p><input name="" type="submit" value="Submit"  class="formBtn"></p>
</form>





</div>




</div>







</div>

</div>

</div>
</div>


<!--------------End home-box-block------------------->

<!--------------signup-block-------------------><!--------------End signup-block------------------->
<script src="<?php echo base_url('js/jquery.min.js')?>"></script>

 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script>
// just for the demos, avoids form submit

$( "#reg_form" ).validate({
rules: {

agency_email: {
required: true
}
},
messages: {
            
            email: "<p>Please enter a valid email id</p>"
        }
});
</script>
<style>
  
  p    {color:red}
</style>
<script>
$(document).ready(function(){

	$(".popup-3").hide();
	
	if($("#login_issue").val() == 1)
	{
		$(".popup-3").show();
		$(".replacediv").html('You have successfully logged in');
		$(".sub-btn-4").click(function(){
			window.location.href = "<?php echo base_url('sme')?>";
		});
	}
	
	if($("#login_issue").val() != "")
	{
		$(".popup-3").show();
	}

	if($("#s_e_msg1").val() != "")
	{
		$(".popup-3").show();
		$(".replacediv").html($("#s_e_msg1").val());
	}
	if($("#msg").val() != "")
	{
		$(".popup-3").show();
		$(".replacediv").html($("#msg").val());
	}
	
	$(".sub-btn-4").click(function(){
		$(".popup-3").hide();
	});
	

});
</script>
