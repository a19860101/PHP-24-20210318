<?php
    require_once("pdo.php");
    $sql = "SELECT * FROM students ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $students = array();
    while($row = $stmt->fetch()){
        $students[] = $row;
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
    <nav>
        <a href="create.php">新增資料</a>
    </nav>
    <?php foreach($students as $student){ ?>
        <div>
            <b><?php echo $student["name"]; ?></b>__
            <span><?php echo $student["phone"]; ?></span>__
            <span><?php echo $student["created_at"]; ?></span>
            <form action="javascript:;" method="post">
                <input type="hidden" name="id" value="<?php echo $student["id"]; ?>">
                <input type="submit" value="刪除" class="delete">
            </form>
            <hr>
        </div>
    <?php } ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){
            $('.delete').click(function(){
                $.ajax({
                    url: 'index.php',
                    type: 'post',
                    data: $('form').serialize(),
                    success(){
                        console.log(this);
                        // location.href='index.php'
                    }
                })
            })
        })
    </script>
</body>
</html>