<?php function saveComment($comments){    
    file_put_contents(__DIR__.'/db.txt', "\n" . $comments   , FILE_APPEND);
}

if (isset($_GET['coment'])) {
            $replay = $_GET['coment']; 
            if($replay !='') {
            saveComment($replay);
            header('Location: http://php1.local/');
   
}
else{ header('Location: http://php1.local/');
}
}
?> 