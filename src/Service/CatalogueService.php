<?php

namespace Kinedu\STP\Service;

class CatalogueService extends STPService
{
    public function get()
    {
        return $this->http->makeRequest('consultaCatalogos');
    }
}
