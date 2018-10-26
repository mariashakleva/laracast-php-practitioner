<?php

include 'main_functions.php';

class Task{

    // properties
    public $description;
    public $completed = false;

    public function __construct($description)

    {
        // Automatically triggered on instatiation

        $this->description = $description;

    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}

// instance of a class is an object
$tasks = [
    new Task('Go to the store'), 
    new Task('Finish up course'), 
    new Task('Learn PHP')
]; 

$tasks[0]->complete();

// var_dump($task->isComplete());

require 'views/classes.view.php';


