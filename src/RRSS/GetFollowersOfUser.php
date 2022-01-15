<?php

namespace RRSS;

class GetFollowersOfUser
{
    private UserRepository $userRepository;
   private TwitterClient $twitterClient;

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
