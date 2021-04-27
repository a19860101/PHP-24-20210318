<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" id="user">
        <input type="text" name="mail" id="mail">
        <input type="submit" value="送出">
    </form>    

    <script>
        $(function(){
            $('form').submit(function(){
                console.log('submit');
                $.ajax({
                    url: 'test.php',
                    type:'post',
                    data:{
                        user: $('#user').val() ,
                        mail: $('#mail').val()
                    },
                    success(data){
                        console.log(this.data);
                        // location.href='test2.php'
                    }
                })

                return false;
            })
        })
    </script>
</body>
</html>