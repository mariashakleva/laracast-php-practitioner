<?php

$people = [ 

    'John' => 23,
    'Mary' => 15,
    'Alice' => 21,
    'Lucy' => 17,
    'Jane' => 13,

];

function allowedAge($people){
    foreach($people as $name => $age){
        if($age >= 21){
            echo "$name is allowed in da club.<br/>";
        }else{
            echo "$name is waaay to young to party!<br/>";
        }
    }
}

include 'views/functions.view.php';