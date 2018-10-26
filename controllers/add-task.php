<?php

$errors = [];

 
if(isset($_POST['submit'])){
    
    if(isset($_POST['completed'])){ 
        $_POST['completed'] = 1; 
    }else{
        $_POST['completed'] = 0; 
    }
    if(isset($_POST['description']) && $_POST['description'] == ''){
        $errors['description'] = 'You must describe your task!';
    }else{
        $app['database']->insert('todos', [
            'description' => $_POST['description'],
            'completed' => $_POST['completed']
        ]);
    }
}

header('Location: /');