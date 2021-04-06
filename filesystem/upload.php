<?php
    print_r($_FILES);
    echo "<br>";
    print_r($_FILES["pic"]);
    echo "<br>";
    print_r($_FILES["pic"]["name"]);

    extract($_FILES["pic"]);
    echo "<br>";
    echo $type;