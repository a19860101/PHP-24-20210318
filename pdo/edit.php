<?php
    try{
        require_once("pdo.php");
        extract($_GET);
    
        $sql = "SELECT * FROM students WHERE id = ? ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }

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
    <h1>編輯學員資料</h1>
    <form action="update.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $row["name"];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $row["phone"];?>">
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="text" name="mail"  value="<?php echo $row["mail"];?>">
        </div>
        <div>
            <label for="">性別</label>
           
            <input type="radio" name="gender" value="男"<?php if($row["gender"]=="男"){echo "checked";} ?>>
            <label for="">男</label>
            <input type="radio" name="gender" value="女"<?php echo $row["gender"]=="女"?"checked":""; ?>>
            <label for="">女</label>
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小" <?php echo $row["edu"]=="國小"?"selected":""; ?>>國小</option>
                <option value="國中" <?php echo $row["edu"]=="國中"?"selected":""; ?>>國中</option>
                <option value="高中職" <?php echo $row["edu"]=="高中職"?"selected":""; ?>>高中職</option>
                <option value="大專院校" <?php echo $row["edu"]=="大專院校"?"selected":""; ?>>大專院校</option>
                <option value="研究所以上" <?php echo $row["edu"]=="研究所以上"?"selected":""; ?>>研究所以上</option>
            </select>
        </div>
        <div>
            <?php
                $skills = explode(",",$row["skill"]);
                // print_r($skills);
            ?>
            <label for="">專長</label>

            <input type="checkbox" name="skill[]" value="網頁設計" <?php echo in_array("網頁設計",$skills)? "checked":""; ?>>
            <label for="">網頁設計</label>
            <input type="checkbox" name="skill[]" value="平面設計" <?php echo in_array("平面設計",$skills)? "checked":""; ?>>
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="3D動畫" <?php echo in_array("3D動畫",$skills)? "checked":""; ?>>
            <label for="">3D動畫</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $row["content"];?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        <input type="submit" value="更新">
        <input type="button" value="取消" onclick="history.back()">
        <input type="button" value="取消" onclick="location.href='index.php'">
    </form>
</body>
</html>