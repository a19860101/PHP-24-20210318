<?php
    require_once("pdo.php");
    require_once("function.php");

    storePost($_POST);

    echo "<script>alert('文章已新增')</script>";
    header("refresh:0.2;url=index.php");