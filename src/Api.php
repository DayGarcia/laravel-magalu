<?php

namespace LaravelMagalu;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;

class Api
{
    public function __construct()
    {
        $this->url = config('magalu.sandbox') ? config('magalu.host.sandbox') : config('magalu.host.production');
    }

    public function get(string $token, string $path, array $query = null, array $headers = []): array
    {
        return Http::withHeaders(array_merge(['Accept' => 'application/json', 'Authorization' => "Basic {$token}"], $headers))->get($this->url . $path, $query)->throw()->json();
    }

    public function post(string $token, string $path, array $data, array $headers = []): array
    {
        return Http::withHeaders(array_merge(['Accept' => 'application/json', 'Authorization' => "Basic {$token}"], $headers))->post($this->url . $path, $data)->throw()->json();
    }

    public function put(string $token, string $path, array $data, array $headers = []): array
    {
        return Http::withHeaders(array_merge(['Accept' => 'application/json', 'Authorization' => "Basic {$token}"], $headers))->put($this->url . $path, $data)->throw()->json();
    }

    public function delete(string $token, string $path, array $headers = []): array
    {
        return Http::withHeaders(array_merge(['Accept' => 'application/json', 'Authorization' => "Basic {$token}"], $headers))->delete($this->url . $path)->throw()->json();
    }

    public function upload(string $token, string $path, UploadedFile $file, array $headers = [])
    {
        return Http::withHeaders(array_merge(['Accept' => 'application/json', 'Authorization' => "Basic {$token}"], $headers))->attach(
            'file',
            file_get_contents($file),
            $file->getClientOriginalName()
        )->post($this->url . $path)->throw()->object();
    }

    public function download(string $token, string $path)
    {
        return Http::withHeaders([
            'Content-Type' => 'text/plain',
            'Accept' => 'application/json',
            'Authorization' => "Basic {$token}"
        ])->get($this->url . $path)->body();
    }
}
