<!-- To create the method of base class and extends to the derived class -->
<!-- The Abstract class public, private, Protected -->

<?php

abstract class Student{
    abstract public function dis1();
    abstract public function dis2();
}

class Student_Details extends Student{
    public function dis1(){
        echo "Hello!" . "<br>";
    }

    public function dis2(){
        echo "Umang";
    }
}

$sd = new Student_Details;
$sd->dis1();
$sd->dis2();