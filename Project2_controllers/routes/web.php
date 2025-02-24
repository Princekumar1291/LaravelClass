<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\myController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function (){
    return "Hello";
});
Route::get('/test/{userName}',function ($userName){
    return "Hello, $userName";
});

Route::get('sum/{a}/{b}',function($a,$b){
   return "sum of $a and $b is ".$a+$b; 
});

Route::get('lpuaddmission/{regno?}',function($regno=null){
    if($regno==null){
        return "Error: You are not registered";
    }
    return "Hello Your regNo: ".$regno; 
});

//pass the data using associative array
Route::get('test/{name}',function($name){
    return view('test',['name'=>$name]);
});


Route::get('test1/{name}/{marks}',function($name,$marks){
    return view('test',['name'=>$name,'marks'=>$marks]);
});

//pass the data using with method
Route::get('test2/{name}/{marks}',function($name,$marks){
    return view('test')->with('name',$name)->with('marks',$marks);
});

Route::get('test3/{name}/{marks?}',function($name,$marks="Not evaluated yet"){
    return view('test')->with('name',$name)->with('marks',$marks);
});

//pass the data using compact method
Route::get('test4/{name}/{marks}',function($name,$marks){
    return view('test', compact('name', 'marks'));
});

//controllers
Route::get('/index',[myController::class,'index']);
Route::get('/display',[myController::class,'display']);