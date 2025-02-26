<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function displayStudents($name=null){
        $students=['prince','sachin','deepak','nikita','sonu'];
        $found=false;
        foreach($students as $student){
            if($student==$name){
                $found=true;
            } 
        }
        return view('students',['students'=>$students,'name'=>$name,'found'=>$found]);
    }
    public function displayStudents1(){
        $students2=[
            ['name'=>'Prince','cgpa'=>8.5,'address'=>'Dwarka'],
            ['name'=>'Sachin','cgpa'=>7.5,'address'=>'Delhi'],
            ['name'=>'Deepak','cgpa'=>8.7,'address'=>'Noida'],
            ['name'=>'Nikita','cgpa'=>8.2,'address'=>'Gurgaon'],
            ['name'=>'Sonu','cgpa'=>7.8,'address'=>'Faridabad']
        ];
        return view('multistudents',['students2'=>$students2]);
    }
}
