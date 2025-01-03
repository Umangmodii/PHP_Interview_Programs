<!-- Iterable is function argument to return type of function -->
<!-- Foreach() is traversal elements of array. -->

<?php

    function Days(iterable $iterable){
        foreach($iterable as $days){
            echo " " . $days;
        }
    }

    $day = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    Days($day);
?>