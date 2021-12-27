<?php


namespace LaravelMagalu;

class Configuration
{
    private $user;
    private $password;
    private $basic_token;
    private $errors = [];

    public function __construct(array $config)
    {
        $this->url = config('magalu.sandbox') ? config('magalu.host.sandbox') : config('magalu.host.production');
        $this->user = $config['user'] ?? null;
        $this->password = $config['password'] ?? null;
        $this->basic_token = $config['basic_token'] ?? null;

        !empty($this->access_token) ? $this->setBasicToken($this->basic_token) : $this->generateBasicToken();
    }

    public function generateBasicToken(): string
    {
        return $this->basic_token = base64_encode($this->user . ':' . $this->password);
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getBasicToken()
    {
        return $this->basic_token;
    }

    public function setBasicToken(string $basic_token)
    {
        $this->basic_token = $basic_token;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrorCode(float $error_code): void
    {
        $this->error_code = $error_code;
    }

    public function getErrorCode(): float
    {
        return $this->error_code;
    }
}
