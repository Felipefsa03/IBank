<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    }


    public function create()
    {
        // echo "OK";
        return view('create');
    }

    public function enter()
    {
        // echo "Massa";
        return view('enter');
    }
}
