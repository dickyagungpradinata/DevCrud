<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','admin@localhost');
define('DB_NAME','webprak');

class Dbconfig {
    var $conn;
    function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            echo $this->conn->connect_error;
        }
    }
}