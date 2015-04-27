<?php

$slider = "<div>";
$slider .= elgg_view("output/longtext", array("value" => elgg_echo("theme_oirschot:slider_upload:description")));
$slider .= "</div>";

$slider .= elgg_view_form("theme_oirschot/slider_upload", array("enctype" => "multipart/form-data"));

echo elgg_view_module("inline", elgg_echo("theme_oirschot:slider_upload"), $slider);