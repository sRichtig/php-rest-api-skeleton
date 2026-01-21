<?php declare(strict_types=1);
session_start();
require __DIR__ . '/../bootstrap.php';

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);