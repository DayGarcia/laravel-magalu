<?php


namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class PriceApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function updatePrice(array $data): array
    {
        $path = 'Price';
        return $this->post($this->configuration->getBasicToken(), $path, $data);
    }
}
