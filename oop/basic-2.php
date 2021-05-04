<?php
    class Person {
        public $gender = "Male";
        public $height;
        public $weight;
        private $skin = "yellow";

        function walk(){
            return "walk";
        }
        function pregnent(){
            return $this->gender = "Female";
        }
        function hello(){
            return $this->skin;
        }
    }

    class Asian extends Person{
        public $gender = "Female";
    }

    $lee = new Asian;
    echo $lee->hello();
    // echo $lee->walk();
    // echo $lee->pregnent();
    // echo $lee->gender;
    // echo $lee->skin ;
    $mary = new Person;
    // echo $mary->skin;
    echo $mary->hello();