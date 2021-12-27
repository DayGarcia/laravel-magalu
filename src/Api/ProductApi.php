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

    public function getProducts(int $page, int $per_page): array
    {
        $path = 'Product';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
        ];
        return $this->get($this->configuration->getAccessToken(), $path, $paging);
    }

    public function getProduct(string $product_id): array
    {
        $path = "Product/{$product_id}";
        return $this->get($this->configuration->getAccessToken(), $path);
    }

    public function updateProduct(array $data): array
    {
        $path = 'Product';
        return $this->put($this->configuration->getAccessToken(), $path, $data);
    }

    public function createProduct(array $data): array
    {
        $path = 'Product';
        return $this->post($this->configuration->getAccessToken(), $path, $data);
    }
}
