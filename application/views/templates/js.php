<?php
	foreach ($js as $key => $value) {
		echo get_js($value);
	}

	foreach ($custom as $key => $value) {
		echo '<script src="'.base_url().'public/assets/scripts/custom/'.$value.'.js" type="text/javascript"></script>';
	}
?>