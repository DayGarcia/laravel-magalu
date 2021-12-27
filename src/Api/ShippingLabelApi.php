<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class ShippingLabelApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function createShippingLabel(array $data): array
    {
        $path = 'Order/ShippingLabels';
        return $this->post($this->configuration->getBasicToken(), $path, $data);
    }
    /* 
    public function downloadShippingLabel(string $url)
    {
        $path = $url;
        return $this->download($this->configuration->getBasicToken(), $path);
    } */
}
