<?php declare(strict_types=1);

use PHPRAS\Controller\IndexController;

const CURRENT_API_VERSION = 'v1';

$router->map('GET', '/{CURRENT_API_VERSION}/', [PHPRAS\Controller\IndexController::class, 'index']);