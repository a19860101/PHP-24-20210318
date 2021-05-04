<?php
      require_once("pdo.php");
      extract($_GET);
      $sql = "SELECT * FROM students WHERE id = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$id]);
      $student = $stmt->fetch()
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
    <form action="javascript:;" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $student["name"];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $student["phone"];?>">
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="text" name="mail" value="<?php echo $student["mail"];?>">
        </div>
        <div>
            <label for="">性別</label>
           
            <input type="radio" name="gender" value="男" <?php echo $student["gender"]=="男"?"checked":"";?> >
            <label for="">男</label>
            <input type="radio" name="gender" value="女" <?php echo $student["gender"]=="女"?"checked":"";?> >
            <label for="">女</label>
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小" <?php echo $student["edu"]=="國小"?"selected":"";?> >國小</option>
                <option value="國中" <?php echo $student["edu"]=="國中"?"selected":"";?> >國中</option>
                <option value="高中職" <?php echo $student["edu"]=="高中職"?"selected":"";?> >高中職</option>
                <option value="大專院校" <?php echo $student["edu"]=="大專院校"?"selected":"";?> >大專院校</option>
                <option value="研究所以上" <?php echo $student["edu"]=="研究所以上"?"selected":"";?> >研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">專長</label>
            <?php
                $skills = explode(",",$student["skill"]);
            ?>
            <input type="checkbox" name="skill[]" value="網頁設計" <?php echo in_array("網頁設計",$skills)?"checked":"";?>>
            <label for="">網頁設計</label>
            <input type="checkbox" name="skill[]" value="平面設計" <?php echo in_array("平面設計",$skills)?"checked":"";?>>
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="3D動畫" <?php echo in_array("3D動畫",$skills)?"checked":"";?>>
            <label for="">3D動畫</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $student["content"];?></textarea>
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="history.back()">
        <input type="button" value="取消" onclick="location.href='index.php'">
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){
            $('form').submit(function(){
                $.ajax({
                    url: 'store.php',
                    type:'post',
                    data: $('form').serialize(),
                    success(){
                        console.log('success');
                        location.href = "index.php"
                    }
                });
            });
        })
    </script>
</body>
</html>