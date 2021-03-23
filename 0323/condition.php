<?php
    //判斷式
    $x = 0;

    //if

    if($x > 0){
        echo "Success";
    }

    //if...else...

    if($x < 0){
        echo "小於零";
    }else{
        echo "錯誤";
    }

    //if...elseif...

    if($x > 0){
        echo "正數";
    }elseif($x < 0){
        echo "負數";
    }else{
        echo "零";
    }

    //switch
    switch($x){
        case 0:
            echo 0;
            break;
        case 10:
            echo 10;
            break;
        case 100:
            echo 100;
            break;
        default:
            echo "ERROR";
    }

    switch(true){
        case $x > 0:
            echo "大";
            break;
        case $x < 0:
            echo "小";
            break;

        default:
            echo "error";
    }