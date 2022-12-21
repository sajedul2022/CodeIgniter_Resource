<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "My Home Page";
        return view('welcome_message', $data);
    }

    public function about()
    {

        $data['title'] = "About US";

        echo view('includes/header.php', $data);
        echo view('includes/navbar.php');
        echo view('about_us');
        echo view('includes/footer.php');
    }

    public function contact()
    {

        $data['title'] = "Contact US";
        return view('contact_us',$data);
    }
}
