<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\classes;
use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentResultController extends Controller
{
    public function index()
    {
        $classes = classes::all();
        return view('frontend.index',compact('classes'));

    } //End method

    public function SearchResult(Request $request)
    {
        $roll_id = $request->roll_id;
        $class_id = $request->class_id;
        $student = Student::where('roll_id',$roll_id)->where('class_d',$class_id)->first();


        if (!$student) {

            $notification = [
                'message' => 'Invalid Student Credentials',
                'alert-type'=>'error'
            ];
            return redirect()->back()->with($notification);
        }

        $result = Result::where('student_id',$student->id)->get();
    }
}
