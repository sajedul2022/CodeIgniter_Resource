<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return "Product Home Page";
    }

    public function single()
    {
        return "Single Product Page";
    }
}
