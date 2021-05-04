<?php
    require_once("gjun/user.php");
    require_once("gjun/post.php");

    use Oop\Gjun\User;

    $john = new User;

    echo $john->index();

    $test = new Oop\Gjun\Post ;
    echo $test->index();


