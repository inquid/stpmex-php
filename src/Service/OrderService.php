<?php

namespace Kinedu\STP\Service;

use Exception;
use Kinedu\STP\Utils\Chain;

class OrderService extends RestSTPService
{
    public function create(array $data): int
    {
        $signature = ($http = $this->http)->client->getSignature(
            Chain::generate($data)
        );

        $request = $http->makeRequest('put', 'ordenPago/registra', array_merge($data, [
            'firma' => $signature,
        ]));

        $result = json_decode($request->getBody())->resultado;

        if ($error = $result->descripcionError) {
            throw new Exception($error);
        }

        return $result->id;
    }
}
