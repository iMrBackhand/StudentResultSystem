<?php

namespace App\Http\Controllers\backend;
use Carbon\Carbon;
use App\Models\classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function AddStudent()
    {

        $classes = classes::get();
        return view('backend.student.add_student_view', compact('classes'));
    } //End method

    public function StoreStudent(Request $request)
    {

        $student = new Student(); //because of this now we can access the table Students
        $student->name = $request->full_name;
        $student->email = $request->email;
        $student->roll_id = $request->roll_id;
        $student->class_id = $request->class_id;
        $student->dob = $request->dob;
        $student->gender = $request->gender;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $imageName = date('YmdHi') . ' ' . $file->getClientOriginalName(); //20240202.admin.png
            $file->move(public_path('uploads/student_photos'), $imageName);
            $student['photo'] = $imageName;

        }
        //this code is to fetch the update time in ph
        $student->created_at = Carbon::now('Asia/Manila');
        $student->save();


        $notification = array(
            'message' => 'Student Added Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.students')->with($notification);
    } //End Method

    public function ManageStudents()
    {
        $students = Student::all();

        return view('backend.student.manage_student_view', compact('students'));
    } //End Method

    public function EditStudent($id)
    {
        $student = Student::find($id);
        $classes = Classes::all();
        return view('backend.student.edit_student_view', compact('student', 'classes'));

    } //End Method

    public function UpdateStudent(Request $request)
    {
        $id = $request->id;
        $student = Student::find($id);
        $student->name = $request->full_name;
        $student->email = $request->email;
        $student->roll_id = $request->roll_id;
        $student->class_id = $request->class_id;
        $student->dob = $request->dob;
        $student->gender = $request->gender;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('uploads/student_photos/' . $student->photo)); //this code is to replace the current photo
            $imageName = date('YmdHi') . ' ' . $file->getClientOriginalName(); //20240202.admin.png
            $file->move(public_path('uploads/student_photos'), $imageName);
            $student['photo'] = $imageName;

        }
        $student->save();


        $notification = array(
            'message' => 'Student Updated Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.students')->with($notification);
    } //End Method
}
