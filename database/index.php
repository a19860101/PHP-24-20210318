<?php
    require_once("conn.php");

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);

    // $row = mysqli_fetch_assoc($result);
    // print_r($row);

    // $row = mysqli_fetch_assoc($result);
    // print_r($row);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="600">
    <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["mail"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>