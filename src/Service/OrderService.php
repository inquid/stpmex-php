<?php

namespace Kinedu\STP\Service;

use Kinedu\STP\Utils\Chain;

class OrderService extends RestSTPService
{
    public function create(array $data)
    {
        $signature = ($http = $this->http)->client->getSignature(
            Chain::generate($data)
        );

        $request = $http->makeRequest('put', 'ordenPago/registra', array_merge($data, [
            'firma' => $signature,
        ]));

        return json_decode($request->getBody())->resultado;
    }
}
