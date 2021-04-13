<?php
    session_start();
    require_once("pdo.php");
    extract($_POST);

    $sql = "SELECT * FROM members WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($row);
    var_dump($row);