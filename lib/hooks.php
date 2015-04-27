<?php

/**
 * Plugins hooks are bundled here
 */

/**
 * Return the site menu
 * 
 * @param string $hook        name of the hook
 * @param string $entity_type type of the hook
 * @param array  $returnvalue current return value
 * @param array  $params      extra params
 */
function theme_oirschot_register_site_menu_handler($hook, $entity_type, $returnvalue, $params) {
	// we will make our own menu
	$menu_items = array();

	// main menu
	$menu_items[] = ElggMenuItem::factory(array("name" => "home",  "href" => elgg_get_site_url(), "text" => elgg_echo("theme_oirschot:menu:home") . "<i class='fa fa-home'></i>"));

	if (theme_oirschot_is_subsite_member()) {
		$menu_items[] = ElggMenuItem::factory(array("name" => "activity",  "href" => "activity/all", "text" => elgg_echo("theme_oirschot:menu:activity") . "<i class='fa fa-list-alt'></i>"));
	}

	$menu_items[] = ElggMenuItem::factory(array("name" => "groups",  "href" => "groups/all", "text" => elgg_echo("theme_oirschot:menu:groups") . "<i class='fa fa-group'></i>"));

	if (theme_oirschot_is_subsite_member()) {
		$menu_items[] = ElggMenuItem::factory(array("name" => "pages",  "href" => "groups/profile/25324652/wiki", "text" => elgg_echo("theme_oirschot:menu:pages") . "<i class='fa fa-code-fork'></i>"));
		$menu_items[] = ElggMenuItem::factory(array("name" => "add",  "href" => "#", "text" => elgg_echo("theme_oirschot:menu:add") . "<i class='fa fa-plus'></i>"));
	}

	// submenus
	// activity submenu
	$menu_items[] = ElggMenuItem::factory(array(
		"name" => "thewire_all",
		"href" => "thewire/all",
		"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:activity:thewire"),
		"parent_name" => "activity"
	));
	$menu_items[] = ElggMenuItem::factory(array(
		"name" => "blogs",
		"href" => "blog/all",
		"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:activity:blogs"),
		"parent_name" => "activity"
	));
	$menu_items[] = ElggMenuItem::factory(array(
		"name" => "events",
		"href" => "events",
		"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:activity:events"),
		"parent_name" => "activity"
	));
	$menu_items[] = ElggMenuItem::factory(array(
		"name" => "photos",
		"href" => "photos/all",
		"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:activity:photos"),
		"parent_name" => "activity"
	));
	$menu_items[] = ElggMenuItem::factory(array(
		"name" => "jobs",
		"href" => "http://www.kempengemeenten.nl/intranet-kempen/vacatures_3491",
		"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:activity:jobs"),
		"target" => "_blank",
		"parent_name" => "activity"
	));
	
	// groups submenu
	$menu_items[] = ElggMenuItem::factory(array(
		"name" => "groups_all",
		"href" => "groups/all",
		"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:groups:all"),
		"parent_name" => "groups"
	));
	
	if (elgg_is_logged_in()) {
		$user = elgg_get_logged_in_user_entity();
		
		// groups submenu
		$menu_items[] = ElggMenuItem::factory(array(
			"name" => "groups_mine",
			"href" => "groups/member/" . $user->username,
			"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:groups:mine"),
			"parent_name" => "groups"
		));
		
		// add submenu
	        if (theme_oirschot_is_subsite_member()) {
			$menu_items[] = ElggMenuItem::factory(array(
				"name" => "thewire",  
				"href" => "thewire/all", 
				"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:add:thewire"),
				"parent_name" => "add"
			));
		
			$menu_items[] = ElggMenuItem::factory(array(
				"name" => "blog",  
				"href" => "blog/add/" . $user->getGUID(), 
				"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:add:blog"),
				"parent_name" => "add"
			));
		
			$menu_items[] = ElggMenuItem::factory(array(
				"name" => "pages",  
				"href" => "pages/add/25324652", 
				"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:add:pages"),
				"parent_name" => "add"
			));
		
			$menu_items[] = ElggMenuItem::factory(array(
				"name" => "group",  
				"href" => "groups/add/" . $user->getGUID(), 
				"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:add:group"),
				"parent_name" => "add"
			));
		
			$menu_items[] = ElggMenuItem::factory(array(
				"name" => "event",  
				"href" => "events/event/new", 
				"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:add:event"),
				"parent_name" => "add"
			));
		
			$menu_items[] = ElggMenuItem::factory(array(
				"name" => "photo",  
				"href" => "photos/add/" . $user->getGUID(), 
				"text" => "<i class='fa fa-plus'></i> " . elgg_echo("theme_oirschot:menu:add:album"),
				"parent_name" => "add"
			));
		}
	}
	
	return $menu_items;
}

/**
 * Add some icons before some menu items
 * 
 * @param string         $hook        name of the hook
 * @param string         $entity_type type of the hook
 * @param ElggMenuItem[] $returnvalue current return value
 * @param array          $params      extra params
 * 
 * @return ElggMenuItem[]
 */
function theme_oirschot_prepare_owner_block_menu_handler($hook, $entity_type, $returnvalue, $params) {
	
	if (empty($returnvalue) || !is_array($returnvalue)) {
		return $returnvalue;
	}
	
	foreach ($returnvalue as $section => $menu_items) {
		
		if (!empty($menu_items) && is_array($menu_items)) {
			foreach ($menu_items as $menu_item) {
				
				switch ($menu_item->getName()) {
					case "activity":
					case "thewire":
						$menu_item->setText("<i class='fa fa-stack-exchange mrs'></i>" . $menu_item->getText());
						break;
					case "blog":
						$menu_item->setText("<i class='fa fa-pencil-square mrs'></i>" . $menu_item->getText());
						break;
					case "bookmarks":
						$menu_item->setText("<i class='fa fa-star-o mrs'></i>" . $menu_item->getText());
						break;
					case "discussion":
						$menu_item->setText("<i class='fa fa-comments-o mrs'></i>" . $menu_item->getText());
						break;
					case "events":
						$menu_item->setText("<i class='fa fa-calendar mrs'></i>" . $menu_item->getText());
						break;
					case "file":
						$menu_item->setText("<i class='fa fa-folder-open mrs'></i>" . $menu_item->getText());
						break;
					case "pages":
						$menu_item->setText("<i class='fa fa-code-fork mrs'></i>" . $menu_item->getText());
						break;
					case "photos":
						$menu_item->setText("<i class='fa fa-film mrs'></i>" . $menu_item->getText());
						break;
					case "etherpad":
						$menu_item->setText("<i class='fa fa-globe mrs'></i>" . $menu_item->getText());
						break;
					case "polls":
						$menu_item->setText("<i class='fa fa-question mrs'></i>" . $menu_item->getText());
						break;
					case "videolist":
						$menu_item->setText("<i class='fa fa-video-camera mrs'></i>" . $menu_item->getText());
						break;
					case "related_groups":
						$menu_item->setText("<i class='fa fa-group mrs'></i>" . $menu_item->getText());
						break;
					case "birthdays":
						$menu_item->setText("<i class='fa fa-gift mrs'></i>" . $menu_item->getText());
						break;
				}
			}
		}
	}
}
