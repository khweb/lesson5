<?php
$gallery = file(__DIR__.'/img.txt');

if (!empty($_FILES)) {
    $uploaded = $_FILES['userfile'];
    
   
if ($uploaded['error']==0){
        move_uploaded_file($uploaded['tmp_name'], __DIR__.'/images/'.$uploaded['name']);
      
        }
if (empty ($gallery[0])) {
     file_put_contents(__DIR__.'/img.txt', $uploaded['name'], FILE_APPEND);
        header('Location: http://php1.local/');
    
} else {
     file_put_contents(__DIR__.'/img.txt', "\n" . $uploaded['name'], FILE_APPEND);
        header('Location: http://php1.local/');
}


}

?>