<?php
/**
 * Walled garden CSS
 */

$url = elgg_get_site_url();

?>
/* <style> /**/
.elgg-page-walledgarden {
	background: url('<?php echo THEME_GRAPHICS; ?>bg_logged_out.jpg') top center no-repeat;
	padding-top: 0px;
	width: 100%;
	height: 100%;
	min-height: 838px;
}

.elgg-body-walledgarden {
	margin: 0 auto;
	position: relative;
	width: 500px;
}
.elgg-module-walledgarden {
	position: absolute;
	top: 320px;
	left: 360px;
	background: white;
	width: 300px;
	background: #<?php echo THEME_COLOR_4; ?>;
	
	-webkit-box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.3);
	box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.3);
}
.elgg-module-walledgarden .elgg-module .elgg-body {
	padding: 20px 10px 10px;
}

#elgg-walledgarden-register > .elgg-body,
#elgg-walledgarden-lost-password > .elgg-body {
	padding: 0px;
}

#elgg-walledgarden-register > .elgg-body > .elgg-inner > h2,
#elgg-walledgarden-lost-password > .elgg-body > .elgg-inner > h3 {
	background: #<?php echo THEME_COLOR_5; ?>;
	text-align: center;
	padding: 5px;
	color: white;
	text-transform: uppercase;
	font-weight: normal;
	font-size: 18px;
}

#elgg-walledgarden-register > .elgg-body > .elgg-inner > form,
#elgg-walledgarden-lost-password > .elgg-body > .elgg-inner > form {
	margin: 10px;
}

.elgg-module-walledgarden-login > .elgg-head {
	background: #<?php echo THEME_COLOR_5; ?>;
	text-align: center;
	padding: 5px;
}
.elgg-col > .elgg-inner {
	margin: 0 0 0 5px;
}
.elgg-col:first-child > .elgg-inner {
	margin: 0 5px 0 0;
}
.elgg-col > .elgg-inner {
	padding: 0 8px;
}

.elgg-walledgarden-single > .elgg-body {
	padding: 0 18px;
}

.elgg-module-walledgarden-login {
	margin: 0;
}

#elgg-walledgarden-register {
	top: 220px;
	max-height: 520px;
	overflow: auto;
}

#profile_manager_register_right,
#profile_manager_register_left {
	width: inherit;
}

.elgg-body-walledgarden h3 {
	font-size: 18px;
	color: white;
	text-transform: uppercase;
	font-weight: normal;
}

.elgg-heading-walledgarden {
	margin-top: 60px;
	line-height: 1.1em;
}

h1, h2, h3, h4, h5, h6 {
	color: #666;
}

a {
	color: #999;
}