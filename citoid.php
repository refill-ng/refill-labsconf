<?php
// Configuations for the Citoid test instance
require_once __DIR__ . "/test.php";

// Use CitoidLinkHandler
$config['linkhandlers'][1] = "CitoidLinkHandler";

// Banner
$banners[] = "<div class='alert alert-info'>This instance of reFill is powered by <a href='https://mediawiki.org/wiki/Citoid'>Citoid</a>.</div>";
