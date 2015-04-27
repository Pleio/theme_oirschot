<?php

function theme_oirschot_page_handler($page) {
	$result = false;
	$include_file = "";
	
	switch ($page[0]) {
		case "slider":
			if (isset($page[1]) && is_numeric($page[1])) {
				set_input("icon", $page[1]);
				
				$include_file = dirname(dirname(__FILE__)) . "/procedures/slider_image.php";
			}
			break;
	}
	
	if (!empty($include_file)) {
		$result = true;
		include($include_file);
	}
	
	return $result;
}