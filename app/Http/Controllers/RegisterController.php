<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index');
    }
    
    public function store(Request $request){
        //$data = $request->only(['name','login']);
        //$data = $request->except(['name','login']);
        //$data = $request->all();
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $agreement = $request->boolean('agreement');
        
        // dd($name, $email, $remember);
        // dd($request->has('name')); // proverka na premen
        // dd($request->filled('name')); // na pustaty
        //dd($request->missing('name')); // 
        dd($name, $email, $password, $agreement);
        return 'HI';
    }

}
