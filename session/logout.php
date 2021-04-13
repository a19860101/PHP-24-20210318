<?php   
    session_start();
    // session_destroy();
    unset($_SESSION["AUTH"]);
    echo "<script>alert('您已登出');</script>";
    header("refresh:0;url=index.php");