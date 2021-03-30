<?php
    require_once("conn.php");
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
    // echo implode(",",$skill);
    $skill = implode(",",$skill);

    // extract($_GET);
    // echo implode(",",$skill);

    $sql = "INSERT INTO students(name,phone,mail,gender,edu,skill,content,created_at)
            VALUES('$name','$phone','$mail','$gender','$edu','$skill','$content',NOW())";

    mysqli_query($conn,$sql);

    // header("location:index.php");

    echo "資料已新增";
    header("refresh:2;url=index.php");