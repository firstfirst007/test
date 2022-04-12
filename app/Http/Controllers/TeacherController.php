<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class TeacherController extends Controller
{
    function Login() {
        return view('Auth.loginTeacher');
    }
    function Regis() {
        return view('Auth.regisTeach');
    }
    function createRoom() {
        return view('Teacher.createRoom');
    }
    function classroom() {
        return view('Teacher.classroom');
    }
    function pointSTD() {
        return view('Teacher.pointSTD');
    }
    function addSTD() {
        return view('Teacher.addSTD');
    }
    function registerUserTeacher(Request $request) {
        $request->validate([
            'username'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        $user = new User();
        $user->username = $request->username;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfuly.');
        }
        else{
            return back()->with('fail', 'Something wrong');
        }
    }
    function loginUserTeacher(Request $request) {
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        /*if($user){
            if(Hash::check($request->password, $user->password){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Password not matches.');
            }
        else{
            return back()->with('fail', 'This email is not registered.');
        }*/
    }
    function dashboard(){
        return "Welcome to your dashboard";
    }
}
