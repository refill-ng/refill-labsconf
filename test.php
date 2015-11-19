<?php
// Configuations for the test instance
require_once __DIR__ . "/common.php";

// Report all errors
error_reporting( E_ALL );

// Use the experimental WikimediaWikiProvider
$config['wikiprovider'] = "WikimediaWikiProvider";

// Unblacklist NYT
unset( $config['blacklist'][0] );

// English Wikiquote (pretty useless at the moment)
$config['wikis']['enwikiquote'] = array(
	"identifiers" => array( "enquote" ),
	"api" => "https://en.wikiquote.org/w/api.php",
	"indexphp" => "https://en.wikiquote.org/w/index.php",
);

// Commit ID in default edit summary
$config['summaryextra'] = " (" . substr( file_get_contents( ".git/refs/heads/master" ), 0, 7 ) . ")";

// Test version banners
rlBannerCallback( function() {
	global $I18N, $app;
	return "<div class='alert alert-info'>"
	        . $I18N->msg( "wmflabs-thankyoutest", array( "variables" => array( $I18N->msg( "appname" ) ) ) ) . "<br>"
	        . $I18N->msg( "wmflabs-latestcommit", array( "variables" => array( htmlspecialchars( `git log -1 --oneline` ) ) ) )
	        . "</div>"
		. "<div class='alert alert-info'>"
		. "<h4>Recent changes</h4>"
		. "<ul>"
		. "<li>The tool is now capable of generating localized templates. Please help translate reFill into your language by <a href='https://www.transifex.com/projects/p/refill/'>joining the Transifex project</a>. Thanks again for testing reFill!</li>"
		. "<li>The tool can now expand <i>New York Times</i> references.</li>"
		. "</div>";
} );
