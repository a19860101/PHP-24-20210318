<?php
    require_once("pdo.php");
    require_once("function.php");
    deletePost($_POST);

    echo "<script>alert('文章已刪除')</script>";
    header("refresh:0.2;url=index.php");