<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?php echo base_url();?>assests/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?php echo base_url();?>assests/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php echo base_url();?>assests/bootstrap-dist/js/bootstrap.min.js"></script>
	
		
	<!-- DATE RANGE PICKER -->
	<script src="<?php echo base_url();?>assests/js/bootstrap-daterangepicker/moment.min.js"></script>
	
	<script src="<?php echo base_url();?>assests/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- BLOCK UI -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	<!-- SPARKLINES -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/sparklines/jquery.sparkline.min.js"></script>
	<!-- EASY PIE CHART -->
	<script src="<?php echo base_url();?>assests/js/jquery-easing/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/easypiechart/jquery.easypiechart.min.js"></script>
	<!-- FLOT CHARTS -->
	<script src="<?php echo base_url();?>assests/js/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>assests/js/flot/jquery.flot.time.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/flot/jquery.flot.selection.min.js"></script>
	<script src="<?php echo base_url();?>assests/js/flot/jquery.flot.resize.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/flot/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/flot/jquery.flot.stack.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/flot/jquery.flot.crosshair.min.js"></script>
	<!-- TODO -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jquery-todo/js/paddystodolist.js"></script>
	<!-- TIMEAGO -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/timeago/jquery.timeago.min.js"></script>
	<!-- FULL CALENDAR -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/fullcalendar/fullcalendar.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- GRITTER -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/gritter/js/jquery.gritter.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="<?php echo base_url();?>assests/js/script.js"></script>
	<script src="<?php echo base_url();?>assests/js/charts.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("flot_charts");  //Set current page
			App.init(); //Initialise plugins and elements
			Charts.initCharts();
			Charts.initPieCharts();
		});
	</script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	
	
	<!-- /JAVASCRIPTS -->
</body>
</html>