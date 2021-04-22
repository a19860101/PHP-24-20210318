<?php
    require_once("function.php");
    deleteCategory($_POST);
    
    echo "<script>alert('分類已刪除');</script>";
    header('Refresh:0;url=create.php');
    