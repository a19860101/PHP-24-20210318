<?php
    //loops 迴圈 -> 重複執行

    //for(初始值;終止條件;迴圈完成後要執行的動作)

    for($i=0;$i<10;$i++){
        echo "{$i}HELLO";
        echo "<br>";
    }

    //while(條件){動作}
    $j = 10;
    while($j < 10){
        $j++;
        echo "{$j}-BANANA";
        echo "<br>";
    }

    //do{動作}...while(條件)

    $k = 10;
    do{
        echo "{$k}--APPLE";
        echo "<br>";
        $k++;
    }
    while($k < 10);

    //foreach 陣列