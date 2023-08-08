<?php
if(count($_FILES)>0){
    $folder="uploads/";
    if(!file_exists($folder)){
        mkdir($folder,0777,true);
    } 
    foreach ($_FILES as $key => $FILE) {
        # code...
        if($FILE["error"]==0){
            // archivo temporal
            $filename=$FILE["tmp_name"];
            $destination=$folder . $FILE["name"];
            move_uploaded_file($filename,$destination);
        }
    }
}