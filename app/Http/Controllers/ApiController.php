<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;


class ApiController extends Controller
{  
    
   
    public function getAllStudents(){

       $students = Student::get()->toJson(JSON_PRETTY_PRINT);
       return response($students, 200)->header('Content-Type', 'application/json; charset=utf-8');
    }

    public function store(StudentRequest $request){
        
        $student = new Student();
        $student->name = $request->input('name');
        $student->course =$request->input('course');
        $student->save();

       
        return response()->json([
            "message" => "student record created",
            "data"=>$student,
        ], 201)->header('Content-Type', 'application/json; charset=utf-8');;
    }

    public function getStudent($id){
        if(Student::where('id',$id)->exists()){
            $student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($student, 200)->header('Content-Type', 'application/json; charset=utf-8');
        }else{
            return response()->json( [
                "message" => "Student not found"
            ], 404);
        }
        
    }
  

    public function updateStudent(Request $request, $id){
        

        if (Student::where('id',$id)->exists()){
            $student = Student::find($id);
            $student->name = is_null($request->name) ? $student->name : $request->name;
            $student->course = is_null($request->course) ? $student->course : $request->course;
            $student->save();

            return response()->json([
               "message" => "records update sucessfully" // Registro atualizado com sucesso 
            ], 200);
        }else{
            return response()->json([
                "message" => "Student not found"
            ], 404);
        }
    }

    public function deleteStudent($id){
        if(Student::where('id', $id)->exists()){
            $student = Student::find($id);
            $student->delete();

            return response()->json([
                "message" =>"records deleted"
            ], 200);
        }else{
            return response()->json([
                "message" =>"Student not found"
            ], 404);
        }
        
    }
}
