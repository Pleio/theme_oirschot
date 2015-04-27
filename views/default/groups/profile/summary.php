<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();

if (!$owner) {
	// not having an owner is very bad so we throw an exception
	$msg = elgg_echo('InvalidParameterException:IdNotExistForGUID', array('group owner', $group->guid));
	throw new InvalidParameterException($msg);
}

?>
<div class="groups-profile clearfix elgg-image-block">
	<div class="elgg-image">
		<div class="groups-profile-icon">
			<?php
				// we don't force icons to be square so don't set width/height
				echo elgg_view_entity_icon($group, 'large', array(
					'href' => '',
					'width' => '',
					'height' => '',
				)); 
			?>
		</div>
	</div>
	
	<div class="groups-profile-fields elgg-body">
		<?php
			echo "<h1>" . $group->name . "</h1><i class='fa fa-caret-down'></i>";
			echo elgg_view('groups/profile/fields', $vars);
		?>
	</div>
</div>
<?php
?>

<style type="text/css">
	.elgg-breadcrumbs,
	.elgg-breadcrumbs > li > a {
		color: white;
	}

	.elgg-layout-one-sidebar >  .elgg-main > .elgg-head {
		background: none;
	}
	.elgg-layout-one-sidebar >  .elgg-main > .elgg-head h2 {
		color: transparent;
	}
	.elgg-layout-one-sidebar >  .elgg-main > .elgg-head .elgg-button-action {
		background: #<?php echo THEME_COLOR_7; ?>;
		border-color: #<?php echo THEME_COLOR_7; ?>;
	}
	.elgg-layout-one-sidebar >  .elgg-main > .elgg-head .elgg-button-action:hover {
		background: #<?php echo THEME_COLOR_6; ?>;
		border-color: #<?php echo THEME_COLOR_6; ?>;
	}
</style>
