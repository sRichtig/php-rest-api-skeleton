<?php declare(strict_types=1);

use PHPRAS\Controller\IndexController;

$phpRASVersion = $_ENV['PHPRAS_VERSION'];

$router->map('GET', "/{$phpRASVersion}/", [PHPRAS\Controller\IndexController::class, 'index']);