<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Login() {
        return view('/Auth.loginAdmin');
    }
    function Register() {
        return view('/Auth.regisAdmin');
    }
    function Home() {
        return view('/Admin.homeAdmin');
    }
    function homeTeacher() {
        return view('/Admin.homeTeacher');
    }
    function homeStudent() {
        return view('/Admin.homeStudent');
    }
    function homeExercise() {
        return view('/Admin.homeExercise');
    }
    function dataT() {
        return view('/Admin.dataTeacher');
    }
}
