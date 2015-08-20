

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
	<h3>Change password</h3>
	<div class="inner-block">

<div class="booking-left">
<div class="divide-40"> 
<?php if(isset($sucess_status)){ echo "<span style='color:red' class='error'>".$sucess_status."</span><br/>"; } ?>
 </div>
<form action="<?php echo base_url() ;?>changepassword" method="post" name = "loginForm" id = "loginForm" >


<!--<p><label>Office ID<span style="color:red;">*</span></label>
<input name="" type="text" value="" class="text-field1"></p>-->

<p><label> Current Password<span style="color:red;">*</span></label>
<input type="password" value="<?php echo set_value('curr_password'); ?>" 
class="text-field1" style="wi" name = "curr_password" id = "curr_password"/></p>
<?php echo "<span style='color:red'>".form_error('curr_password')."</span>"; ?>




<p><label>New&nbsp;Password&nbsp;<span style="color:red;">*</span></label>
<input type="password" value="<?php echo set_value('new_password'); ?>" class="text-field1" 
 name = "new_password" id = "new_password"/></p>
 <?php echo "<span style='color:red'>".form_error('new_password')."</span>"; ?>

<p><label>Re-type&nbsp;New&nbsp;Password&nbsp;<span style="color:red;">*</span></label>
<input type="password" value="<?php echo set_value('retype_password'); ?>" class="text-field1"
  name = "retype_password" id = "retype_password"/></p>
<?php echo "<span style='color:red'>".form_error('retype_password')."</span>"; ?>


<p><input name="" type="submit" value="Login"  class="formBtn"></p>
</form>





</div>




</div>







</div>

</div>

</div>
</div>


<!--------------End home-box-block------------------->

<!--------------signup-block-------------------><!--------------End signup-block------------------->

