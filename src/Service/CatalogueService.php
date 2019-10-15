<?php

namespace Kinedu\STP\Service;

class CatalogueService extends SoapSTPService
{
    public function get()
    {
        return $this->http->makeRequest('consultaCatalogos');
    }
}
