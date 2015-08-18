<script src="<?php echo base_url();?>site/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>site/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>site/js/jquery.simplyscroll.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>site/css/jquery.simplyscroll.css" media="all" type="text/css">
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script type="text/javascript">
(function($) {
	$(function() {
		$("#scroller").simplyScroll({orientation:'vertical',customClass:'vert'});
		$("#scroller123").simplyScroll({orientation:'vertical',customClass:'vert'});
	});
})(jQuery);
</script>

<style>
	.boxedlayout .boxedcontent{
		  margin-top: 104px!important;
	}
	.strip-colors {
    margin-top: 0px!important;
    background-color: #196B9E;
}
</style>
		
        <!-- end fixedmenu -->
		<?php $ses_data=$this->session->userdata('user_details'); ?>
          <!-- end servicesbox -->
		
<section class="strip-colors">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="icon-box-top">
						<h1 align="center">WORKSHOPS RUN</h1>
						<p>
							<span class="counter" style="display: inline-block; color:#fff;width: 32%">150</span>
						</p>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="icon-box-top">
						<h1 align="center">LABS TAKEN</h1>
						<p>
							<span class="counter" style="display: inline-block;color:#fff; width: 32%">7,500</span>
						</p>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="icon-box-top">
						<h1 align="center">NODEL CENTERS</h1>
						<p>
							<span class="counter" style="display: inline-block;color:#fff; width: 32%">250</span>
						</p>
					</div>
				</div>
				
			</div>
		</div>
        
		</section>
		<!-- end homerecentportfolio -->
        <div class="container">
      
 
		<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active" style="width: 25%;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="padding: 19px 15px!important; color: ">Guides & Material</a></li>
    <li role="presentation" style="width: 25%;"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="padding: 19px 15px!important;">Active Workshops</a></li>
    <li role="presentation" style="width: 25%;"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="padding: 19px 15px!important;">New Workshop</a></li>
    <li role="presentation" style="width: 25%;"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" style="padding: 19px 15px!important;">History</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><div class="guides"style="border-bottom: 1px solid; width: 50%;">Guides</div>

<ul>
	<li style="list-style-type: none;">Planning a workshop</li>
	<li style="list-style-type: none;">Conducting a workshop</li>
</ul>
<div><b>Workshop Material</b></div>
<ul>
	<li style="list-style-type: none;">For Print

Download all</li>

	<li style="list-style-type: none;"> Attendance sheet</li>
	<li style="list-style-type: none;">Feedback form</li>
	<li style="list-style-type: none;">Flyers</li>
	<li style="list-style-type: none;">Banners</li>
</ul>
<div><b>Presentation & Reporting</b></div>
<ul>
<li style="list-style-type: none;"> Virtual Labs Introduction presentation</li>
<li style="list-style-type: none;"> College Report format</li>

</ul>

</div>
    <div role="tabpanel" class="tab-pane" id="profile">
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">

											<thead>

												<tr>

													<th>S.No</th>

													<th>Name</th>

													<th>Location</th>

													<!-- <th>Permission</th> -->

													<th>Participating institutes</th>

													<th>Date</th>

													<th>Number of participants</th>
													
													<th>Number of sessions</th>
													<th>Duration of sessions</th>
													<th>Agenda  Number of sessions</th>
													<th>Subject of sessions</th>
													<th>Labs planned</th>
													<th>Other details</th>
													<th>Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
												<?php
											foreach($get_workshop as $workshopdata){												?>
												
												<tr class="gradeX">
													<td><?php echo $workshopdata['first_name']; ?></td>
													<td><?php echo $workshopdata['last_name']; ?></td>
													<td><?php echo $workshopdata['participating_institutes']; ?></td>
													<TD><?php echo $workshopdata['mou'];  ?></TD>
													<td><?php echo $workshopdata['works'];  ?></td>
													<td><?php echo $workshopdata['participants'];  ?></td>
													
													<td><?php echo $workshopdata['experiments']; ?></td>
													<td><?php echo $workshopdata['durationofsession'];  ?></td>
													<td><?php echo $workshopdata['workshop'];  ?></td>
													<td><?php echo $workshopdata['subject']; ?></td>
													<td><?php echo $workshopdata['labplanned']; ?></td>
													<td><?php echo $workshopdata['other']; ?></td>
													<td><a href="<?php echo site_url('home/editWorkshop');?>/<?php echo $workshopdata['id']; ?>">Edit</a></td>
													<td><a href="<?php echo site_url('home/deleteWorkshop');?>/<?php echo $workshopdata['id']; ?>">Delete</a></td>
													</Tr>
													<?php
											}
													?>
</table>
			</div>
    <div role="tabpanel" class="tab-pane" id="messages">
	<!-- FORMS -->
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<!-- product details -->								
									<div class="col-md-6">
										<div class="box border dark gray">
											<div class="box-title">
												<h4>Plan a New Workshop</h4>
											</div>
											<div class="box-body big">
											<span id="error" class='error'></span>
												<form class="form-horizontal" method="post" name="addStaff" id="addStaff" action="<?php echo site_url('home/addWorkshop');?>" role="form">
												  
												  <!-- Product Name -->
												  <div class="form-group">
													<label class="col-sm-4 control-label">Name</label>
													<div class="col-sm-8">
													  <input type="text"  onkeypress="return onlyAlphabets(event,this);"name = "first_name" id = "first_name" class="required form-control" value="<?php echo set_value('first_name');?>">
													  <?php echo "<span style='color:red'>".form_error('first_name')."</span>"; ?>
													</div>
												  </div>
												    <div class="form-group">
													<label class="col-sm-4 control-label">Location</label>
													<div class="col-sm-8">
													  <input type="text" onkeypress="return onlyAlphabets(event,this);" name = "last_name" id = "last_name" class=" form-control" value="<?php echo set_value('last_name');?>">
													  <?php echo "<span style='color:red'>".form_error('last_name')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Participating institutes</label>
													<div class="col-sm-8">
													 <textarea  name="participating_institutes"></textarea>
													  <?php echo "<span style='color:red'>".form_error('email')."</span>"; ?>
													</div>
												  </div>	
												  <div class="form-group">
													<label class="col-sm-4 control-label">Date</label>
													<div class="col-sm-8">
													  <input type="date" name = "mou" id = "mou" class="required form-control" value="<?php echo set_value('mou');?>">
													  <?php echo "<span style='color:red'>".form_error('mou')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Number of participants</label>
													<div class="col-sm-8">
													  <input type="text" name = "works" id = "works" class="required form-control" value="<?php echo set_value('works');?>">
													  <?php echo "<span style='color:red'>".form_error('works')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Agenda for workshop</label>
													<div class="col-sm-8">
													  <input type="text" name = "participants" id = "participants" class="required form-control" value="<?php echo set_value('participants');?>">
													  <?php echo "<span style='color:red'>".form_error('participants')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Number of sessions</label>
													<div class="col-sm-8">
													  <input type="text" name = "experiments" id = "experiments" class="required form-control" value="<?php echo set_value('experiments');?>">
													  <?php echo "<span style='color:red'>".form_error('experiments')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-4 control-label">Duration of sessions</label>
													<div class="col-sm-8">
													  <input type="text" name = "durationofsession" id = "experiments" class="required form-control" value="<?php echo set_value('experiments');?>">
													  <?php echo "<span style='color:red'>".form_error('experiments')."</span>"; ?>
													</div>
												  </div><div class="newaa">Agenda for workshop</div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Number of sessions</label>
													<div class="col-sm-8">
													  <input type="text" name = "workshop" id = "experiments" class="required form-control" value="<?php echo set_value('experiments');?>">
													  <?php echo "<span style='color:red'>".form_error('experiments')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-4 control-label">Subject of sessions</label>
													<div class="col-sm-8">
													  <input type="text" name = "subject" id = "experiments" class="required form-control" value="<?php echo set_value('experiments');?>">
													  <?php echo "<span style='color:red'>".form_error('experiments')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-4 control-label">Labs planned</label>
													<div class="col-sm-8">
													  <input type="text" name = "labplanned" id = "experiments" class="required form-control" value="<?php echo set_value('experiments');?>">
													  <?php echo "<span style='color:red'>".form_error('experiments')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-4 control-label">Other details</label>
													<div class="col-sm-8">
													  <textarea class="form-control" rows="3" name="other"></textarea>
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
						<p class="btn-toolbar">							
							<button class="btn btn-success">Add  Nodal Center</button></form>
					<a href="<?php echo base_url('admin/staff')?>">	<button class="btn btn-warning">Cancel</button>	</a>
						</p>
						<!-- /Save -->												
						</form>
	</div>
    <div role="tabpanel" class="tab-pane" id="settings">
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">

											<thead>

												<tr>

													<th>S.No</th>
											<th>Date</th>
													<th>Name</th>

													

													<!-- <th>Permission</th> -->

													

		

													<th>Number of participants</th>
													<th>experiments</th>
													
													
												</tr>
											</thead>
												<tr class="gradeX">

													<td>JUL 1</td>
													<td>GNIT, Warangal</td>
													<TD>BVRIT Warangal</TD>
													
													<td>200 participantS</td>
													
													
													
													<td>578 experiments</td>
													</TR>
</table></div>
  </div>

</div>

<style>
	.margin-bottom-less{
		margin-bottom:0px;
	}
	
	.title-border-line{
	  margin-bottom: 23px;
  	  border-bottom: 1px solid #CCC;
  	  }
  	
  	  
</style> 
 
        
        <!--------- Banner right panel ------>
        <!-- end homeslider -->	
        
        </div>
        
		
		
        
        
        <section class="infoarea whites">
        <div class="container placemetns-top">
		
			
			<style>
					   .month-box{
					   	width:45px;
					   	height:45px;
					   	border:1px solid #CCC;
					   	border-radius:5px;
					   	text-align:center;
					   	
					   }
					   .month-box span{
					   	font-size:14px;
					   }	
					   .align-top-botm{
					    margin-top:8px;
					    margin-bottom:8px;
					   }
			</style>
			
		</div>
        </section>