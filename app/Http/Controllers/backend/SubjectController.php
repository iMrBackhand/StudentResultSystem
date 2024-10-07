<?php

namespace App\Http\Controllers\backend;
use App\Models\classes;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function StoreSubject(Request $request)
    {

        // Inserting data into the database
        $subject = new Subject();
        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;

        $subject->save();

        $notification = array(
            'message' => 'Subject Created Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage.subject')->with($notification);
    }

    public function CreateSubject()
    {
        return view('backend.subject.create_subject_view');
    } //end method


    public function ManageSubject()
    {
        $subjects = Subject::all();
        return view('backend.subject.manage_subjects_view', compact('subjects'));
    } // end method

    public function EditSubject($id)
    {

        $subject = Subject::find($id);
        if (!$subject) {
            return redirect()->back()->withErrors(['Subject not found.']);
        }

        return view('backend.subject.edit_subject_view', compact('subject'));
    } // end method

    public function UpdateSubject(Request $request)
    {
        $id = $request->id;


        // Update the record in the database
        Subject::find($id)->update([
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code
        ]);

        $notification = array(
            'message' => 'Subject Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage.subject')->with($notification);
    }


    public function DeleteSubject($id)
    {

        // Subject is the model name
        Subject::find($id)->delete();

        $notification = array(
            'message' => 'Subject Deleted Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method


    // Subject Combination All Method
    public function AddSubjectCombination(Request $request)
    {
        $classes = classes::all();
        $subjects = Subject::all();
        return view('backend.subject.add_subject_combination', compact('classes', 'subjects'));

    } //end method


    public function StoreSubjectCombination(Request $request)
    {
        $class = classes::find($request->class_id);
        $subjects = $request->subject_ids;
        $class->subjects()->attach($subjects);

        $notification = array(
            'message' => 'Subject Combination Done Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.subject.combination')->with($notification);
    }//end method

    // joining 3 tables
    public function ManageSubjectCombination()
    {
        $results = DB::table('classes_subject')
            ->join('classes', 'classes_subject.classes_id', 'classes.id')
            ->join('subjects', 'classes_subject.subject_id', 'subjects.id')
            ->select(
                'classes_subject.*',
                'classes.class_name',
                'classes.section',
                'subjects.subject_name'
            )->get();

        return view('backend.subject.manage_subject_combination', compact('results'));
    }//end method

    public function DeactivateSubjectCombination($id)
    {
        $status = DB::table('classes_subject')->select('status')->where('id', $id)->first();

        if ($status->status == 1) {
            DB::table('classes_subject')->where('id', $id)->update(['status' => 0]);

            $notification = array(
                'message' => 'Subject Deactivated Successfully ',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } elseif ($status->status == 0) {
            DB::table('classes_subject')->where('id', $id)->update(['status' => 1]);

            $notification = array(
                'message' => 'Subject Activated Successfully ',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }//end method
}
