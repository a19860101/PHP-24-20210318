<?php

    function test(){
        $x = 100;
        $y = 16;
        return $x*$y;
    }

    /* 
        1. 英文開頭
        2. 只可用底線
        3. 大小寫有別
    
    */

    function square($x){
        return $x * $x;
    }

    echo square(16);


    function title(){
        echo "<h1>HELLO PHP</h1>";
        return ;
    }

    title();

    function t($w,$h){
        return $w * $h;
        //終止執行
    }

    echo t(1024,768);