<?php
class mysqli {
    // ATTRIBUTI/PROPRIETA'
    public $connect_error;
    // public $server;
    // ... 

    // COSTRUTTORE
    function __construct($server, $username, $password, $db, $port = 3306) {
        $this->connect($server, $username, $password, $db, $port);
    }

    // METODI
    private function connect($server, $username, $password, $db, $port) {
        // ...
        $condition = true;
        if($condition) {
            $this->connect_error = "...";
        }
    }

    public function query($text) {
        // ...
        $newResult = new mysqli_result();
        $newResult->num_rows = 5;
    }

}