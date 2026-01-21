<?php declare(strict_types=1);

use \League\OAuth2\Server\Entities\Interfaces\ScopeEntityInterface;

class Scope implements ScopeEntityInterface
{
    use \League\OAuth2\Server\Entities\Traits\ScopeTrait;

    public function getScopeEntityByIdentifier() : ScopeEntityInterface
    {
        return new Scope();
    }

    public function finalizeScopes(
        array $scopes,
        $grantType,
        ClientEntityInterface $clientEntity,
        $userIdentifier = null
    ) : array {
        // Implement logic to finalize scopes based on your application's requirements
        return $scopes;
    }

    public function jsonSerialize() : array
    {
        return [
            'identifier' => $this->getIdentifier(),
            'description' => $this->getDescription(),
        ];
    }
}