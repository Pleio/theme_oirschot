<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
	background: url('<?php echo THEME_GRAPHICS; ?>bg_logged_in.jpg') top center no-repeat;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	min-width: 990px;
	max-width: 1138px;
	margin: 0 auto;
	height: 380px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	min-width: 990px;
	max-width: 1138px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	min-width: 990px;
	max-width: 1138px;
	margin: 0 auto;
	padding: 20px 0;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
	min-width: 990px;
	max-width: 1138px;
	width: inherit !important;
	margin: 0 auto;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	
}
.elgg-layout-two-sidebar {
	
}
.elgg-layout-error {
}
.elgg-sidebar {
	position: relative;
	float: right;
	width: 26%;
	margin: 0 0 0 10px;
	background: #<?php echo THEME_COLOR_4; ?>;
}

.elgg-sidebar > div {
	padding-left: 20px;
	padding-right: 20px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
	background: #<?php echo THEME_COLOR_4; ?>;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
	background: rgba(255,255,255,0.85);
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer,
.elgg-page-footer a,
.elgg-page-footer a:hover,
.elgg-menu-footer > li > a {
	color: white;
}
