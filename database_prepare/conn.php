<?php
    // * 第一種連線方式
    // $db_host = "localhost";
    // $db_user = "admin";
    // $db_pw = "admin";
    // $db_name = "php-24-20210318";
    
    // $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫錯誤，請聯繫管理員!!");
    // // $conn = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫錯誤，請聯繫管理員!!");

    // mysqli_query($conn,"SET NAMES UTF8");

    // * 第二種連線方式(物件導向)
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-24-20210318";

    //建立mysqli實體
    $conn = new mysqli($db_host,$db_user, $db_pw, $db_name);
    $conn->query("SET NAMES UTF8");