<!-- Continue :=> Skip the Iteration Of Loop -->

<?php

    for($i=1; $i<=3; $i++)
    {
        for($x=1; $x<=3; $x++)
        {
            echo $i . $x . "<br>";
        }

        if(!($i == $x))
        {
            continue;
        }
    }

?>