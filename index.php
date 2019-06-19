<?php

//starting session
session_start();

//imports
use Core\Request;
use Core\Router;

require('vendor/autoload.php');

require('Core/bootstrap.php');

 Router::load('routes.php')->direct(Request::uri(), Request::method());
