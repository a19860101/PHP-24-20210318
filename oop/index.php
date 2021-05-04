<?php
    require_once("user.php");
    require_once("post.php");

    use App\Post\Show;

    $test = new Show;
    echo $test->index();

    $test2 = new App\User\Show;
    echo $test2->index();