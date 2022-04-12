<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function Login() {
        return view('Auth.loginStudent');
    }
    function Regis() {
        return view('Auth.regisSTD');
    }
}
