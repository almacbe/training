<?php

namespace RRSS;

class UserRepository
{
    private MysqlConnection $connection;

    public function __construct(MysqlConnection $connection)
    {
        $this->connection = $connection;
    }

    public function getUserByEmail(string $email): User
    {
        // $user = new User();

        return $user;
    }
}
