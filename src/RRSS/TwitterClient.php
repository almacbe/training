<?php

namespace RRSS;

class TwitterClient
{
    private HttpClient $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getFollowersOf(string $twitterId): array
    {
        // $followers = [new Follower(), new Follower()];

        return $followers;
    }
}
