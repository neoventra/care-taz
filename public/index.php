<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// XAMPP serves this project from a subdirectory and rewrites into /public.
// Point SCRIPT_NAME at the public URL so Laravel routes /about-us, not /care-taz/about-us.
if (
    isset($_SERVER['SCRIPT_NAME'], $_SERVER['REQUEST_URI'])
    && str_contains($_SERVER['SCRIPT_NAME'], '/public/')
) {
    $base = substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], '/public/'));
    $_SERVER['SCRIPT_NAME'] = $base.'/index.php';
    $_SERVER['PHP_SELF'] = $base.'/index.php';
}

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
