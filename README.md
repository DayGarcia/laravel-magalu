# Magazine Luiza Laravel

<h4>A package to connect to Magazine Luiza API</h4>

## Requirements

PHP 8 and later

## Installation & Usage

### Composer

To install via [composer](http://getcomposer.org/):

```
composer require daygarcia/laravel-magalu
```

## Setup

The `Configuration` constructor takes a single argument: an array containing all configuration needed to connect to Magalu API:

```php
<?php

// Still under development

use Illuminate\Http\Request;

...

$config = new Configuration([
    'user'          => config('magalu.user'),
    'password'      => config('magalu.password'),
    'basic_token'   => $request->cookie('basic_token') ?? null,
]);


```

Getter and setter methods are available for the `Configuration` class. You can directly get and set `user`, `password`, `secret`, `redirect_uri` and `basic_token`

Alternatively, if you are managing your token by yourself, you dont need request a new token every single API call. You can just pass the token as a value in `Configuration` instance:

```php
<?php

use Illuminate\Http\Request;

...

$config = new Configuration([
    'basic_token' => 'your_token',
]);


```

## Example

```php
<?php

use Magalu\Configuration;

...

public function index(Request $request)
{
    $config = new Configuration([
        'basic_token' => $request->cookie('basic_token'),
    ]);

    try {
        $meli = new ItemApi($config);
        $items = $meli->getSellerItems($request->cookie('user_id'));
        $response = $meli->getItems($items->results);

        return $this->success($response);
    } catch (Exception $e) {
        return $this->error($e->getMessage(), $e->getCode());
    }
}


```

## Documentação e notas importantes

##### Pendente adicionar URLs.
