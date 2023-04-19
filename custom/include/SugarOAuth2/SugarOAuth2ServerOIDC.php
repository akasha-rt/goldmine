<?php

class CustomSugarOAuth2ServerOIDC extends SugarOAuth2ServerOIDC
{
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
