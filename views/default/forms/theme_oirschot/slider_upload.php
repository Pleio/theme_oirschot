<?php

$images = theme_oirschot_get_slider_images();

for ($i = 1; $i <= 5; $i++) {
	echo "<div>";
	if (isset($images[1])) {
		echo elgg_view("output/img", array("src" => $images[$i], "width" => 50, "class" => "float-alt")); 
	}
	echo "<label>" . elgg_echo("theme_oirschot:slider_upload:image_" . $i) . "<br />";
	echo elgg_view("input/file", array("name" => "slider_image_" . $i));
	echo "</label>";
	echo "</div>";
}

echo "<div>";
echo elgg_view("input/submit", array("value" => elgg_echo("upload")));
echo "</div>";