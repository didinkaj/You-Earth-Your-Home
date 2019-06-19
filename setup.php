<?php

require('./Database/CreateTables.php');

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$table = new CreateTables();

//initialise the users tables
$table->dropUsers();

$table->users();

//initialise the events table

$table->dropEvents();

$table->events();


//initialise the event-users table

$table->dropEventUsers();

$table->eventUsers();