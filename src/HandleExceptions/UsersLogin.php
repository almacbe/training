<?php


namespace HandleExceptions;

class UsersLogin
{
    /**
     * @var ErrorLogger
     */
    private $errorLogger;

    public function __construct(ErrorLogger $anErrorLogger)
    {
        $this->errorLogger = $anErrorLogger;
    }

    private function checkLogin()
    {
        // ...
        // Some validation to check if the credentials are valid
        // ...
        $hasNotValidCredentials = true;

        if ($hasNotValidCredentials) {
            return -1;
        }

        // ...
        // Some validation to check if the user has attempted too many times to login
        // ...
        $hasTooManyLoginAttempts = false;

        if ($hasTooManyLoginAttempts) {
            return -2;
        }

        return 1;
    }

    public function logIn()
    {
        switch ($this->checkLogin()) {
            case -1:
                $this->errorLogger->log("Invalid credentials");
                break;
            case -2:
                $this->errorLogger->log("Too many login attempts");
                break;
            default:
                // Successful scenario, log in the user
                break;
        }
    }
}
