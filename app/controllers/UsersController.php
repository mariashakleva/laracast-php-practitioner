<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index(){

        $tasks = App::get('database')->selectAll('todos');

        return view('users', compact('tasks'));
    }

    public function store()
    {

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
                App::get('database')->insert('todos', [
                    'description' => $_POST['description'],
                    'completed' => $_POST['completed']
                ]);
            }
        }

        return redirect('users');
    }
}