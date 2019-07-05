<?php

use Core\App;
use Core\Error;
use Core\Session;
use DB\Connection;
use DB\QueryBuilder;

App::bind('config', require(__DIR__ . '/../config.php'));  //adding app configurations to the app class

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'][App::get('config')['dbConnection']])
));

App::bind('dbConnection',
     (strtok(App::get('config')['database']['connection'], ':'))
);

Error::show();

Session::start();