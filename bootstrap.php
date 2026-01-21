<?php declare(strict_types=1);

// include the Composer autoloader
require_once 'vendor/autoload.php';


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$responseFactory = new Laminas\Diactoros\ResponseFactory();

$strategy = new League\Route\Strategy\JsonStrategy($responseFactory);
$router   = (new League\Route\Router)->setStrategy($strategy);

// map routes
require __DIR__ . '/src/routes.php';