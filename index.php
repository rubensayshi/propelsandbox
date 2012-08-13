<?php

// Include the main Propel script
require_once dirname(__FILE__) . '/vendor/propel/runtime/lib/Propel.php';

// Initialize Propel with the runtime configuration
Propel::init(dirname(__FILE__) . "/build/conf/propelsandbox-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path(dirname(__FILE__) . "/build/classes" . PATH_SEPARATOR . get_include_path());

$movie = new Movie();
