<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function store()
    {
        $validation = $this->validate([
            "name" => "required",
            "email" => "required|valid_email|is_unique[users.email]",
            "password" => "required|min_length[6]"
        ]);
        
    }
}