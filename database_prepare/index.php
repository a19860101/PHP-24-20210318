<?php
    require_once("conn.php");

    $sql = "SELECT * FROM students";
    // $result = mysqli_query($conn,$sql);
    $result = $conn->query($sql);

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
    <nav>
        <a href="create.php">新增學員資料</a>
    </nav>
    <table border="1" width="600">
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>MAIL</th>
            <th>電話</th>
            <th>性別</th>
            <th>學歷</th>
            <th>動作</th>
        </tr>
        <?php //while($row = mysqli_fetch_assoc($result)){ ?>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["mail"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["edu"];?></td>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                    <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
                </form>
                <a href="edit.php?id=<?php echo $row["id"];?>">編輯</a>
            </td>
        </tr>
        <?php } ?>
    </table>





    <!-- <table border="1" width="600"> -->
    <?php
        // while($row = mysqli_fetch_assoc($result)){
        //     echo "<tr>";
        //     echo "<td>".$row["name"]."</td>";
        //     echo "<td>".$row["phone"]."</td>";
        //     echo "<td>".$row["mail"]."</td>";
        //     echo "<td>".$row["gender"]."</td>";
        //     echo "</tr>";
        // }
    ?>
    <!-- </table> -->
</body>
</html>