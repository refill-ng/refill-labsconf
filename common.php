<?php
// Common configuations

// Supported wikis
$config['wikis']['wikipedia']['identifiers'] = array(
	"en", "sv", "nl", "de", "fr", "war", "ceb", "ru", "it", "es", "vi", "pl", "simple", "zh", "ja", "ro", "bn", "pt"
);

// Maximum execution time, in seconds
$config['maxtime'] = 600;

// Insert the domain name as |work= by default
$config['options']['usedomainaswork']['default'] = true;

// Blacklist nytimes
$config['blacklist'][] = "\bnytimes.com\b";

// Banners
$banners = array();

// Footer link to Tool Labs
function rlFooter() {
	global $I18N;
	return '<li><a href="https://tools.wmflabs.org"><img style="height:20px" src="https://tools.wmflabs.org/favicon.ico"/>' . $I18N->msg( "wmflabs-poweredby" ) . '</a></li>';
}

function rlBanner() {
	global $banners, $bannerCallbacks;
	$banner = implode( "", $banners );
	foreach ( $bannerCallbacks as $callback ) {
		$banner .= call_user_func( $callback );
	}
	return $banner;
	return implode( "", $banners );
}

function rlBannerCallback( $callback ) {
	global $bannerCallbacks;
	$bannerCallbacks[] = $callback;
}

require_once __DIR__ . "/banners.php";
