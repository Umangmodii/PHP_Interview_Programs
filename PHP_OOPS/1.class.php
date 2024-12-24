<?php

    class Student{
        private $name = "Umang";

        public function Display(){
            echo "Name is : " . $this->name;
        }
    };

    $s1 = new Student();
    $s1->Display();

?>