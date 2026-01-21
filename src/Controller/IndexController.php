<?php declare(strict_types=1);

namespace PHPRAS\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;    
use Laminas\Diactoros\Response;

class IndexController
{
    public function index(ServerRequestInterface $request): array 
    {
        return [
            'title'   => 'My New Simple API',
            'version' => $_ENV['PHPRAS_VERSION'],
            'status'  => 'up',
        ];
    }
}