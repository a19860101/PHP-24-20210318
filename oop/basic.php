<?php

    class Drink {
        public $sugar = true;
        public $ice = true;
        public $size = '500ml';

        function test(){
            return $this->size;
        }
        function hello(){
            return 'hello';
        }
    }


    $tea = new Drink;
    $tea->sugar = false;
    print_r($tea->test());
    // print_r($tea);

    // echo $tea->sugar;
    // echo $tea->size;
    echo $tea->hello();
    
    echo "<br>";
    // $milktea = new Drink;
    // $milktea->ice = false;
    // $milktea->size = "750ml";
    // print_r($milktea);
    // echo $milktea->test();