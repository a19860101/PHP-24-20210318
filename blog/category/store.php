<?php
    require_once("../pdo.php");
    require_once("function.php");
    storeCategory($_POST);
    echo "<script>alert('分類已新增');</script>";
    header('Refresh:0;url=create.php');