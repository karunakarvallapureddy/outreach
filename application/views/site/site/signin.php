<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				
				 <div class="row tab-filters"> 
			 <div class="col-md-12">
			<!--<ul class="tab-bottom">	
			<li class="col-md-4 padding-less"><a href="<?php echo base_url();?>Login" data-filter="*" class="selected  tab-nav"><i class="icon icon-reorder"></i>&nbsp; Login</a></li>
			<li class="col-md-4 padding-less">
			<div class="dropdown">	
				<a href="#" data-filter=".cat2" id="dLabel" role="button" data-toggle="dropdown" class="tab-nav123" data-target="#"><i class="icon icon-th-large"></i>&nbsp;Registrations<span class="caret"></span></a>
    		   <ul class="dropdown-menu middle-subnav" role="menu" aria-labelledby="dropdownMenu">
               <li><a href="<?php echo base_url();?>MBA-Student-Registration">&nbsp; MBA/MCA Student Registration</a></li>
              <li><a href="<?php echo base_url();?>BTech-Student-Registration">&nbsp; B-Tech Student Registration</a></li>
			   <li><a href="<?php echo base_url();?>Degree-Student-Registration">&nbsp; Degree Student Registration</a></li>
              <li><a href="<?php echo base_url();?>College-Registration">&nbsp; College Registration</a></li>
            </ul>
        </div>
		</li>
		<li class="col-md-4 padding-less">
			<div class="dropdown">	
				<a href="#" data-filter=".cat2" id="dLabel" role="button" data-toggle="dropdown" class="tab-nav123" data-target="#"><i class="icon icon-th-large"></i>&nbsp;Other Programs<span class="caret"></span></a>
    		   <ul class="dropdown-menu middle-subnav" role="menu" aria-labelledby="dropdownMenu">
			   <li><a href="<?php echo base_url();?>Finishing-School-Registration">&nbsp; Finishing School Registration</a></li>
                <li><a href="<?php echo base_url();?>TEP-Select">&nbsp; TEP Programme Registration</a></li>
            </ul>
        </div>
		</li>
					</ul>-->
				</div>
				</div>
				
                <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert col-md-12 alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">×</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>

	<form action="<?php echo base_url();?>Login" class="form-horizontal" method="post" name="student_login">
  <div class="form-group">
  <div class="form-group">
<label class="col-sm-offset-4 col-sm-6 control-label"><h3 align="left">Login</h3></label>
</div>
    <label class="col-sm-4 control-label">User Name:</label>
    <div class="col-sm-6">
      <input type="text" name="email" placeholder="User Name" value="<?php echo set_value('email');?>" class="form-control">
	  <?php echo "<span style='color:red'>".form_error('email')."</span>"; ?>
    </div>
  </div>
 
  <div class="form-group">
    <label class="col-sm-4 control-label">Password:</label>
    <div class="col-sm-6">
      <input type="password" name="password" placeholder="Password" value="<?php echo set_value('password');?>" class="form-control">
	   <?php echo "<span style='color:red'>".form_error('password')."</span>"; ?>
    </div>
  </div>
  <style>
  .margin-forgot{
  margin-left: 225px;
  }
  .boxedlayout .boxedcontent {
    margin-top: 87px!important;
}
  </style>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-12">
     <input type="submit" id="submit" class="btn btn-primary" value="Submit">
	 <a class="margin-forgot" href="<?php echo base_url()?>Forgot-Password">Forgot Password?</a>
    </div>
  </div>
</form>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br></br></br>
</br></br>

				<div class="clearfix">
				</div>
			</div>
			<!-- .col-md-9 -->
			<div class="col-md-3">
				<?php $this->load->view('site/side_bar');?>
				<!-- #secondary -->
			</div>
			<!-- .col-md-3 -->
		</div>
		<!-- .row -->
	</div>