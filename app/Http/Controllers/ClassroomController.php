<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Student;
use Illuminate\Support\Facades\Validator;
class ClassroomController extends Controller
{
    //
    public function all(){
        $all_classroom = Classroom::all();        
        $data = [
            'data'=>$all_classroom
        ];
        return View('Classroom.all',$data);
    }
    public function add(Request $request){
        return View('Classroom.add');
    }
    public function insert_class(Request $request){
        $classroom = new Classroom();
        $classroom->ten_lop = $request->get("ten_lop");
        $classroom->noi_dung_lop = $request->get("noi_dung_lop");
        $classroom->save();
        return redirect("classroom/all");
    }
    public function add_student(){
        $classroom = Classroom::all();
        $data=[
            'classroom'=>$classroom
        ];   
        return View('Classroom.add_student',$data);
    }
    public function add_student_proccess(Request $request){
        $new_student = new Student();
        $new_student->ten_sv = $request->get("ten_sv");
        $new_student->dtb = $request->get("dtb");
        $new_student->class_id = $request->get("class_id");
        $new_student->save();
        return redirect('classroom/all');
    }
    public function edit($id){
        $student = Student::find($id);
        $classroom = Classroom::all();                
        $data = [
            'student' =>$student,
            'classroom' =>$classroom
        ];
        return View('Classroom.edit',$data);
    }
    public function update_student_proccess(Request $request){
        $student = Student::find($request->get("id"));
        $student->update([
            $student->ten_sv = $request->get("ten_sv"),
            $student->dtb = $request->get("dtb"),
            $student->class_id = $request->get("class_id"),
        ]);       
        return redirect('classroom/all');
    }
}
