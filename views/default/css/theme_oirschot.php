<?php
?>
/* <style> */

.elgg-module-walledgarden .elgg-menu-general {
	font-size: 11px;
}

.elgg-module-walledgarden-login .fa-caret-down {
	font-size: 48px;
	color: #<?php echo THEME_COLOR_5; ?>;
	left: 0;
    margin: 0 auto;
    position: absolute;
    text-align: center;
    top: 10px;
    width: 100%;
}

.elgg-module-walledgarden-login .elgg-button-submit {
	border-color: #<?php echo THEME_COLOR_6; ?>;
	background-color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-module-walledgarden-login .elgg-button-submit:hover {
	border-color: #<?php echo THEME_COLOR_2; ?>;
	background-color: #<?php echo THEME_COLOR_2; ?>;
}

.theme-oirschot-slider {
	overflow: hidden;
	width: 510px;
	height: 302px;
	position: absolute;
	left: 150px;
	top: -10px;
}
.theme-oirschot-slider-overlay {
	background: url('<?php echo THEME_GRAPHICS; ?>slider.png') top center no-repeat;
	width: 510px;
	height: 302px;
	position: absolute;
	top: 0px;
	left: 150px;
	top: -10px;
}

.theme-oirschot-slider .slides {
    height: 235px;
    left: 20px;
    overflow: hidden;
    position: absolute;
    top: 20px;
    width: 450px;
}

.theme-oirschot-slider .flex-viewport {
    height: 235px;
    left: 15px;
    overflow: hidden;
    position: absolute;
    top: 20px;
    width: 450px;
}

.theme-oirschot-slider .flex-control-paging,
.theme-oirschot-slider .flex-direction-nav {
	display: none;
}

.elgg-module-aside h3 {
	font-size: 14px;
}

.elgg-menu-groups-my-status li a {
	display: block;
	line-height: 31px;
	font-size: 14px;
	color: white;
	background-color: #<?php echo THEME_COLOR_5; ?>;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}

.elgg-menu-groups-my-status li a:hover {
	background-color: #<?php echo THEME_COLOR_1; ?>;
	color: white;
	text-decoration: none;
}
.elgg-menu-groups-my-status li.elgg-state-selected > a {
	background-color: #<?php echo THEME_COLOR_1; ?>;
	color: white;
}
#profile-owner-block {
	background: transparent;
}

#profile-owner-block a.elgg-button-action {
	display: block;
	border: 1px solid #<?php echo THEME_COLOR_2; ?>;
	background: #<?php echo THEME_COLOR_2; ?>;
	font-weight: normal;
	text-align: left;
	padding: 2px 4px 2px 8px;
	line-height: 31px;
}

#profile-owner-block a.elgg-button-action:hover {
	border-color: #<?php echo THEME_COLOR_1;?>;
	text-decoration: none;
	color: white;
	background: #<?php echo THEME_COLOR_1;?>;
}


.elgg-search-header {
	position: relative; 
	bottom: auto;
	right: auto;
	margin: 5px;
	width: 260px;
}

.theme-oirschot-search-header-input {
	width: 100%;
}

.theme-oirschot-search-header-input input.search-input[type="text"] {
	width: 100%;
	border-left: 5px solid white;
	background: white;
	color: #CCC;
	padding: 0;
}

.theme-oirschot-search-header-input input[type="text"]:focus {
	color: #<?php echo THEME_COLOR_1; ?>;
}

.theme-oirschot-header-search {
	background: #<?php echo THEME_COLOR_5; ?>;
	position: absolute;
	right: 0;
	bottom: 30px;
	width: 26%;
	height: 31px;
	padding: 0;
}

.theme-oirschot-header-search table {
	width: 100%;
}
.theme-oirschot-header-search form {
	margin: 5px;
}
	

form.elgg-search,
.search-advanced-type-selection-dropdown {
	border-color: #<?php echo THEME_COLOR_1; ?>;
}

.search-advanced-type-selection-dropdown a:hover,
.search-advanced-type-selection > li > a {
	background: #<?php echo THEME_COLOR_1; ?>;
	white-space: nowrap;
}

.elgg-widget-content > .fa-caret-down {
	font-size: 40px;
    left: 0;
    position: absolute;
    text-align: center;
    top: 20px;
    width: 100%;
    color: #<?php echo THEME_COLOR_7; ?>;
}

.elgg-menu-widget {
	display: none;
}

.elgg-module-widget:hover .elgg-menu-widget {
	display: block;
}

.elgg-widget-instance-index_activity .elgg-head {
	background-color: #<?php echo THEME_COLOR_8; ?>;
}

.elgg-widget-instance-index_activity .elgg-widget-content > .fa-caret-down {
	color: #<?php echo THEME_COLOR_8; ?>;
}

.elgg-widget-instance-group_river_widget .elgg-widget-content,
.elgg-widget-instance-index_activity .elgg-widget-content {
	background: url('<?php echo THEME_GRAPHICS; ?>ring.png') top center no-repeat;
	padding-top: 70px;
}

#elgg-widget-col-2 .elgg-module-widget:first-child .elgg-widget-content {
	background: url('<?php echo THEME_GRAPHICS; ?>stain.png') bottom right no-repeat;
}

#elgg-widget-col-3 .elgg-widget-instance-free_html .elgg-widget-content {
	background: url('<?php echo THEME_GRAPHICS; ?>marker.png') top right no-repeat;
}

#elgg-widget-col-1.elgg-col-1of3 {
	width: 26%;
}

#elgg-widget-col-2.elgg-col-1of3,
#elgg-widget-col-3.elgg-col-1of3 {
	width: 35%;
	padding-right: 2%;
}

#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget {
	margin-bottom: 0px;
	padding-top: 0px;
	padding-bottom: 0px;
}

#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget > .elgg-head {
	background: #<?php echo THEME_COLOR_5; ?>;
}
#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget > .elgg-body {
	background: #<?php echo THEME_COLOR_4; ?>;
}

#elgg-widget-col-1.elgg-col-1of3 .elgg-widget-content > .fa-caret-down {
	color: #<?php echo THEME_COLOR_5; ?>;
}

#widgets-add-panel {
	border-color: #<?php echo THEME_COLOR_7;?>;
	background: #<?php echo THEME_COLOR_7;?>;
}
#widgets-add-panel:hover {
	border-color: #<?php echo THEME_COLOR_6;?>;
	background: #<?php echo THEME_COLOR_6;?>;
}

.elgg-widget-content h2,
.elgg-widget-content h3 {
	font-size: 13px;
	color: #<?php echo THEME_COLOR_2; ?>;
}

.profile.elgg-col-2of3 {
	width: 72%;
}

.profile .elgg-inner {
	border: none;
}

#profile-details {
	padding: 0;
}

#profile-details h2 {
	background: #<?php echo THEME_COLOR_7; ?>;
	color: white;
	text-transform: uppercase;
	font-size: 18px;
	font-weight: normal;
	text-align: center;
	padding: 4px 0;
}

#profile-details,
.subsite-manager-account-dropdown,
.groups-profile-fields .odd, 
.groups-profile-fields .even {
	background: rgba(255,255,255,0.85);
}

.subsite-manager-account-dropdown {
	border: 0;
	padding: 15px 20px;
}

.elgg-river-comments-tab,
#profile-details .even b,
#profile-details .odd b,
.groups-profile-fields .odd b, 
.groups-profile-fields .even b,
.profile-aboutme-title {
	color: #<?php echo THEME_COLOR_2; ?>;
}

#custom_fields_userdetails .ui-accordion-content {
	border: none;
}

.groups-stats {
	width: 190px;
}

.event_manager_event_list_icon_month {
    background: none repeat scroll 0 0 #<?php echo THEME_COLOR_1; ?>;
    border: none;
}

.event_manager_event_list_icon_day {
    background: none repeat scroll 0 0 #FFFFFF;
    border-bottom: none;
    border-left: none;
    border-right: none;
}

.event_manager_event_actions {
	background-color: #<?php echo THEME_COLOR_5; ?>;
	color: white;
	font-weight: normal;
	padding: 5px 20px 5px 5px;
	background-position: 95% center;
	line-height: 30px;
}

.event-manager-event-view-search-attendees .elgg-icon-search {
	line-height: 30px;
}

.event_manager_event_actions_drop_down {
	margin-top: 5px;
}

.elgg-sidebar > .elgg-menu {
	padding: 20px;
}

.elgg-widget-more {
	text-align: right;
	display: block;
}

.elgg-form-groups-find .elgg-input-text,
.elgg-form-groups-search .elgg-input-text {
	width: 150px;
	font-size: 100%;
	height: 26px;
}

.elgg-sidebar .elgg-button-submit {
	background-color: #<?php echo THEME_COLOR_1; ?>;
	border-color: #<?php echo THEME_COLOR_1; ?>;
}

.groups-profile-fields {
	position: relative;
}

.groups-profile-fields .even > b:first-child,
.groups-profile-fields .odd > b:first-child {
	display: block;
}

.groups-profile-fields h1 {
	background: #<?php echo THEME_COLOR_6; ?>;
	color: white;
	font-weight: normal;
	font-size: 18px;
	text-align: center;
	line-height: 30px;
	text-transform: uppercase;	
}

.groups-profile-fields .fa-caret-down {
	color: #<?php echo THEME_COLOR_6; ?>;
	position: absolute;
	top: 10px;
	font-size: 48px;
	left: 0;
    margin: 0 auto;
    text-align: center;
    width: 100%;
}

.profile.elgg-col-2of3 {
	position: relative;
}

.profile.elgg-col-2of3 > .elgg-inner > .fa-caret-down{
	color: #<?php echo THEME_COLOR_7; ?>;
	position: absolute;
	top: 8px;
	font-size: 48px;
	left: 0;
    margin: 0 auto;
    text-align: center;
    width: 100%;
}

.elgg-owner-block-group {
	padding-top: 20px;
}

.elgg-owner-block-group .elgg-image img {
	width: 80px;
	height: 80px;
}


#custom_fields_userdetails {
	padding: 20px;
}

.wire-status {
	margin: 20px 20px 0px;
	padding: 5px;
}

.profile-aboutme-title {
	margin: 0 20px;
}

.profile-aboutme-contents {
	margin: 0 20px 20px;
}

#profile-details .odd, 
#profile-details .even {
	background: none;
}

#widget_profile_completeness_progress_bar {
	background: #<?php echo THEME_COLOR_2; ?>;
}

#widget_profile_completeness_progress {
	color: white;
}

#thewire_tools_search_form .elgg-button-submit {
	margin-top: 10px;
}

.elgg-widget-instance-thewire_post #thewire-submit-button {
	border-color: #<?php echo THEME_COLOR_1;?>;
	background: #<?php echo THEME_COLOR_1;?>;
}

.elgg-widget-instance-thewire_post #thewire-submit-button:hover {
	border-color: #<?php echo THEME_COLOR_6; ?>;
	background-color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-sidebar > .elgg-owner-block {
	padding-top: 20px;
}

.ui-datepicker-header {
	background: #<?php echo THEME_COLOR_7; ?>;
	border-bottom: 1px solid #<?php echo THEME_COLOR_7; ?>;
}

.ui-datepicker {
	border-color: #<?php echo THEME_COLOR_7; ?>;
}

.ui-datepicker-calendar .ui-state-default,
.ui-datepicker th {
	color: #<?php echo THEME_COLOR_7; ?>;
}

