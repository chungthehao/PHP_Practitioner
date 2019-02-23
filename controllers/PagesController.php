<?php

class PagesController 
{
    public function home()
    {
        // require 'views/index.view.php';
        return view('index');
    }

    public function about()
    {
        $company = 'Henry';

        // require 'views/about.view.php';
        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        // require 'views/contact.view.php';
        return view('contact');
    }
}