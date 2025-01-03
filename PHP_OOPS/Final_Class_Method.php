<!-- Final class or method to declare with only base class not derived the child class -->
<!-- Method cannot be override. -->

<?php
    class Student{
        final public function student_show(){
            echo "Parent Class.";
        }
    }

    class Student_info extends Student{
        public function student_show(){
            echo "Child Class.";
        }
    }

    $s1 = new Student_info();
    $s1->student_show();
?>
