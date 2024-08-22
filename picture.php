<?php
if (isset($_POST["submit"])) {
    $file = $_FILES["file"];
    
    $fileName = $_FILES["file"]["name"]
    $fileTmpName = $_FILES["file"]["tmp_name"]
    $fileSize = $_FILES["file"]["size"]
    $fileError = $_FILES["file"]["error"]
    $fileType = $_FILES["file"]["type"]

    $fileExt = explode(".", $fileName)
    $fileActualExt = strtolower(end($fileExt));

    $allowedFile = array("jpg","jpeg","png","svg","webp")

    if (in_array (fileActualExt, $allowedFile)) {
        if ($fileError == 0) {
            # code...
        }
    
    } 
    else
    {
        echo "you cannot use this file type to upload, try another"
    }