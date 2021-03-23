<?php
    //Array 陣列

    $x = array();
    // $x[0] = "紅茶";
    // $x[1] = "綠茶";
    // $x[2] = "奶茶";

    $x = ["紅茶","綠茶","奶茶","冰淇淋紅茶","拿鐵","卡布其諾"];

    // echo $x;
    // var_dump($x);
    // print_r($x);

    // echo $x[0];
    // echo $x[1];
    // echo $x[2];
    // echo $x[3];
    // echo $x[4];

    // 陣列迭代
    // for($i=0;$i<6;$i++){
    //     echo $x[$i];
    //     echo "<br>";
    // }
    var_dump($x);
    foreach($x as $data){
        echo $data;
        echo "<br>";
    }

    // 關聯陣列
    $drinks = [
        "紅茶"=>"30",
        "綠茶"=>"30",
        "奶茶"=>"35",
        "冰淇淋紅茶"=>"45",
        "拿鐵"=>"50"
    ];

    var_dump($drinks);
    print_r($drinks);
    echo "<br>";

    foreach($drinks as $key => $value){
        echo "{$key} : NT.{$value} ";
        echo "<br>";
    }