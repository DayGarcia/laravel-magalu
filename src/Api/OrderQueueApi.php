<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class OrderQueueApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getOrderQueue(int $page = null, int $per_page = null, string $status = null): array
    {
        $path = 'OrderQueue';
        $paging = [
            'page'      => $page ?? 1,
            'perPage'   => $per_page ?? 10,
            'status'    => $status ?? 'APPROVED',
        ];
        return $this->get($this->configuration->getBasicToken(), $path, $paging);
    }

    public function updateOrder(array $data): array
    {
        $path = 'OrderQueue';
        return $this->put($this->configuration->getBasicToken(), $path, $data);
    }
}
