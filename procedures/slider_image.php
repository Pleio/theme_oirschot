<?php

$icon = (int) get_input("icon");

$plugin = elgg_get_plugin_from_id("theme_oirschot");

$fh = new ElggFile();
$fh->owner_guid = $plugin->getGUID();

$fh->setFilename("slider_images/" . $icon . ".jpg");

if ($fh->exists()) {
	$contents = $fh->grabFile();
	
	header("Content-type: image/jpeg", true);
	header("Expires: " . gmdate("D, d M Y H:i:s \G\M\T", strtotime("+6 months")), true);
	header("Pragma: public", true);
	header("Cache-Control: public", true);
	header("Content-Length: " . strlen($contents));
	
	echo $contents;
} else {
	header("HTTP/1.1 404 Not Found");
}