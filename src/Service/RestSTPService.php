<?php

namespace Kinedu\STP\Service;

use Kinedu\STP\Request\RestHttpClient;

class RestSTPService
{
    /** @var \Kinedu\STP\Request\RestHttpClient */
    protected $http;

    /**
     * Create a stp service instance.
     *
     * @param  \Kinedu\STP\Request\RestHttpClient  $http
     *
     * @return void
     */
    public function __construct(RestHttpClient $http)
    {
        $this->http = $http;
    }
}
