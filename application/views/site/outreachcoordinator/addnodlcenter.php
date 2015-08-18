
<div role="tabpanel" class="tab-pane" id="messages">
	<!-- FORMS -->
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<!-- product details -->								
									<div class="col-md-6 col-centered" style="float: right; margin-right: 25%;">
										<div class="box border dark gray">
											<div class="box-title">
												<h4>Add  Nodal Center</h4>
											</div>
											<div class="box-body big">
											<span id="error" class='error'></span>
											
											
<form class="form-horizontal" method="post" name="addStaff" id="addStaff" action="<?php echo site_url('home/addNodalcenter');?>" role="form" enctype="multipart/form-data">
												  
												  <!-- Product Name -->
												  <div class="form-group">
													<label class="col-sm-4">Name of the Center<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="text" required onkeypress="return onlyAlphabets(event,this);" name = "fname" id = "first_name" class="required form-control" value="<?php echo set_value('first_name');?>">
													  <?php echo "<span style='color:red'>".form_error('first_name')."</span>"; ?>
													</div>
												  </div>
												    <div class="form-group">
													<label class="col-sm-4">Name of Coordinator<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="text" required onkeypress="return onlyAlphabets(event,this);" name = "lastname" id = "last_name" class=" form-control" value="<?php echo set_value('last_name');?>">
													  <?php echo "<span style='color:red'>".form_error('last_name')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4">Email Id<span style="color:red">*</span></label>
													<div class="col-sm-6">
<input type="email" name="email">												  <?php echo "<span style='color:red'>".form_error('email')."</span>"; ?>
													</div>
												  </div>
												  
												  <div class="form-group">
													<label class="col-sm-4">Upload MOU<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="file" name = "mou" id = "mou" value="<?php echo set_value('mou');?>">
													   <?php if(isset($msg)){ echo "<span style='color:red'>".$msg."</span>"; }?>
													</div>
												  </div>
												  
												  <div class="box-title">
												<h4>Targets of Nodal Coordinator</h4>
											</div>
												  
												  <div class="form-group">
													<label class="col-sm-4">No of Workshops<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="text" required   style="
    width: 10%;
"name = "workshop" id = "works" class="required  required-width" value="<?php echo set_value('works');?>">
													  <?php echo "<span style='color:red'>".form_error('works')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4">No of Participants<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="text" required name = "participants" id = "participants" class="required required-width" value="<?php echo set_value('participants');?>">
													  <?php echo "<span style='color:red'>".form_error('participants')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4">No of experiments<span style="color:red">*</span></label>
													<div class="col-sm-6">
														<?php
														$ses_data= $this->session->userdata("user_details"); 
														?>
														<input type="hidden" name="outreach_id" name="outreach_id" value="<?php echo $ses_data['id']; ?>">
													  <input type="text" name = "experiments" id = "experiments" class="required required-width"  value="<?php echo set_value('experiments');?>">
													  <?php echo "<span style='color:red'>".form_error('experiments')."</span>"; ?>
													</div>
												  </div>
												<?php /* */?>
												  
											</div>
										</div>
									</div>
									<!-- product details -->
						
							
					
						


		
			</div>		
		</div>
	</div>		<!-- /FORMS -->
					
						
						<!-- Save -->	
						<p class="btn-toolbar" style="text-align: center; padding-bottom: 37px;">							
							<button class="btn btn-success">Add  Nodal Center</button></form>
					<a href="<?php echo base_url('nodal-coordinator')?>">	<button class="btn btn-warning">Cancel</button>	</a>
						</p>
						<!-- /Save -->												
						</form>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>