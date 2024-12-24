<?php
    abstract class Student{
        private $id;
        private $name;

        public function display(){
            echo "The id is : " . $this->id . "<br>";
            echo "The Name is : " . $this->name . "<br>";
        }

        abstract public function data();
    }

    class Student_info extends Student{
        public function data(){
            echo "Run it Code in Derived class.";
        }
        
        public function data(){
            return parent::data();
        }
    }

    $s1 = new Student_info;
    $s1->display();
    $s1->data();
?>