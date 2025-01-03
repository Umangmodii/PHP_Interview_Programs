<?php

$file_path = "C:/Xampp 2/htdocs/PHP_Practise_Code/Image";
$file_path = $file_path.basename($_FILES['myfile']['name']);

if(move_uploaded_file($_FILES['myfile']['tmp_name'],$file_path))
{
    echo "File is Successfully Uploaded..";
}

else
{
    echo "File is Not Uploaded..";
}
?>
    
