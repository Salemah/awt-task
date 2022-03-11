<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class PagesController extends Controller
{
    public function login(){
        return view('Home.Logins.login');
    }
    public function register(){
        return view('Home.Logins.register');
    }
    public function registersubmit(Request $req){
        $req->validate([
            'name'=>'required|unique:students,name',
            'email'=>'required|email',
            'pass'=>'required|min:4',
            'cpass'=>'required|same:pass'
        ],
    [
        'name.unique'=>'name is  Unique',
        'email.email'=>'Email required',
        'cpass.same'=>'password missmatched'

    ]);
    $st = new Student();
    $st->name = $req->name;
    $st->email = $req->email;
    $st->password = $req->name;

    $st->save();
        return '<p>submitted by {{$req->name}} </p>';

    }


}
