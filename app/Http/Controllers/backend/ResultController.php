<?php

namespace App\Http\Controllers\backend;

use App\Models\Result;
use App\Models\classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public function AddResult()
    {
        $classes = classes::all();
        return view('backend.result.add_result_view', compact('classes'));
    } //End method

    public function FetchStudent(Request $request)
    {
        $class_id = $request->class_id;

        // Fetch students based on class_id
        $students = Student::where('class_id', $class_id)->get();
        $std_data = '<option>-- Select a Student --</option>';

        foreach ($students as $student) {
            $std_data .= '<option value="' . $student->id . '">'
                . $student->name . ' | ' . $student->roll_id . '</option>';
        }

        // Fetch class and related subjects
        $class = classes::with('subjects')->where('id', $class_id)->first();
        $class_subjects = $class->subjects;

        // Initialize subject data array
        for ($i = 0; $i < count($class_subjects); $i++) {
            $subject_data[$i] = '<label for="english">' . $class_subjects[$i]->subject_name . '</label>
            <input class="form-control" name="subject_ids[]" type="hidden" value="' . $class_subjects[$i]->id . '" />
            <input class="form-control" name="marks[]" required type="text" placeholder="Enter mark out of 100">';
        }

        // Return JSON response with students and subjects
        return response()->json([
            'students' => $std_data,
            'subjects' => $subject_data
        ]);

    } //End method

    public function FetchStudentResult(Request $request)
    {
        $student_id = $request->student_id;
        $result = Result::where('student_id', $student_id)->first();
        $message = '';
        if ($result) {
            $message .= '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-bullseye-arrow me-2"></i>
                    This Student\'s Result is Already Declared!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
        return response()->json($message);
    } //End method

    public function StoreResult(Request $request)
    {
        $subject_count = count($request->subject_ids);

        for ($i = 0; $i < $subject_count; $i++) {
            // Check if a result for this student, class, and subject already exists
            $existingResult = Result::where('student_id', $request->student_id)
                ->where('class_id', $request->class_id)
                ->where('subject_id', $request->subject_ids[$i])
                ->first();

            // If result already exists, return an error message
            if ($existingResult) {
                return redirect()->back()->with([
                    'message' => 'Result already declared for subject: ' . $request->subject_ids[$i],
                    'alert-type' => 'error'
                ]);
            }

            // Otherwise, store the result
            $result = [
                'student_id' => $request->student_id,
                'class_id' => $request->class_id,
                'subject_id' => $request->subject_ids[$i],
                'marks' => $request->marks[$i]
            ];

            Result::create($result);
        }

        // Success notification if results are successfully stored
        $notification = [
            'message' => 'Results Declared Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('manage.results')->with($notification);
    }

    public function ManageResults()
    {
        $results = Result::groupBy('student_id')->get();
        return view('backend.result.manage_result', compact('results'));

    } //end method

    public function EditResult($id)
    {
        $result = Result::where('student_id', $id)->get();
        return view('backend.result.edit_result', compact('result'));
    } //End Method

    public function UpdateResult(Request $request)
    {
        $sub_count = count($request->subject_ids);
        for ($i = 0; $i < $sub_count; $i++) {
            $result = Result::where('id', $request->result_ids[$i])->update([
                'subject_id' => $request->subject_ids[$i],
                'marks' => $request->marks[$i]
            ]);

        }
        $notification = [
            'message' => 'Results Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    } //End method

    public function DeleteResult($id)
    {
        $result = Result::where('student_id', $id)->get();
        for ($i = 0; $i < count($result); $i++) {
            $result[$i]->delete();
        }

        $notification = array(
            'message' => 'Results Deleted Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End method


}
