<?php

namespace RRSS;

class HttpClient
{
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function get(): array
    {
        return [];
    }
}
