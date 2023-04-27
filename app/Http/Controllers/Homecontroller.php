<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index (){
        return view('home', [
            'users' => User::all()
        ]);
    }
}
