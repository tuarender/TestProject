<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{

    public function main()
    {
        return View('layouts.main');
    }

    public function product()
    {
        return "Hello product";
    }

    public function news()
    {
        return "Hello news";
    }

    public function contact()
    {
        return "Hello contact";
    }

    public function member()
    {
        return "Hello member";
    }
}
