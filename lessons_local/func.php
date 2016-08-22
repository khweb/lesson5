<?php 

function displayComment(){
    $rescoments = file(__DIR__.'/db.txt');
        foreach ($rescoments as $comments){ 
        echo '<div class="singlcomment"><img src="/user.png" class="img">  '. $comments .' </div>';
     }
    
}

?>