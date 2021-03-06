<?php

namespace League\OAuth2\Client\Test\Provider;

use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Provider\StandardProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Psr\Http\Message\ResponseInterface;

class Standard extends StandardProvider
{
    public function __construct($options = [], array $collaborators = [])
    {
        // Add the required defaults for AbstractProvider
        $options += [
            'clientId'     => 'mock_client_id',
            'clientSecret' => 'mock_secret',
            'redirectUri'  => 'none',
        ];

        parent::__construct($options);
    }

    protected function fetchUserDetails(AccessToken $token)
    {
        return [
            'mock_response_uid' => 1,
            'username'          => 'testmock',
            'email'             => 'mock@example.com',
        ];
    }
}
