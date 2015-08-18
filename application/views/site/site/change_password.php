<br/>

	<div class="container">
		<div class="row">
			<div class="col-md-9">		
                <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert col-md-12 alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">×</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>

	<form action="<?php echo base_url().'Change-Password/'.$decode_id;?>" class="form-horizontal" method="post" name="student_login">
  <div class="form-group">
<label class="col-sm-offset-4 col-sm-6 control-label"><h3 align="left">Change Password</h3></label>
</div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Password:</label>
    <div class="col-sm-6">
      <input type="password" name="password" placeholder="password" value="" class="form-control">
	  <?php echo "<span style='color:red'>".form_error('password')."</span>"; ?>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-4 control-label">Conform Password:</label>
    <div class="col-sm-6">
      <input type="password" name="conform_password" placeholder="conform password" value="" class="form-control">
	  <?php echo "<span style='color:red'>".form_error('conform_password')."</span>"; ?>
    </div>
  </div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-12">
     <button type="submit" id="submit" class="btn btn-primary" value="Submit">Submit</button>
    </div>
  </div>
</form>
				<div class="clearfix">
				</div>
			</div>
			<!-- .col-md-9 -->
		</div>
		<!-- .row -->
	</div>