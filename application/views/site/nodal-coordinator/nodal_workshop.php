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

		
        <!-- end fixedmenu -->
		<?php $ses_data=$this->session->userdata('user_details'); ?>
          <!-- end servicesbox -->
		<section class="strip-colors">
		<div class="container">
			<div>
				<div class="col-md-4 text-center workshop-run">
					<div class="icon-box-top">
					<div class="value-disp">
						<p align="left" class="value-list">
							<span class="counter" style="display:inline-block; color:#fff;">150</span><span class="resu-top">WORKSHOPS RUN</span>
						</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center labs-taken">
					<div class="icon-box-top">
						<div class="value-disp">
						<p align="left" class="value-list">
							<span class="counter" style="display: inline-block;color:#fff;">7,500</span><span class="resu-top">LABS TAKEN</span>
						</p>
					</div></div>
				</div>
				<div class="col-md-4 text-center node-centers">
					<div class="icon-box-top">
						<div class="value-disp">
						<p align="left" class="value-list">
							<span class="counter" style="display: inline-block;color:#fff;">250</span><span class="resu-top">NODAL CENTERS

</span>
						</p>
					</div></div>
				</div>
				
			</div>
		</div>
        
		</section>
		<!-- end homerecentportfolio -->
        <div class="container" style="margin-top:30px;">
      
 <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert col-md-12 alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">�</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>
		<div>
<style>
.nav_li_pad {
    margin-left: 0px !important;
}
</style>
<script>
var links = [
  'http://ideativedigital.com/outreach/uploads/workshop_material/1437747400-13.docx',
  'http://ideativedigital.com/outreach/uploads/workshop_material/1438160401-33.docx',
'http://ideativedigital.com/outreach/uploads/workshop_material/1438160432-63.docx',
  'http://ideativedigital.com/outreach/uploads/workshop_material/1438160417-43.docx'
];

var links1 = [
  'http://ideativedigital.com/outreach/uploads/presentation_reporting/1438160432-63.docx',
  'http://ideativedigital.com/outreach/uploads/presentation_reporting/1438160432-63.docx'
];
function downloadAll(urls) {
  var link = document.createElement('a');

  link.setAttribute('download', null);
  link.style.display = 'none';

  document.body.appendChild(link);

  for (var i = 0; i < urls.length; i++) {
    link.setAttribute('href', urls[i]);
    link.click();
  }

  document.body.removeChild(link);
}
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function datadiding(){
var geocoder = new google.maps.Geocoder();
var address = document.getElementById("location").value;
geocoder.geocode( { 'address': address}, function(results, status) {

  if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
    var longitude = results[0].geometry.location.lng();
	$( "#latitude1" ).val( latitude );
	$( "#longitude1" ).val( longitude );
	} 
}); 
}
</script>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active tab-workshop"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >Guides & Material</a></li>
    <li role="presentation" class="tab-workshop nav_li_pad"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Active Workshops</a></li>
    <li role="presentation" class="tab-workshop nav_li_pad"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">New Workshop</a></li>
    <li role="presentation" class="tab-workshop nav_li_pad"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">History</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
 <div class="container placemetns-top">
 
 
 
 <div>
<h2 class="head-events">Guides</h2>
</div>
			<?php if($getGuidesMaterial){ foreach($getGuidesMaterial as $guidance){ ?>
			<div class="col-md-12 align-top-botm">
				<!--<div class="col-md-1 mid-align"></div>-->
				<div class="col-md-5 mid-align" class="icon-ok">&#10148;&nbsp;&nbsp;<?php echo $guidance['document_name'];?></div>
			</div>
			<?php }} else{?>
		<div class="col-md-12 align-top-botm">	
				<div class="col-md-1 mid-align">&#10148;</div>
				<div class="col-md-3 mid-align" class="icon-ok">No Guides & Material Documents</div>
			</div>
			<?php } ?>
			
			<div class="col-md-12 align-top-botm">
				<h2 class="head-events">Workshop Material</h2><p class="print-color"><strong>For Print </strong><a class="download-clr" onclick="downloadAll(window.links)">Download all</a></p>
				<?php if($getWorkshopMetirial){ foreach($getWorkshopMetirial as $workshop){ ?>
				<div class="col-md-11 mid-align"><a href="<?php echo base_url().'uploads/workshop_material/'.$workshop['document_path'];?>" download><span class="btn">PDF</span></a>&nbsp;&nbsp;<?php echo $workshop['document_name'];?></div>
				<?php }} else{?>
				
				<div class="col-md-11 mid-align">No Workshop Material Documents</div>
				<?php } ?>
				
			</div>
			
			<div class="col-md-12 align-top-botm">
				<p class="print-color">
				<strong>Presentation & Reporting </strong><a href="http://ideativedigital.com/outreach/assets/download-pdf/Outreach%20Schema.pdf" download class="download-clr">Download all</a>
                </p>
				<?php if($getPresentationReporting){ foreach($getPresentationReporting as $reporting){ ?>
				<div class="col-md-11 mid-align"><a href="<?php echo base_url().'uploads/presentation_reporting/'.$workshop['document_path'];?>" download><span class="btn">PDF</span></a>&nbsp;&nbsp;<?php echo $reporting['document_name'];?></div>
			<?php }} else{?>
				
				<div class="col-md-11 mid-align">No Presentation & Reporting Documents</div>
				<?php } ?>
			</div>
			</br>
			
		</div>
    

</div>
    <div role="tabpanel" class="tab-pane" id="profile">
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">

											<thead>

												<tr>

													<th>S.No</th>

													<th>Date Of Workshop</th>
													<th>Name</th>

													<th>Location</th>
													<th>Participating institutes</th>
												<!--	<th>Date</th><th>Submit Reports</th>-->
													<th>No of participants</th>
													<th>No of sessions</th>
													<th>Duration of sessions</th>
													<th>Subject of sessions</th>
													<th>Labs planned</th>
													<th style="width: 125px!important;">Status</th>
													
													<th>Action</th>
												
												</tr>
											</thead>
												<?php
												//echo "<pre>";
												//print_r($get_workshop_upcoming1);
												
											foreach($get_workshop_upcoming1 as $workshopdata){												?>
												
												<tr class="gradeX">
													<td><?php echo $workshopdata['workshop_id']; ?></td>
													<td><?php echo date('M jS Y',strtotime($workshopdata['date'])); ?></td>
													<td><?php echo $workshopdata['name']; ?></td>
													<td><?php echo $workshopdata['location']; ?></td>
													<td><?php echo $workshopdata['participate_institute']; ?></td>
													<!--<td><?php echo $workshopdata['date'];  ?></td>-->
													<td><?php echo $workshopdata['number_of_participants'];  ?></td>
													<td><?php echo $workshopdata['no_of_sessions'];  ?></td>
													<td><?php echo $workshopdata['durationofsessions']; ?></td>
													<td><?php echo $workshopdata['subject_of_session'];  ?></td>
													<td><?php echo $workshopdata['labs_plan'];  ?></td>
													<!--<td><?php echo $workshopdata['other_details']; ?></td>-->
													<td>
	<a style="text-decoration:none;cursor:pointer;"  id="s-<?php echo  $workshopdata['workshop_status'];?>" class="activeclass btn-xs <?php if($workshopdata['workshop_status']== 2) { ?>btn-success <?php }else{ echo "btn-danger"; }?>" > 
		<?php if($workshopdata['workshop_status'] == 2) {
			echo "Scheduled";
			}elseif($workshopdata['workshop_status'] == 1){
		 echo "Pending approval"; 
	}else{
		 echo "delete";} ?></a></td>
		 	<td>
			<?php if($workshopdata['report_id']){ echo "submitted successfully"; }else{?><a href="<?php echo site_url('home/submitReports');?>/<?php echo $workshopdata['workshop_id']; ?>">View Reports</a><?php } ?>&nbsp;&nbsp;&nbsp;
		 		<?php if($workshopdata['report_id']){ echo ""; }else{?><a href="<?php echo site_url('home/editWorkshop');?>/<?php echo $workshopdata['workshop_id']; ?>">Edit</a><?php } ?>

		 	</td>


													</tr>
													<?php
											}
													?>
</table>
</br>
</br>


			</div>
    <div role="tabpanel" class="tab-pane" id="messages">
	
	 <!-- FORMS -->
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<!-- product details -->								
									<div class="col-md-10">
										<div class="box border dark gray">
											<div class="box-title">
												<h4 class="title-font">Plan a New Workshop</h4>
											</div>
											<div class="box-body big">
											<span id="error" class='error'></span>
												<form class="form-horizontal" method="post" name="addStaff" id="addStaff" action="<?php echo site_url('home/addWorkshop');?>" role="form">
												  
												  <!-- Product Name -->
												  <div class="form-group">
													<label class="col-sm-3 label-names">Name<span style="color:red">*</span></label>
													<div class="col-sm-4">
													  <input type="text" required  name = "name" id = "name" class="required form-control no-radius" value="<?php echo set_value('name');?>">
													  <?php echo "<span style='color:red'>".form_error('name')."</span>"; ?>
													</div>
												  </div>
												    <div class="form-group">
													<label class="col-sm-3 label-names">Location<span style="color:red">*</span></label>
													<div class="col-sm-6">
													  <input type="text" required name = "location" id = "location" class=" form-control no-radius" value="<?php echo set_value('location');?>" onchange="datadiding()">
													  															<input type="hidden" name="latitude" id="latitude1" value="">
															<input type="hidden" name="longitude" id="longitude1" value="">
													  <?php echo "<span style='color:red'>".form_error('location')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 label-names">Participating institutes<span style="color:red">*</span></label>
													<div class="col-sm-6">
													 <textarea  required name="participate_institute" id="participating_institutes" class="text-areawidth"><?php echo set_value('participating_institutes');?></textarea>
													  <?php echo "<span style='color:red'>".form_error('participating_institutes')."</span>"; ?>
													</div>
												  </div>	
												  <div class="form-group">
												  
													<label class="col-sm-3 label-names">Date<span style="color:red">*</span></label>
													<div class="col-sm-8">
													  <input type="date" required name = "date" id = "mou" class="required" value="<?php echo set_value('mou');?>">
													  <?php echo "<span style='color:red'>".form_error('mou')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 label-names">Number of participants</label>
													<div class="col-sm-8">
													  <input type="text" name = "number_of_participants" id = "participants" class="required required-width no-radius" value="<?php echo set_value('participants');?>">
													  <?php echo "<span style='color:red'>".form_error('participants')."</span>"; ?>
													</div>
												  </div>
												  <div class="newaa"><h4style="border-bottom:1px solid#e1e1e1">Agenda for workshop</h4></div>
												  <div class="form-group">
													<label class="col-sm-3 label-names">Number of sessions</label>
													<div class="col-sm-8">
													  <input type="text" name = "no_of_sessions" id = "numberofsessions" class="required no-radius required-width" value="<?php echo set_value('numberofsessions');?>">
													  <?php echo "<span style='color:red'>".form_error('numberofsessions')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 label-names">Duration of sessions</label>
													<div class="col-sm-8">
													  <input type="text" name = "durationofsessions" id = "durationofsession" class="required no-radius required-width" value="<?php echo set_value('durationofsession');?>">
													  <?php echo "<span style='color:red'>".form_error('durationofsession')."</span>"; ?>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 label-names">Subject of sessions</label>
													<div class="col-sm-6">
													  <input type="text" name = "subject_of_session" id = "numberofsessions" class="required form-control no-radius" value="<?php echo set_value('numberofsessions');?>">
													  <?php echo "<span style='color:red'>".form_error('numberofsessions')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-3 label-names">Labs planned</label>
													<div class="col-sm-6">
													  <input type="text" name = "labs_plan" id = "labplanned" class="required form-control no-radius" value="<?php echo set_value('labplanned');?>">
													  <?php echo "<span style='color:red'>".form_error('labplanned')."</span>"; ?>
													</div>
												  </div><div class="form-group">
													<label class="col-sm-3 label-names">Other details</label>
													<div class="col-sm-6">
													  <textarea class="form-control no-radius" rows="3" name="other_details" id="other"><?php echo set_value('other');?></textarea>
													  <?php echo "<span style='color:red'>".form_error('other')."</span>"; ?>
													</div>
													<?php
													
													$ses_data=$this->session->userdata('user_details');
													
													?>
													<input type="hidden" name="uid" value="<?php echo $ses_data['id']; ?>">
													<input type="hidden" name="outreach_id" value="<?php echo $ses_data['outreach_id']; ?>">
												  </div>											  
												
												  
											</div>
										</div>
									</div>
									
			</div>		
		</div>
	</div>		<!-- /FORMS -->
		
						
						<!-- Save -->	
						<p class="btn-toolbar">							
							<button class="btn btn-success">Submit</button></form>
					<a href="<?php echo base_url('nodal-coordinator')?>">	<button class="btn btn-warning">Cancel</button>	</a>
						</p>
						<!-- /Save -->												
						</form>
						
						
	</div>
    <div role="tabpanel" class="tab-pane" id="settings">
	
	 <div class="container placemetns-top">
 
 
 
 <div>
<h2 class="head-events"></h2>
</div>
	
	
										<!-- <div class="col-md-12 align-top-botm padding-top-tag">
				
				<div class="col-md-1">
					Date			
				</div>
				
				                <div class="col-md-2">Location</div>
                <div class="col-md-1">Participants</div>
                <div class="col-md-1">Experiments</div>
                <div class="col-md-3 ">Participating Institutes</div>
                <div class="col-md-2">Nodal Coordinator</div>
				<div class="col-md-2">&nbsp;</div>
			</div>-->
						<style>
														
tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-below > .nav-tabs {
  border-top: 1px solid #ddd;
}

.tabs-below > .nav-tabs > li {
  margin-top: -1px;
  margin-bottom: 0;
}

.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

.tabs-below > .nav-tabs > li > a:hover,
.tabs-below > .nav-tabs > li > a:focus {
  border-top-color: #ddd;
  border-bottom-color: transparent;
}

.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover,
.tabs-below > .nav-tabs > .active > a:focus {
  border-color: transparent #ddd #ddd #ddd;
}

.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
     -moz-border-radius: 4px 0 0 4px;
          border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
  text-decoration:underline;
}

.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
  border-left: 1px solid #ddd;
}

.tabs-right > .nav-tabs > li > a {
  margin-left: -1px;
  -webkit-border-radius: 0 4px 4px 0;
     -moz-border-radius: 0 4px 4px 0;
          border-radius: 0 4px 4px 0;
}

.tabs-right > .nav-tabs > li > a:hover,
.tabs-right > .nav-tabs > li > a:focus {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover,
.tabs-right > .nav-tabs .active > a:focus {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}

.bgclr-nobg{
	background:none !important;	
	color:#000 !important;
	border:none !important;	
}

.no-border{
	border:none!important;	
}
.only-no-border{
	border:none;	
}
													</style>
												<?php
												
											foreach($get_workshop_history as $workshopdata){
												$newDate = date("M", strtotime($workshopdata['date']));												
												$newDated = date("d", strtotime($workshopdata['date']));
												?>
                                                
                                                
                                                 <div class="col-md-12 align-top-botm">
				
				
                <div class="col-md-1">
					<div class="month-box"><span><?php echo $newDate; ?> <br/><?php echo $newDated; ?></span></div>				
				</div>
				
				 <div class="col-md-2"><?php echo $workshopdata['location']; ?></div>
                <div class="col-md-2"><?php echo $workshopdata['number_of_participants'];  ?>participants</div>
                <div class="col-md-2"><?php echo $workshopdata['number_of_participants'];  ?>experiments</div>
                 <div class="col-md-2"> <a href="#" id='feedback-<?php echo $workshopdata["workshop_id"]; ?>'>viewReport</a></div>
             <div style='display:none' id="frn_comment-<?php echo $workshopdata["workshop_id"]; ?>"></br></br></br>
			<div class="tabbable tabs-left">
        <ul class="nav nav-tabs no-border">
          <li class="active"><a href="#a-<?php echo $workshopdata["workshop_id"]; ?>" data-toggle="tab" class="bgclr-nobg">Attendance sheets</a></li>
          <li ><a href="#b-<?php echo $workshopdata["workshop_id"]; ?>" data-toggle="tab" class="bgclr-nobg">College report</a></li>
          <li><a href="#c-<?php echo $workshopdata["workshop_id"]; ?>" data-toggle="tab" class="bgclr-nobg">Workshop Photos</a></li>
          <!--<li><a href="#d" data-toggle="tab" class="bgclr-nobg">Comments</a></li>-->
        </ul>
        <div class="tab-content only-no-border">
         <div class="tab-pane active" id="a-<?php echo $workshopdata["workshop_id"]; ?>"><div style="float: right; margin-right: 50%;  ">
         	<img src="http://testingserver.website/outreach/uploads/attend_sheet/<?php echo $workshopdata['upload_experiment_sheet']; ?>" width="250px" height="250px"></div>
         	    	    	
         	         	</div>
         	
         <div class="tab-pane" id="b-<?php echo $workshopdata["workshop_id"]; ?>">
         	<div style="float: right; margin-right: 50%;  ">
         		<img src="http://testingserver.website/outreach/uploads/college_report/<?php echo $workshopdata['college_report']; ?>"width="250px" height="250px"></div>
         		

         		</div>
         <div class="tab-pane" id="c-<?php echo $workshopdata["workshop_id"]; ?>">
		 <img src="http://testingserver.website/outreach/uploads/workshop_photos/<?php echo $workshopdata['workshop_photos']; ?>" width="250px" height="250px">
		 </div>
        
        </div>
      </div>
			 </div>
			 
			 
        <script type="text/javascript">
	$("#feedback-<?php echo $workshopdata["workshop_id"]; ?>").click(function(){
		//$("#frn_rating").css('display','block');
		if($('#frn_comment-<?php echo $workshopdata["workshop_id"]; ?>').css('display') == 'none'){ 
		   $('#frn_comment-<?php echo $workshopdata["workshop_id"]; ?>').show('slow'); 
		} else { 
		   $('#frn_comment-<?php echo $workshopdata["workshop_id"]; ?>').hide('slow'); 
		}
	});
</script>
                
			</div>
                                                
                    	<?php
											}
													?>  
	
	
	
    					
										</div>
  </div>
</div>
</div>

 
 
        
        <!--------- Banner right panel ------>
        <!-- end homeslider -->	
        
        </div>
        
		
		
        
        
        <section class="infoarea whites">
        <div class="container placemetns-top">
		

		</div>
        </section>