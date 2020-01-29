<?php

namespace RRSS;

class HttpClient
{
    /**
     * @var string
     */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function get(): array
    {
        return [];
    }
}
