<?php
// Common banners
// TODO: I18N

// IE warning
if ( false !== strpos( $_SERVER['HTTP_USER_AGENT'], "MSIE" ) || false !== strpos( $_SERVER['HTTP_USER_AGENT'], "Edge/12" ) || !empty( $_GET['forceiewarning'] ) ) {
	$banners[] = "<div class='alert alert-danger'>Use Internet Explorer or Microsoft Edge at your own risk. Due to the XSS filter employed on those browsers, you may experience strange character replacements.</div>";
}

$banners[] = "<div class='alert alert-info'>"
		. "<h4>Recent changes</h4>"
		. "<ul>"
		. "<li>The tool is now using <a href='https://www.mediawiki.org/wiki/Citoid'>Citoid</a> as the backend, which should provide better bibliographic metadata.</li>"
		. "</div>";

