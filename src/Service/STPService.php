<?php

namespace Kinedu\STP\Service;

use Kinedu\STP\Request\HttpClient;

class STPService
{
    /** @var \Kinedu\STP\Request\HttpClient */
    protected $http;

    /**
     * Create a stp service instance.
     *
     * @param  \Kinedu\STP\Request\HttpClient  $http
     *
     * @return void
     */
    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }
}
