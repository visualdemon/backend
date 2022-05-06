<?php

class Conection {
    static public function connect () {
        $link= new PDO("mysql:host=localhost;dbname=backend-db","root","123",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
}