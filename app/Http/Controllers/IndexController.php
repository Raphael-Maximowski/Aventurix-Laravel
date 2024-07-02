<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function login()
    {
        return view ('login');
    }
    public function register()
    {
        return view('register');
    }

    public function create()
    {
        
        $check = request('password');
        $confirm =  request('confirmpassword');
        request()->validate([
            'name' => ['min: 8'],
            'email' => ['min: 8'],
            'password' => ['min: 8']
        ]);
        if ($check ==  $confirm)
        {
            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => request('password')
            ]);
        }

        return redirect('/explorers');

    }
}
