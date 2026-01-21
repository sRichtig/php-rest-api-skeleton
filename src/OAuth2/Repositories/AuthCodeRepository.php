<?php declare(strict_types=1);

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;
use League\OAuth2\Server\Entities\Traits\AuthCodeTrait;

class AuthCode implements \League\OAuth2\Server\Entities\AuthCodeEntityInterface
{
    use AuthCodeTrait;
    use EntityTrait;
    use TokenEntityTrait;

    public function getNewAuthCode() : AuthCodeEntityInterface
    {
        return new AuthCode();
    }

    public function persistNewAuthCode() : void
    {
        // Implement logic to persist the auth code in your data store
    }

    public function revokeAuthCode() : void
    {
        // Implement logic to revoke the auth code in your data store
    }

    public function isAuthCodeRevoked() : boolean
    {
        // Implement logic to check if the auth code is revoked in your data store
        return false;
    }
}