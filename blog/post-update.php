<?php
    require_once("function.php");
    updatePost($_POST);

    echo "<script>alert('文章已更新')</script>";
    header("refresh:0.2;url=index.php");