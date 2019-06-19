<?php

require('vendor/autoload.php');

require('Core/bootstrap.php');

//imports
use Core\Request;
use Core\Router;

Router::load('routes.php')->direct(Request::uri(), Request::method());
