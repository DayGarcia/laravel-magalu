<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class PromotionApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function createPromotion(array $data): array
    {
        $path = 'Promotion';
        return $this->post($this->configuration->getBasicToken(), $path, $data);
    }
}
