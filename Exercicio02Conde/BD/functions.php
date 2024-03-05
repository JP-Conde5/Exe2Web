<?php
    function db_conection(){
        $PDO = new PDO("mysql:host=" . DB_HOST . ";dbname=" .DB_NAME . ";charset=utf-8", DB_USER, DB_PASS);
        return $PDO;
    }
?>