<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class StockApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function updateStock(array $data): array
    {
        $path = 'Stock';
        return $this->put($this->configuration->getBasicToken(), $path, $data);
    }
}
