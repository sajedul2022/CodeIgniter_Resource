<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        return view("hello");
    }
    public function view($page = 'home')
    {
        return view($page);

    }
}
