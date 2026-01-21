<?php declare(strict_types=1);

class UserRepository
{
    public function getUserEntityByUserCredentials(
        string $username,
        string $password,
        string $grantType,
        \League\OAuth2\Server\Entities\ClientEntityInterface $clientEntity
    ) : ?\League\OAuth2\Server\Entities\UserEntityInterface {
        // Implement logic to retrieve and validate the user based on credentials
        // Return a UserEntityInterface instance if valid, otherwise return null
        return null;
    }
}