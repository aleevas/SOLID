<?php

class PasswordReminder {   //[high level]
    /**
     * @var MySQLConnection [low level].
     */
    private $dbConnection; // violents DIP, cuz,high level module depend on low level module

    public function __construct(MySQLlConnection $dbConnection){
        $this->dbConnection = $dbConnection;
    }
}
