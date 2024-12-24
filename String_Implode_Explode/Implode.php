<!-- Implode to use the Join the String and use with array elements and order by same as eleemnts
 passed into array and returns the sting  -->

<?php

    echo "Before string is : ";
    echo "array('Welcome','To','The','Umang!')";
    echo "\n";
    echo "<br>";

    // Creating array is store the values in array 
    $data = array('Welcome','To','The','Umang!');
    echo "\n";

    echo "After string is : ";
    echo implode("+",$data);

?>