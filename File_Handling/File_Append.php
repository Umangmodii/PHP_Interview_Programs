<!-- Add a string -->

<?php
    $data = fopen("data.txt","a");
    fwrite($data,"");
    fclose($data);

    echo "File Append Suceesfully!";
?>