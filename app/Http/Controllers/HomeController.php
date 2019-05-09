<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('home');
    }

    public function allUser()
    {
        $users = User::all();

        return view ('alluser', compact('users'));
    }
    
}
