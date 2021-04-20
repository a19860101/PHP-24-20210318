<?php
    session_start();
    unset($_SESSION["AUTH"]);
    echo "<script>alert('您已登出');</script>";
    header("refresh:1;url=index.php");