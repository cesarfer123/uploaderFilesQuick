<?php

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

$folder="images/";
if(!file_exists($folder)){
    mkdir($folder,0777,true);
}


if(isset($_FILES["file"]) && $_FILES["file"]["name"]!="" && $_FILES["file"]["error"]==0){
   $destination=$folder . $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],$destination);
    //devulve los archivos que terminen en esa extension

    $files=glob($folder . "*.{jpg,JPG,jpeg,JPEG,png,PNG}",GLOB_BRACE);
    // echo "<pre>";
    // print_r($files);
    // echo "</pre>";
    echo json_encode($files);
}else{
    
    $files=glob($folder . "*.{jpg,JPG,jpeg,JPEG,png,PNG}",GLOB_BRACE);
    echo json_encode($files);

}