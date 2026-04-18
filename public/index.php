<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// cPanel Deployment Note:
// This file is intended to be placed in public_html.
// The Laravel core files should be located in /home/dyxpkare/black_sheep_events

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../black_sheep_events/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../black_sheep_events/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../black_sheep_events/bootstrap/app.php';

$app->handleRequest(Request::capture());
