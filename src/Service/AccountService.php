<?php

namespace Kinedu\STP\Service;

class AccountService extends STPService
{
    public function balance()
    {
        return ($http = $this->http)->makeRequest('consultaSaldoCuenta', [
            'firma' => $http->client->getSignature(),
            'cuenta' => $http->client->accountKey,
        ]);
    }
}
