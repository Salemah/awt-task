<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list(){
        $students = Student::all();
        // $student = array();
        // for ($i = 0; $i < 10; $i++) {
        //     $student = array(
        //         "id" => $i + 1,
        //         "name" => "Student " . ($i + 1),
        //         "dept" => "CS"
        //     );
        //     $student = (object)$student;
        //     $students[] = $student;
        // }
         return view('Student.list')->with('students',$students);



    }
    public function get(){
        $name="tanvir";
        $id="01";
        $courses = ["Pl1", "pl2", "DS", "Algo", "OOp1", "OOP2", "WT", "ATP2", "ATP3"];
        return view('Student.get')
        ->with('name',$name)
        ->with('id',$id)
        ->with('courses', $courses);
    }public function create(){
        return view('Student.create');
    }
    public function details(Request $req ){
        return view('Student.get')
        ->with('name',$req->name)
        ->with('id',$req->id-900)
        ->with('email',$req->email)
        ->with('courses', []);

    }
    public function edit(Request $req ){
        $student = Student :: where('id',decrypt($req->id))->first();

        return view('Student.edit')->with('students',$student);

    }
     //if its your edit submit function
     public function editSubmit(Request $req){


        $st = Student::where('id',$req->id)->first();
        $st->name = $req->name;
        $st->email = $req->email;

        $st->save(); //update
        return "<p>form updated</p>";
    }

}
