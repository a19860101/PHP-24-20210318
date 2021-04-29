<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-24-20210318";
    $db_charset = "utf8";

    date_default_timezone_set("Asia/Taipei");
    $now = date("Y-m-d H:i:s");

    
    try {
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";        
        $pdo = new PDO($dsn,$db_user,$db_pw);
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }