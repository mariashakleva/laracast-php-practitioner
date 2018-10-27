<?php

namespace App\Controllers;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//generally a controller is responsible for recieving a request, delegating in some form and returning a response

class PageController
{
    public function home()
    {
        //Recieve the request

        //Delegate

        //Return a response

        return view('index');
    }

    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}