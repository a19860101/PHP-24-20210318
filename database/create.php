<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>新增學員資料</h1>
    <form action="store.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="text" name="mail">
        </div>
        <div>
            <label for="">性別</label>
           
            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            <input type="radio" name="gender" value="女">
            <label for="">女</label>
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">專長</label>

            <input type="checkbox" name="skill[]" value="網頁設計">
            <label for="">網頁設計</label>
            <input type="checkbox" name="skill[]" value="平面設計">
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="3D動畫">
            <label for="">3D動畫</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">
    </form>
</body>
</html>