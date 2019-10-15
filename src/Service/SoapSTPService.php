<?php

namespace Kinedu\STP\Service;

use Kinedu\STP\Request\SoapHttpClient;

class SoapSTPService
{
    /** @var \Kinedu\STP\Request\HttpClient */
    protected $http;

    /**
     * Create a stp service instance.
     *
     * @param  \Kinedu\STP\Request\SoapHttpClient  $http
     *
     * @return void
     */
    public function __construct(SoapHttpClient $http)
    {
        $this->http = $http;
    }
}
