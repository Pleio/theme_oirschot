<?php 
?>
<style>
	.elgg-main {
		background: none;
	}
	
	.elgg-layout-one-column .elgg-main {
		padding-left: 0;
		padding-right: 0;
	}
	<?php if (elgg_in_context("group_profile")) { ?>
			
	.elgg-widget-add-control,
	.elgg-module-widget {
		margin-left: 0;
		margin-right: 0;
		padding-left: 0;
		padding-right: 0;
	}
	
	#elgg-widget-col-2 {
		float: left;
	}
	
	#elgg-widget-col-1.elgg-widgets,
	#elgg-widget-col-2.elgg-widgets {
		width: 49%;
	}
	
	<?php } ?>
</style>