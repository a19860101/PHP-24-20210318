<?php
    extract($_POST);
    echo $img;

    unlink($img);

    header("location:list.php");