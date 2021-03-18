<?php
    //運算子

    // 數學運算子(算術)
    $x = 10;
    $y = 6;
    $z = "";
    

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";

    //比較運算子

    var_dump($x > $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    //邏輯運算子 && || !
    var_dump($x > 0 && $y < 0);
    echo "<br>";
    var_dump($x < 0 || $y < 0);
    echo "<br>";
    var_dump(!$z);
    // 0,"",false 都會呼叫出 true
    echo "<br>";
    
    
    //指定運算子
    $a = 100;
    $b = 60;
    echo $a += $b; // $a = $a + $b;
    echo "<br>";
    echo $a -= $b; // $a = $a - $b;
    echo "<br>";
    echo $a *= $b; // $a = $a * $b;
    echo "<br>";
    echo $a /= $b; // $a = $a / $b;
    echo "<br>";
    echo $a %= $b; // $a = $a % $b;
    echo "<br>";

    // 字串運算子
    $s = "HELLO";
    $user = "John";

    // echo $s.$user;
    // echo "<h1>".$s."</h1>";

    // echo "<h1>$s</h1>";
    // echo "<h1>{$s}</h1>";
    
    // echo '<h1>$s</h1>';
    echo '<h1>{$s}</h1>';

?>