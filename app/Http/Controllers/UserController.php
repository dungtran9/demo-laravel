<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users', ['user' =>
            [['name' => 'thang', 'age' => '20', 'address' => 'hanoi'],
                ['name' => 'chien', 'age' => '15', 'address' => 'namdinh']]]);
    }
}
