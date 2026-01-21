<?php declare(strict_types=1);

use League\OAuth2\Server\Entities\Traits\AccessTokenTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;

class AccessToken implements \League\OAuth2\Server\Entities\AccessTokenEntityInterface
{
    use AccessTokenTrait;
    use EntityTrait;
    use TokenEntityTrait;

    public function getNewToken() : AccessTokenEntityInterface
    {
        return new AccessToken();
    }   

    public function persistNewAccessToken() : void
    {
        // Implement logic to persist the access token in your data store
    }   

    public function revokeAccessToken() : void
    {
        // Implement logic to revoke the access token in your data store
    }

    public function isAccessTokenRevoked() : boolean
    {
        // Implement logic to check if the access token is revoked in your data store
        return false;
    }   
}

