<?php

// Include the main Propel script
require_once dirname(__FILE__) . '/vendor/propel/runtime/lib/Propel.php';

// Initialize Propel with the runtime configuration
Propel::init(dirname(__FILE__) . "/build/conf/propelsandbox-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path(dirname(__FILE__) . "/build/classes" . PATH_SEPARATOR . get_include_path());

$con = Propel::getConnection();
$con->setLogLevel(Propel::LOG_DEBUG);
$con->useDebug(true);

$movie = MovieQuery::create()->findPK(1);

$q = PersonQuery::create()
                ->filterByMovie($movie);

var_dump($q->find());

/*
$person = new Person();
$person->setName("Ruben");
$person->save();

$movie = new Movie();
$movie->setTitle("RAWR");
$movie->addPerson($person);
$movie->save();
//*/