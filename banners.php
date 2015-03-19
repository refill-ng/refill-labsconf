<?php
// Common banners
// TODO: I18N

// IE warning
if ( strpos( $_SERVER['HTTP_USER_AGENT'], "MSIE" ) !== false || !empty( $_GET['forceiewarning'] ) ) {
	$banners[] = "<div class='alert alert-danger'>Using the tool on Internet Explorer is not recommended. You may experience strange character replacements.</div>";
}


