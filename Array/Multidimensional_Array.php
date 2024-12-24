<!-- Multiple Rows and Multiple Columns -->

<?php
    $Employee = array(
        array(1,"Umang",25000),
        array(2,"Ravi",30000),
    );

    for($i=0; $i<=2; $i++)
    {
        for($j=0; $j<=2; $j++)
        {
            echo $Employee[$i][$j] . " ";
        }

        echo "<br/>";
    }
?>