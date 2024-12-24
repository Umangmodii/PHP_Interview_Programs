<!-- Local Varible :=> Used for Inside the Functions and Can be access it. Because, Scope is Limited. -->
<!-- It cannot be Access to the Outside of Functions -->

<?php

    function Student()
    {
        $id = 1;
        $name = "Umang";

        echo "Student Id is : " . $id . "<br>"; 
        echo "Student Name is : " . $name . "<br>"; 
    }

    Student();

?>