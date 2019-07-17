<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

// required files
require '../vendor/autoload.php';
require '../app/config/db.php';
require '../app/config/http.php';

// initialize slim application
$app = new \Slim\App;

// require list of all api's
require_once '../app/api/api.php';

// run application
$app->run();