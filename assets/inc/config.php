<?php

define("NAME", "CloudTop");
define("SEP", " | ");
define("DESC", "The Next Generation of OS");

// Directories

define("DIR_ASSETS", "assets");		// Main resources folder.

define("DIR_CSS", DIR_ASSETS . "/css");
define("DIR_IMG", DIR_ASSETS . "/img");
define("DIR_ICONS", DIR_IMG . "/icons");		// Change this to img as always and adjust all references.
define("DIR_JS", DIR_ASSETS . "/js");

// Session-related.

define("SSN_PREFIX", "cldtop_");
define("SSN_LOGGED_IN", SSN_PREFIX . "loggedin");