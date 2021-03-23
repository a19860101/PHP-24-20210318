<?php
    $x = ["紅茶","綠茶","奶茶","冰淇淋紅茶","拿鐵","卡布其諾","美式"];
    $y = "紅茶__綠茶__奶茶__冰淇淋紅茶__拿鐵__卡布其諾__美式";
    // print_r($x);
    
    // $x_num = count($x);
    // echo $x_num;
    // for($i=0;$i<count($x);$i++){
    //     echo $x[$i];
    // }

    // is_array()
    // print_r(is_array($x));
    // var_dump(is_array($y));
    // echo is_array($y);

    // in_array()
    // print_r(in_array("紅茶",$x));
    // var_dump(in_array("茶",$x));

    //compact() 變數->關聯陣列
    
    $username = "qwerty";
    $password = "123456";
    $email = "qwerty@gmail.com";

    $userArray = compact("username","password","email");
    // print_r($userArray);


    //extract() 關聯陣列->變數
    $person = [
        "name" => "John",
        "mail" => "john@gmail.com",
        "age"  => "20"
    ];
    extract($person);
    
    // echo $person["name"];
    // echo $person["mail"];
    echo $person["age"];

    // echo $name;
    // echo $mail;
    // echo $age;


    // implode() 陣列->字串
    $x_string = implode("__",$x);
    // echo $x_string;
    
    // explode() 字串->陣列

    $y_array = explode("茶",$y);
    // echo $y_array;
    // print_r($y_array);

    
    // shuffle() 隨機切換
    shuffle($x);
    print_r($x);

    $tels = ["02-12345678","02-12357846"];
    shuffle($tels);
    echo "<br>";
    echo $tels[0];
    echo "<br>";
    echo $tels[1];