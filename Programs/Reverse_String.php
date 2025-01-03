<?php

    function reverse_string($str){
        $result = "";
        $length = strlen($str);

        for($i = $length - 1; $i>=0; $i--){
            $result .= $str[$i]; 
        }

        return $result;
    }

    echo reverse_string("Hello");
?>