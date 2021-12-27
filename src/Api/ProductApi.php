<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class ProductApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getProducts(int $page = null, int $per_page = null): array
    {
        $path = 'Product';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
        ];
        return $this->get($this->configuration->getBasicToken(), $path, $paging);
    }

    public function getProduct(string $product_id): array
    {
        $path = "Product/{$product_id}";
        return $this->get($this->configuration->getBasicToken(), $path);
    }

    public function updateProduct(array $data): array
    {
        $path = 'Product';
        return $this->put($this->configuration->getBasicToken(), $path, $data);
    }

    public function createProduct(array $data): array
    {
        $path = 'Product';
        return $this->post($this->configuration->getBasicToken(), $path, $data);
    }
}
