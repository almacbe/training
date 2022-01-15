<?php

namespace Database;

class Database
{
    private bool $isUpdateReady;
    private bool $isSyncCompleted;
    private bool $isCacheEnabled;

    public function __construct()
    {
        $this->isUpdateReady = false;
        $this->isSyncCompleted = false;
        $this->isCacheEnabled = false;
    }

    public function updateReady()
    {
        $this->isUpdateReady = true;
    }

    public function syncCompleted()
    {
        $this->isSyncCompleted = true;
    }

    public function cacheEnabled()
    {
        $this->isCacheEnabled = true;
    }

    /**
     * A simple method handling the database operation related task
     */
    public function update(bool $isForceUpdate): void
    {
        // isUpdateReady is class level variable
        if ($this->isUpdateReady) {
            // isForceUpdate is argument variable and based on this inner blocks is executed
            if ($isForceUpdate) {
                // isSyncCompleted is also class level variable, based on its true/false updateDbMain is called
                // here updateBackupDb is called in both the cases
                if ($this->isSyncCompleted) {
                    $this->updateDbMain(true);
                    $this->updateBackupDb(true);
                } else {
                    $this->updateDbMain(false);
                    $this->updateBackupDb(true);
                }
            } else {
                // execute this if isUpdateReady is false i. e., this is dependent on if condition
                $this->updateCache(!$this->isCacheEnabled);

                // end of second isForceUpdate block
            }
            // end of first if block
        }
        // end of method
    }

    private function updateDbMain(bool $update)
    {
    }

    private function updateBackupDb(bool $update)
    {
    }

    private function updateCache(bool $update)
    {
    }
}
