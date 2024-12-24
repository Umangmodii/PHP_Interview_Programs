<!-- Global Varible :=> Used for Outside the Functions and Can be access it. Because, Scope is Limited. -->
<!-- It can be Access to the Anywhere the function Inside Or Outside -->

<?php

    $id = 1;

    function Student()
    {
        global $id;
        $name = "Umang";

        echo "Student Id is : " . $id . "<br>"; 
        echo "Student Name is : " . $name . "<br>"; 
    }

    Student();

?>