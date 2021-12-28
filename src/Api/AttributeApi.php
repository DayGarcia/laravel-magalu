<?php

namespace LaravelMagalu\Api;

use LaravelMagalu\Api;
use LaravelMagalu\Configuration;

class AttributeApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getAttributes(int $page = null, int $per_page = null)
    {
        $path = 'Attribute';
        $paging = [
            'page'      => $page ?? 1,
            'per_page'  => $per_page ?? 10,
        ];
        return $this->get($this->configuration->getBasicToken(), $path, $paging);
    }
}
