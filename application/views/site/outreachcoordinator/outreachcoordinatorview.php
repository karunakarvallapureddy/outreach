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
		<?php $ses_data=$this->session->userdata('user_details'); 
		?>
		
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
<div role="tabpanel" class="tab-pane" id="settings">

		<!-- end homerecentportfolio -->
        <div class="container">
      
    
 <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert col-md-12 alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">�</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>
						<div class="row">
							<div class="col-md-12" style="margin-top: 30px;">
								<!-- BOX -->
								<div class="box solid gray">
									<div class="box-title">
										<h4>Manage Nodal Centers</h4>
										<div class="tools hidden-xs" style="margin-top: -49px; float: right;">
											<a href="<?php echo site_url('site/addNodal');?>"><button class="btn btn-xs btn-inverse"style="float: right;">+New Nodal Center</button></a>
										</div>
									</div>
									<div class="box-body">
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Nodal Coordinator</th>
																<th>Nodal Center</th>								
													 <th>Email id</th> 
													<th>Date registered</th>
													<th>Workshops</th>
													<th>Participants</th>
													<th>Experiments</th>
																
													<th>Status</th>													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php   foreach($get_workshop as $coordinator) { ?>
												<tr class="gradeX">
													<td><?php echo $coordinator['id'];;?></td>
													<td><?php echo ucfirst($coordinator['name']);?>	</td>
																									
													<td><?php echo $coordinator['center'];?></td>													
													<td><?php echo $coordinator['email'];?></td>													
													<td><?php echo $coordinator['created_on'];?></td>													
													<td><?php echo $coordinator['workshop'];?></td>													
													<td><?php echo $coordinator['participants'];?></td>													
													<td><?php echo $coordinator['experiments'];?></td>													
													<td>
													
													<a style="text-decoration:none;cursor:pointer;" id="s-<?php echo  $coordinator['id'];?>"   class="activeclass btn-xs <?php if($coordinator['status'] == 1) { ?>btn-success <?php }else{ echo "btn-danger"; }?>" > <?php if($coordinator['status'] == 1) { ?> Active <?php }elseif($coordinator['status'] == 2){ echo "In Active"; }else{ echo "delete";} ?></a>
													
													</td>
													<td>
														<!--<a href="<?php echo site_url('admin/home/editCoordinator/'.base64_encode($coordinator['id']));?>"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o"></i> Edit</button></a>&nbsp;-->
												<?php if($coordinator['status'] != 3){ ?> <a onclick = "return confirm('are you sure you want to delete the coordinator');" href="<?php echo base_url('home/deleteNodalcenter/'.base64_encode($coordinator['id']));?>"><button class="btn btn-xs btn-danger"><i class="fa fa-exclamation-circle"></i> Delete</button></a> <?php } ?>
													</td>
												</tr>
												<?php  } ?>

											</tbody>
											<tfoot>
											</tfoot>
										</table>
										<div class="row" style="float:right">
										<?php echo $pagination;?>
										</div>
									</div>
								</div>
								<!-- /BOX -->
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