<?php
// Common banners
// TODO: I18N

// IE warning
if ( false !== strpos( $_SERVER['HTTP_USER_AGENT'], "MSIE" ) || false !== strpos( $_SERVER['HTTP_USER_AGENT'], "Edge/12" ) || !empty( $_GET['forceiewarning'] ) ) {
	$banners[] = "<div class='alert alert-danger'>Use Internet Explorer or Microsoft Edge at your own risk. Due to the XSS filter employed on those browsers, you may experience strange character replacements.</div>";
}


