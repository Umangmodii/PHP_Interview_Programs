<!-- Trait class is basically abstract class or method to use the one parent class and extend with multiple --
 child class. -->

 <?php
    trait Student{
        public function Student_data(){
            echo "Hello!";
        }
    }

   class Student_info{
        use Student;
    }

    $s1 = new Student_info();
    $s1->Student_data();
 ?>