<!-- Static method is mutable. value cannot be changed during the execution of the code. -->
<!-- Not instance of class create and access with (::) -->

<?Php
    class Student{
        public static function Students(){
            echo "Static methods call.";
        }
    }

    Student::Students();
?>