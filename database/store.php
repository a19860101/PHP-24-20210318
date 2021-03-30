<?php

    // print_r($_POST);

    // echo $_POST["name"];
    // echo "<br>";
    // echo $_POST["phone"];
    // echo "<br>";
    // echo $_POST["mail"];
    // echo "<br>";
    // echo $_POST["gender"];
    // echo "<br>";
    // echo $_POST["edu"];
    // echo "<br>";
    // print_r($_POST["skill"]);
    // echo "<br>";
    // echo $_POST["content"];
    // echo "<br>";

    extract($_POST);
    echo implode(",",$skill);

    // extract($_GET);
    // echo implode(",",$skill);