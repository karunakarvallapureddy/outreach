<?php 
foreach ($editWorkshop1 as $editWorkshop) {

?>
<div role="tabpanel" class="tab-pane container" id="messages">
	<!-- FORMS -->
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<!-- product details -->								
									<div class="col-md-12">
										<div class="box border dark gray">
											<div class="box-title">
												<h4>Submit Reports</h4>
												<p>From the workshops conducted report the following information</p>
											</div>
											<div class="box-body big">
											<span id="error" class='error'></span>
												<form class="form-horizontal" method="post" enctype="multipart/form-data"  name="addStaff" id="addStaff" action="<?php echo site_url('home/submitReport');?>" role="form">
											 <input type="hidden" name="workshop_id" value="<?php echo  $editWorkshop['workshop_id'];  ?> " />
												  <!-- Product Name -->
												  <div class="form-group">
													<label class="col-sm-3 label-names">Number of participants attended:<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="number" onkeypress="return onlyAlphabets(event,this);"name = "participate_attend" id = "participate_attend" class="required form-control no-radius required-width" >													
													    <?php echo "<span style='color:red'>".form_error('participate_attend')."</span>"; ?>
													</div>
												  </div>
												    <div class="form-group">
													<label class="col-sm-3 label-names">Number of experiments conducted:<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="number" onkeypress="return onlyAlphabets(event,this);" name = "participate_experiment" id = "participate_experiment" class=" form-control no-radius required-width" >
													  <?php echo "<span style='color:red'>".form_error('participate_experiment')."</span>"; ?>
													</div>
												  </div>
												 	
												<div class="newaa">Upload documents</div>
												  <div class="form-group">
													<label class="col-sm-3 label-names">Attendance sheet<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="file" name = "upload_attend_sheet" id = "upload_attend_sheet" class="required form-control no-radius" >
													  <?php echo "<span style='color:red'>".form_error('upload_attend_sheet')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-3 label-names">College report<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="file"  name = "college_report" id = "college_report" class="required form-control no-radius" >
													  <?php echo "<span style='color:red'>".form_error('college_report')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-3 label-names">Workshop photos<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="file" class="form-control no-radius" name="workshop_photos">
													  <?php echo "<span style='color:red'>".form_error('workshop_photos')."</span>"; ?>
													</div>
												  </div>	
												  <div class="form-group">
													<label class="col-sm-3 label-names">Comments and Feedback Positive<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <textarea class="form-control no-radius" rows="3" name="comments_positive"></textarea>
													  <?php echo "<span style='color:red'>".form_error('other_details')."</span>"; ?>
													</div>
												  </div>	
												   <div class="form-group">
													<label class="col-sm-3 label-names">Negative<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <textarea  class="form-control no-radius" rows="3" name="comments_negative"></textarea>
													  <?php echo "<span style='color:red'>".form_error('comments_negative')."</span>"; ?>
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
						<p class="btn-toolbar">							
							<button name="submit" value="submit" class="btn btn-success clr-btn">Submit</button>
							<button name="submit" value="save" class="btn btn-warning clr-btn-org">Save</button>
					<a href="<?php echo base_url('nodal-coordinator')?>">	<button class="btn clr-btn-gray">Cancel</button>	</a>
						</p>
						<!-- /Save -->												
						</form>
	</div>
	<?php
	} ?>