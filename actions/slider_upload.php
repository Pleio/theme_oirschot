<?php

$plugin = elgg_get_plugin_from_id("theme_oirschot");

$fh = new ElggFile();
$fh->owner_guid = $plugin->getGUID();

$prefix = "slider_images/";

for ($i = 1; $i <= 5; $i++) {
	$tmp = get_resized_image_from_uploaded_file("slider_image_" . $i, 100, 100);
	if (!empty($tmp)) {
		$icon = get_uploaded_file("slider_image_" . $i);
		
		$fh->setFilename($prefix . $i . ".jpg");
		$fh->open("write");
		$fh->write($icon);
		$fh->close();
	}
}

system_message(elgg_echo("theme_oirschot:action:slider_upload:done"));

forward(REFERER);
