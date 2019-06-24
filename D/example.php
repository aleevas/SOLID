<?php

interface ConnectionInterface {
    public function connect();
}


class DbConnection implements ConnectionInterface {
 public function connect(){
     // Do some stuff to connect to DB.
 }
}

class PasswordReminder {   //[high level]
    /**
     * @var MySQLConnection [low level].
     */
    private $dbConnection; // violents DIP, cuz,high level module depend on low level module

    public function __construct(ConnectionInterface $dbConnection){
        $this->dbConnection = $dbConnection;
    }
}
