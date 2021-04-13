<?php
    session_start();
    unset($_SESSION["AUTH"]);
    echo "<script>alert('已登出');</script>";
    header("refresh:0;url=index.php");