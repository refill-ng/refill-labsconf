<?php
// Configuations for the test instance
require_once __DIR__ . "/common.php";

// Report all errors
error_reporting( E_ALL );

// English Wikiquote (pretty useless at the moment)
$config['wikis']['enwikiquote'] = array(
	"identifiers" => array( "enquote" ),
	"api" => "https://en.wikiquote.org/w/api.php",
	"indexphp" => "https://en.wikiquote.org/w/index.php",
);

// Commit ID in default edit summary
$config['summaryextra'] = " (" . substr( file_get_contents( ".git/refs/heads/master" ), 0, 7 ) . ")";

// Thank-you note
rlBannerCallback( function() {
	global $I18N;
	return "<div class='alert alert-info'>"
	        . $I18N->msg( "wmflabs-thankyoutest", array( "variables" => array( $I18N->msg( "appname" ) ) ) ) . "<br>"
	        . $I18N->msg( "wmflabs-latestcommit", array( "variables" => array( htmlspecialchars( `git log -1 --oneline` ) ) ) )
	        . "</div>";
} );