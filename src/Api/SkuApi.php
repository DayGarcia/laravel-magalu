<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class SkuApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getSkus(int $page = null, int $per_page = null): array
    {
        $path = 'Sku';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
        ];
        return $this->get($this->configuration->getBasicToken(), $path, $paging);
    }

    public function getSku(string $sku_id): array
    {
        $path = "Sku/{$sku_id}";
        return $this->get($this->configuration->getBasicToken(), $path);
    }

    public function updateSku(array $data): array
    {
        $path = 'Sku';
        return $this->put($this->configuration->getBasicToken(), $path, $data);
    }

    public function createSku(array $data): array
    {
        $path = 'Sku';
        return $this->post($this->configuration->getBasicToken(), $path, $data);
    }
}
