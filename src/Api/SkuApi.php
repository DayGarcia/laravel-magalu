<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class SkuApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getSkus(int $page, int $per_page, string $status): array
    {
        $path = 'Sku';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
        ];
        return $this->get($this->configuration->getAccessToken(), $path, $paging);
    }

    public function getSku(string $sku_id): array
    {
        $path = "Sku/{$sku_id}";
        return $this->get($this->configuration->getAccessToken(), $path);
    }

    public function updateSku(array $data): array
    {
        $path = 'Sku';
        return $this->put($this->configuration->getAccessToken(), $path, $data);
    }

    public function createSku(array $data): array
    {
        $path = 'Sku';
        return $this->post($this->configuration->getAccessToken(), $path, $data);
    }
}
