<?php

namespace Kinedu\STP\Request;

interface HttpClient
{
    public function httpClient();
    public function endpoint(): string;
}
