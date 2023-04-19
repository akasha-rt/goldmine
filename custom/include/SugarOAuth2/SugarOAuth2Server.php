<?php

class CustomSugarOAuth2Server extends SugarOAuth2Server
{

    /**
     * Gets an access token via sudo without deleting the refresh token
     *
     * Will modify the session to add in additional information about
     * who requested the sudo
     *
     * @param string $userName The user name (or email address for portal sudo)
     * @param string $clientId The client id for the access token
     * @param string $platform Which platform to log this user in as
     *
     * @return string The token
     */
    public function getSudoRefreshToken($userName, $clientId, $platform)
    {
        $this->setPlatform($platform);

        $user = null;
        try {
            $user = $this->storage->loadUserFromName($userName);
        } catch (\SugarApiExceptionNeedLogin $e) {
        }

        if ($user == null) {
            throw new SugarApiExceptionNotFound();
        }

        $token = $this->createAccessToken($clientId, $user->id);

        return $token;
    }

}
