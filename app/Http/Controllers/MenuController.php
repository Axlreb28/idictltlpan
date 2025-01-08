<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu()
    {
        return view('menu');
    }

    public function showMenu2()
    {
        return view('menu2');
    }
}
