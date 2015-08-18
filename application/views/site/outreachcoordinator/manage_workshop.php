

 <meta name="content-type"           content="application/vnd.ms-powerpoint"/>
 <meta name="content-type"           content="application/vnd.ms-word"/>
 <meta name="content-type"           content="application/vnd.ms-word"/>
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
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.gantt.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.charts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.maps.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.powercharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.widgets.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/fusioncharts/themes/fusioncharts.theme.fint.js"></script>

		
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
							<span class="counter" style="display: inline-block;color:#fff;">250</span><span class="resu-top">NODEL CENTERS

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

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active tab-workshop"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >Upcoming Workshops</a></li>
    <li role="presentation" class="tab-workshop"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pending for Approval</a></li>
    <li role="presentation" class="tab-workshop"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Workshop History</a></li>
    <li role="presentation" class="tab-workshop"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Nodal Coordinator Training</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
 <div class="container placemetns-top">
 
 
 
 <div>
<h2 class="head-events">Upcoming Workshops</h2>
</div>

 <div class="col-md-12 align-top-botm">
				
				<div class="col-md-1">
					Date			
				</div>
				
				<div class="col-md-2">Location</div>
                <div class="col-md-2 ">Participants planned</div>
                <div class="col-md-3">Participating Institutes</div>
				<div class="col-md-3">Nodal Coordinator</div>
			</div>

			
			
			<?php
											foreach($get_workshop_upcoming as $workshopdata){
												$newDate = date("M", strtotime($workshopdata['date']));												
												$newDated = date("d", strtotime($workshopdata['date']));	
														?>
												
			<div class="col-md-12 align-top-botm">
				
				<div class="col-md-1">
					<div class="month-box"><span><?php echo $newDate; ?> <br/><?php echo $newDated; ?></span></div>				
				</div>
				
				<div class="col-md-2 mid-align"><?php echo $workshopdata['location']; ?></div>
                <div class="col-md-2 mid-align"><?php echo $workshopdata['number_of_participants']; ?></div>
                <div class="col-md-3 mid-align"><p style="font-size: 12px;line-height: 20px;text-align: justify;"><?php echo $workshopdata['participate_institute']; ?></p></div>
				
				<div class="col-md-3 mid-align"><?php echo $workshopdata['name']; ?></div>
			</div>
			<?php
											} 
			?>
			
		</div>
       
       

</div>

    <div role="tabpanel" class="tab-pane" id="profile">
     <div class="container placemetns-top">
 
 
 
 <div>
<h2 class="head-events"></h2>
</div>
										 <div class="col-md-12 align-top-botm">
            	<div class="col-md-1">
					Date			
				</div>
				
			<div class="col-md-2">Location</div>
                <div class="col-md-1">Participants</div>
                <div class="col-md-1">Experiments</div>
                <div class="col-md-3 ">Participating Institutes</div>
                <div class="col-md-2">Nodal Coordinator</div>
				<div class="col-md-2">&nbsp;</div>
			</div>
												<?php
												
											foreach($get_workshop as $workshopdata){
												?>
                                                
                                                
                                                 <div class="col-md-12 align-top-botm">
				
				
                <div class="col-md-1">
					<div class="month-box"><span><?php echo $newDate; ?> <br/><?php echo $newDated; ?></span></div>				
				</div>
				
				 <div class="col-md-2"><?php echo $workshopdata['location']; ?></div>
                <div class="col-md-1"><?php echo $workshopdata['number_of_participants'];  ?></div>
                <div class="col-md-1"><?php echo $workshopdata['number_of_participants'];  ?></div>
                <div class="col-md-3 "><p style="font-size: 12px;line-height: 20px;text-align: justify;"><?php echo $workshopdata['participate_institute']; ?></p></div>
                <div class="col-md-2"><?php echo $workshopdata['name']; ?></div>
                  <div class="col-md-2"><a href="<?php echo site_url('home/viewReport');?>/<?php echo $workshopdata['workshop_id']; ?>">viewReport</a></div>
				
                
                
			</div>
                                                
                    	<?php
											}
													?>    	</div>
       
       

</div>                      
												
													<?php /*?><td><?php echo $workshopdata['subject_of_session'];  ?></td>
													<td><?php echo $workshopdata['labs_plan'];  ?></td>
													<td>		<a href="<?php echo site_url('home/viewReport');?>/<?php echo $workshopdata['workshop_id']; ?>">View Report</a></td>
													<!--<td><?php echo $workshopdata['other_details']; ?></td>-->
													<td><?php echo  $workshopdata['report_status']; ?>
													
												<!--href="<?php //echo site_url('home/activeworkshop');?>/<?php //echo $workshopdata['workshop_id']; ?>"-->
	<a style="text-decoration:none;cursor:pointer;" id="s-<?php echo  $workshopdata['workshop_status'];?>" 
	class="activeclass btn-xs <?php if($workshopdata['workshop_status']== 2) { ?>btn-success <?php }else{ echo "btn-danger"; }?>" > 
		<?php if($workshopdata['workshop_status'] == 2) { ?> 
			Active
			 <?php }elseif($workshopdata['workshop_status'] == 1){
		 echo "pending"; 
	}else{
		 echo "delete";} ?></td><!--</a>-->
													<td>
														
												
														<a href="<?php echo site_url('home/deleteWorkshop');?>/<?php echo $workshopdata['workshop_id']; ?>">Delete</a></td><?php */?>



			
    <div role="tabpanel" class="tab-pane" id="messages">
<?php //echo json_encode($get_getworkshopgr); ?>
<?php //echo "getworkshopcreated".json_encode($getworkshopcreated); ?>
<?php 

//echo json_encode($get_name);
 ?>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var sessionChart = new FusionCharts({
        "type": "dragcolumn2d",
        "renderAt": "sessionContainer",
        "dataFormat": "json",
        'width':'800px',
        "dataSource":  
{
    "chart": {
        "caption": "Nodal coordinators performance",
        "xAxisName": "Nodal coordinators",
        "syncAxisLimits": "1",
        "yaxisname": "workshops",
        "showvalues": "0",
        "numvdivlines": "1",
        "divlinealpha": "30",
        "drawanchors": "0",
        "labelpadding": "1",
        "yaxisvaluespadding": "1",
        "useroundedges": "1",
        "legendborderalpha": "0",
        "showborder": "0"
    },
    "categories": [
        {
            "category": <?php echo json_encode($get_name); ?>
        }
    ],
    "dataset": [
        {
            "seriesname": "workshop",
            "allowDrag": "0",         
   "color": "A66EDD",
            "data": <?php echo json_encode($get_getworkshopgr); ?>
        },
        {
            "seriesname": "workshop c",
            "color": "F6BD0F",
            "data": <?php echo json_encode($getworkshopcreated); ?>
        }
    ]
}


  });
sessionChart.render();
})
</script>

<style>.padding-top-tag{padding-top: 33px;}</style>

<div id="sessionContainer"  class="flot-chart" style="height: 320px;"></div></br></br>

 
									



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
         	    
<!--<iframe src="./uploads/test.doc" width="300" height="300">
 <p>Your browser does not support iframes.</p>
</iframe>
<object width="400" height="400" data="./uploads/test.doc" type="application/msword"> </object>
<embed width="400" height="400" src="./uploads/test.doc" type="application/rtf">
<embed width="400" height="400" src="./uploads/test.doc" type="text/rtf">
</embed>	-->    	

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
    

	<?php /*
	<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">

											<thead>
												<tr>

													<th>S.No</th>
											<th>Date</th>
													<th>Name</th><th>Number of participants</th>
													<th>Reports</th>
													
													
												</tr>
											</thead>
											<?php
											foreach($get_workshop_history as $get_history){	
											?>
												<tr class="gradeX">

													<td><?php echo $get_history['workshop_id']; ?> </td>
													<td><?php echo $get_history['date']; ?></td>
													<td><?php echo $get_history['name']; ?></td>
													
													<td><?php echo $get_history['number_of_participants']; ?></td>
													
													
													
													<td>		<a href="<?php echo site_url('home/hostoryViewReport');?>/<?php echo $workshopdata['workshop_id']; ?>">View Report</a></td>
													</tr>
													
													<?php }
													?>
</table>
*/
?>	
	<?php /* <!-- FORMS -->
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
												
												  
											</div>
										</div>
									</div>
									<!-- product details -->
						
							
					
						


		
			</div>		
		</div>
	</div>		<!-- /FORMS -->
	<?php  			
						
						<!-- Save -->	
						<p class="btn-toolbar">							
							<button class="btn btn-success">Add  Nodal Center</button></form>
					<a href="<?php echo base_url('admin/staff')?>">	<button class="btn btn-warning">Cancel</button>	</a>
						</p>
						<!-- /Save -->												
						</form>*/	?>
	</div>
    <div role="tabpanel" class="tab-pane" id="settings">
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">

											<thead>
												<tr>

													<th>S.No</th>
											<th>Date</th>
													<th>Name</th><th>Number of participants</th>
													<th>experiments</th>
													
													
												</tr>
											</thead>
											<?php
											/*foreach($get_workshop_history as $get_history){	
											?>
												<tr class="gradeX">

													<td><?php echo $get_history['workshop_id']; ?> </td>
													<td><?php echo $get_history['date']; ?></td>
													<td><?php echo $get_history['name']; ?></td>
													
													<td><?php echo $get_history['number_of_participants']; ?></td>
													
													
													
													<td><?php //echo $get_history['workshop_id']; ?></td>
													</tr>
													
													<?php }*/
													?>
</table></div>
  </div>

</div>

 
 
        
        <!--------- Banner right panel ------>
        <!-- end homeslider -->	
        
        </div>
        
		
		
        
        
        <section class="infoarea whites">
        <div class="container placemetns-top">
		

		</div>
        </section>
