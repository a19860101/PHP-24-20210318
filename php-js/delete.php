<?php
    require_once("pdo.php");

    extract($_POST);
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
