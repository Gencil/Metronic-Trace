<?php

/*
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo base_url(); ?>public/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

List Helper =
-------------
vmap,
flot,
pulsate,
daterange,
gritter,
fullcalendar,
piechart,
sparkline

*/

function get_js($js){

	if($js == 'vmap'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/jquery.vmap.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js\" type=\"text/javascript\"></script>
			<link href=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/jqvmap.css\" rel=\"stylesheet\" type=\"text/css\"/>
			
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js\" type=\"text/javascript\"></script>
			";
	}

	if($js == 'flot'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/flot/jquery.flot.min.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/flot/jquery.flot.resize.min.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/flot/jquery.flot.categories.min.js\" type=\"text/javascript\"></script>
			";
	}

	if($js == 'pulsate'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/jquery.pulsate.min.js\" type=\"text/javascript\"></script>
			";
	}

	if($js == 'datarange'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/bootstrap-daterangepicker/moment.min.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js\" type=\"text/javascript\"></script>
			<link href=\"".base_url()."public/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css\" rel=\"stylesheet\" type=\"text/css\"/>
			";
	}

	if($js == 'gritter'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/gritter/js/jquery.gritter.js\" type=\"text/javascript\"></script>
			<link href=\"".base_url()."public/assets/plugins/gritter/css/jquery.gritter.css\" rel=\"stylesheet\" type=\"text/css\"/>
			";
	}

	if($js == 'fullcalendar'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>
			<link href=\"".base_url()."public/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css\" rel=\"stylesheet\" type=\"text/css\"/>
			";
	}

	if($js == 'piechart'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js\" type=\"text/javascript\"></script>
			<link href=\"".base_url()."public/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css\" rel=\"stylesheet\" type=\"text/css\"/>
			";
	}

	if($js == 'sparkline'){
		echo "
			<script src=\"".base_url()."public/assets/plugins/jquery.sparkline.min.js\" type=\"text/javascript\"></script>
			";
	}

}

?>