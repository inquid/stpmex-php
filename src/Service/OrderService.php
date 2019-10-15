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

        $request = $http->makeRequest('put', 'ordenPago/registra', [
            'json' => array_merge([
                'firma' => $signature
            ], $data),
        ]);

        return json_decode($request->getBody())->resultado;
    }
}
