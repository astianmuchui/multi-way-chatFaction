<?php

// Training mode. Ignore this damn file
$DangerWords = array("brad","ver","trav","sy");
$c = 0;

$message = 'brad traversy';
 foreach ($DangerWords as $Dangerword):
    $trial = stristr($message,$Dangerword);
    
    if($trial != true){
        $c++;
        // echo 'Word '.$c.' didnt match <br> <br>';
    }else{
        $c++;
        echo 'Word '.$c.' matched <br> <br>';
    }
 endforeach;
//This script should echo word 1-4 Matched respectively because all the array values are present in the message($message) Variable
 ?>