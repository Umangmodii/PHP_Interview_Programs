<!-- For Each Loop :=> Traversal Elements to used the Array As Value -->
<!-- Don't Need to Increment the Value -->

<?php

// To use the Array Functions to store the multiple Data

$day = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

// Normal Result 

    foreach($day as $days)
    {
        echo $days;
        echo "<br>";
    }

    echo "<br>";

// Key As Value to Find Results

    foreach($day as $key=>$days)
    {
        echo $key . " " . $days . "<br>";
    }

?>