<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

// drop-down login
echo elgg_view('core/account/login_dropdown');

// insert site-wide navigation
echo elgg_view_menu('site', array("sort_by" => "register"));

$old_translation = elgg_echo("search");
add_translation(get_language(), array("search" => elgg_echo("theme_oirschot:search:text")));
echo "<div class='theme-oirschot-header-search'>" . elgg_view("theme_oirschot/search_box") . "</div>";
add_translation(get_language(), array("search" => $old_translation));