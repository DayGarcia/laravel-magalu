<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class CategoryApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getCategories(int $page, int $per_page, int $level): array
    {
        $path = 'Category';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
            'level'     => $level ?? 0,
        ];
        return $this->get($this->configuration->getAccessToken(), $path, $paging);
    }

    public function getCategory(string $category_id): array
    {
        $path = "Category/{$category_id}";
        return $this->get($this->configuration->getAccessToken(), $path);
    }

    public function createCategory(array $data): array
    {
        $path = 'Category';
        return $this->post($this->configuration->getAccessToken(), $path, $data);
    }
}
