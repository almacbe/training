<?php

namespace RRSS;

class GetFollowersOfUser
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var TwitterClient
     */
    private $twitterClient;

    public function __construct(UserRepository $userRepository, TwitterClient $twitterClient)
    {
        $this->userRepository = $userRepository;
        $this->twitterClient = $twitterClient;
    }

    public function execute(string $email): array
    {
        return [];
    }
}
