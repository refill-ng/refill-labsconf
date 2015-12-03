<?php
// Common configuations

// Supported wikis
$config['wikis']['wikipedia']['identifiers'] = array(
	"en", "sv", "nl", "de", "fr", "war", "ceb", "ru", "it", "es", "vi", "pl", "simple", "zh", "ja", "ro", "bn", "pt", "af", "el"
);
$config['wm-defaultproject'] = "wikipedia";
$config['wm-projects'] = array(
	'wikipedia' => array(
		'default' => 'en',
		'api' => 'https://%id%.wikipedia.org/w/api.php',
		'indexphp' => 'https://%id%.wikipedia.org/w/index.php',
		'wikis' => array(
			'en', 'sv', 'nl', 'de', 'fr', 'war', 'ceb', 'ru', 'it', 'es', 'vi', 'pl', 'simple', 'zh', 'ja', 'ro', 'bn', 'pt', 'af', 'el',
			'simple' => array( // override language code
				'language' => 'en'
			)
		)
	),
	'wikimedia' => array(
		'default' => 'meta',
		'language' => 'en', // the default language for the project
		'api' => 'https://%id%.wikimedia.org/w/api.php',
		'indexphp' => 'https://%id%.wikimedia.org/w/index.php',
		'wikis' => array( 'meta', 'commons' )
	)
);


// Maximum execution time, in seconds
$config['maxtime'] = 600;

// Insert the domain name as |work= by default
// (Disabled per suggestion at https://github.com/zhaofengli/refill/issues/12 - Let's be more conservative, alright?)
// $config['options']['usedomainaswork']['default'] = true;

// Blacklist nytimes
$config['blacklist'][] = "\bnytimes.com\b";
$config['blacklist'][] = "\bwebcitation.org\b";

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
