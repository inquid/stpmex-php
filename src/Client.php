<?php

namespace Kinedu\STP;

use Kinedu\STP\Request\HttpClient;
use Kinedu\STP\Service\AccountService;

class Client
{
    /** @var string */
    protected $key;

    /** @var string */
    protected $passphrase;

    /** @var string */
    public $accountKey;

    /** @var bool */
    public $live;

    /** @var array */
    protected $services = [
        'account' => AccountService::class,
    ];

    /**
     * Create a client instance.
     *
     * @param  string  $key
     * @param  string  $passphrase
     * @param  string  $accountKey
     * @param  bool  $live
     *
     * @return void
     */
    public function __construct(string $key, string $accountKey, string $passphrase, bool $live = false)
    {
        $this->key = $key;
        $this->passphrase = $passphrase;
        $this->accountKey = $accountKey;
        $this->live = $live;
    }

    public function getSignature(): string
    {
        $pkey = $this->getCertificate();
        openssl_sign($this->accountKey, $signature, $pkey, OPENSSL_ALGO_SHA256);
        openssl_free_key($pkey);
        return base64_encode($signature);
    }

    public function getCertificate()
    {
        return openssl_get_privatekey($this->key, $this->passphrase);
    }

    /**
     * Magically handle calls to certain methods and properties.
     *
     * @param  string  $method
     * @param  array  $params
     *
     * @return mixed
     */
    public function __call(string $method, array $params)
    {
        if (array_key_exists($method, $services = $this->services)) {
            return new $services[$method](new HttpClient($this));
        }
    }
}
