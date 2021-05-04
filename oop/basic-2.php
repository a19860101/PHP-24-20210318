<?php
    class Person {
        public $gender = "Male";
        public $height;
        private $skin = "yellow";
        protected $weight = "50kg";

        function walk(){
            return "walk";
        }
        function pregnent(){
            return $this->gender = "Female";
        }
        function hello(){
            // return $this->skin;
            return $this->weight;
        }
    }

    $mary = new Person;
    // echo $mary->skin;
    // echo $mary->hello();

    class Asian extends Person{
        public $gender = "Female";

        function test(){
            return $this->weight;
        }
    }

    $lee = new Asian;
    // echo $lee->hello();
    // echo $lee->walk();
    // echo $lee->pregnent();
    // echo $lee->gender;
    // echo $lee->skin ;
    // echo $lee->test();

        echo $lee->weight;



