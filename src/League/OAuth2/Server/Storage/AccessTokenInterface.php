<?php
/**
 * OAuth 2.0 Access token storage interface
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) PHP League of Extraordinary Packages
 * @license     http://mit-license.org/
 * @link        http://github.com/php-loep/oauth2-server
 */

namespace League\OAuth2\Server\Storage;

/**
 * Access token interface
 */
interface AccessTokenInterface
{
    /**
     * Get an instance of Entites\AccessToken
     * @param  string $token The access token
     * @return \League\OAuth2\Server\Entities\AccessToken
     */
    public function getToken($token);

    /**
     * Get the scopes for an access token
     * @param  string $token The access token
     * @return array Array of \League\OAuth2\Server\Entities\Scope
     */
    public function getTokenScopes($token);

    /**
     * Creates a new access token
     * @param  string $token The access token
     * @param  integer $expireTime The expire time expressed as a unix timestamp
     * @param  string|integer $sessionId The session ID
     * @return \League\OAuth2\Server\Entities\AccessToken
     */
    public function createAccessToken($token, $expireTime, $sessionId);

    /**
     * Associate a scope with an acess token
     * @param  string $token The access token
     * @param  string $scope The scope
     * @return void
     */
    public function associateScope($token, $scope);

    /**
     * Delete an access token
     * @param  string $token The access token to delete
     * @return void
     */
    public function delete($token);
}