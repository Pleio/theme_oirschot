<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>" title="<?php echo $site_name; ?>"><img src="<?php echo elgg_get_site_url(); ?>mod/theme_oirschot/_graphics/logo.png" alt="<?php echo $site_name; ?>"/></a>
</h1>

<div class="theme-oirschot-slider">
	<ul class="slides">
		<?php 
	   
			$slider_images = theme_oirschot_get_slider_images();
			if (!empty($slider_images)) {
				foreach ($slider_images as $image_url) {
					echo "<li>";
					echo elgg_view("output/img", array("src" => $image_url));
					echo "</li>";
				}
			}
	   
		?>
	</ul>
</div>
<div class="theme-oirschot-slider-overlay"></div>