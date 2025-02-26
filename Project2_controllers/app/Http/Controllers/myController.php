<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller{
    public function index(){
        return "This is my first controllers";
    }
    public function display(){
        $name = "Abhishek";
        $marks = 28;
        return "Hello $name Your marks are $marks";
    }
    public function problem1($name,$age){
        // $name = "Abhishek";
        // $age = 28;
        return view('problem1',['name'=>$name,'age'=>$age]);
    }
}
