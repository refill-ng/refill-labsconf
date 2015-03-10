<?php
// Common banners
// TODO: I18N

// Renaming
rlBannerCallback( function() {
	global $I18N;
	if ( strpos( $I18N->getLang(), "en" ) === 0 ) { // only target en
		return "<div class='alert alert-info alert-dismissible' role='alert'>The tool has got a new name! Share your opinions in <a href='https://en.wikipedia.org/wiki/User_talk:Zhaofeng_Li/Reflinks#A_new_name_for_the_tool'>the discussion</a>.</div>";
	}
} );

// IE warning
if ( strpos( $_SERVER['HTTP_USER_AGENT'], "MSIE" ) !== false || !empty( $_GET['forceiewarning'] ) ) {
	$banners[] = "<div class='alert alert-danger'>Using the tool on Internet Explorer is not recommended. You may experience strange character replacements.</div>";
}


