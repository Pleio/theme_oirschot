<?php
/**
 * Main file for this plugin
 */

define("THEME_GRAPHICS", elgg_get_site_url() . "mod/theme_oirschot/_graphics/");

define("THEME_COLOR_1", "182838"); // Donkerblauwe huisstijlkleur: # 182838 (voor tekst en buttons)
define("THEME_COLOR_2", "32598a"); // Lichtere huisstijl blauw: # 32598a (voor blauwe teksten in widgets, en algemene onderdelen)
define("THEME_COLOR_3", "58595b"); // Grijs: # 58595b (met name teksten)
define("THEME_COLOR_4", "d3e0bb"); // Groen meest licht: # d3e0bb (achtergrond menu’s rechts)
define("THEME_COLOR_5", "b5cb8d"); // Groen huisstijlkleur: # b5cb8d (kaders kop widget)
define("THEME_COLOR_6", "a0b67c"); // Groen meest donker: # a0b67c (voor linkjes en buttons)
define("THEME_COLOR_7", "333590"); // Blauw: # 333590 (widgets)
define("THEME_COLOR_8", "D8BA25"); // Geel: # d8d325 (activiteitwidgets)

require_once(dirname(__FILE__) . "/lib/functions.php");
require_once(dirname(__FILE__) . "/lib/hooks.php");
require_once(dirname(__FILE__) . "/lib/page_handlers.php");

elgg_register_event_handler("init", "system", "theme_oirschot_init");
elgg_register_event_handler("init", "system", "theme_oirschot_translations", 99999999999);

/**
 * Initialize the theme
 *
 * @return void
 */
function theme_oirschot_init() {

	elgg_register_css('font-awesome', 'mod/theme_oirschot/vendors/font-awesome-4.0.3/css/font-awesome.min.css');
	elgg_load_css('font-awesome');

	elgg_extend_view("js/elgg", "js/theme_oirschot");
	elgg_extend_view("css/elgg", "css/theme_oirschot");
	elgg_extend_view("page/layouts/widgets", "theme_oirschot/widgets_fix");

	elgg_register_js('jquery.flexslider', 'mod/theme_oirschot/vendors/jquery.flexslider/jquery.flexslider-min.js');
	elgg_load_js('jquery.flexslider');

	elgg_unextend_view("page/elements/header", "search/header");
	elgg_unextend_view("page/elements/owner_block/extend", "group_tools/owner_block");

	elgg_register_page_handler("theme_oirschot", "theme_oirschot_page_handler");

	elgg_register_widget_type("profile_owner_block", elgg_echo("theme_oirschot:widgets:profile_owner_block:title"), elgg_echo("theme_oirschot:widgets:profile_owner_block:description"), "profile");

	elgg_register_plugin_hook_handler("register", "menu:site", "theme_oirschot_register_site_menu_handler");
	elgg_register_plugin_hook_handler("prepare", "menu:owner_block", "theme_oirschot_prepare_owner_block_menu_handler");
	elgg_register_plugin_hook_handler("route", "groups", "theme_oirschot_groups_route_handler");

	elgg_register_admin_menu_item("configure", "theme_oirschot", "appearance");

	elgg_register_action("theme_oirschot/slider_upload", dirname(__FILE__) . "/actions/slider_upload.php", "admin");
}

/**
 * Custom translations for this theme
 *
 * @return void
 */
function theme_oirschot_translations() {
	$nl = array(
		"profile:website" => "Website"
	);

	add_translation("nl", $nl);
}
