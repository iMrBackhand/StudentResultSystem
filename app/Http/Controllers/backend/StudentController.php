<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\classes;
use App\Models\Result;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        // $student->column_name = $request->input_fieldName
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
        $totalStudents = Student::count();
        return view('backend.student.manage_student_view', compact('students','totalStudents'));
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

    public function DeleteStudent($id)
    {
        // Find the student by ID
        $student = Student::find($id);

        // Check if the student exists
        if (!$student) {
            $notification = array(
                'message' => 'Student Not Found',
                'alert-type' => 'error'
            );
            return redirect()->route('manage.students')->with($notification);
        }

        // Check if the student has a photo and delete it
        if (!empty($student->photo)) {
            @unlink(public_path('uploads/student_photos/' . $student->photo));
        }

        // Delete related results for the student
        Result::where('student_id', $student->id)->delete();

        // Delete the student record
        $student->delete();

        // Prepare and return a success notification
        $notification = array(
            'message' => 'Student Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.students')->with($notification);
    }



}
