<?php declare(strict_types=1);

use \Defuse\Crypto\Key;
use League\OAuth2\Server\AuthorizationServer;
use Src\OAuth2\Repositories\ClientRepository;
use Src\OAuth2\Repositories\AccessTokenRepository;
use Src\OAuth2\Repositories\ScopeRepository;

$privateKeyPath = __DIR__ . '/../ssl/private.key';
$encryptionKey = $_ENV['API_KEY'];

$server = new AuthorizationServer(
      $clientRepository,
      $accessTokenRepository,
      $scopeRepository,
      $privateKeyPath,
      Key::loadFromAsciiSafeString($encryptionKey)
);