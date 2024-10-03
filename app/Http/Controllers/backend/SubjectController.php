<?php

namespace App\Http\Controllers\backend;
use App\Models\subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function CreateSubject()
    {
        return view('backend.subject.create_subject_view');
    }

    public function StoreSubject(Request $request)
    {
        // inserting data into database
        Subject::create([
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code
        ]);


        $notification = array(
            'message' => 'Subject Created Successfully ',
            'alert-type' => 'info'
        );
        return redirect()->route('manage.subject')->with($notification);
    } // end method

    public function ManageSubject()
    {
        $subjects = Subject::all();
        return view('backend.subject.manage_subjects_view', compact('subjects'));
    } // end method

    public function EditSubject($id)
    {
        $subject = Subject::find($id);
        // for checking if the id is right
        // echo $class;

        return view('backend.subject.edit_subject_view', compact('subject'));
    } // end method

    public function UpdateSubject(Request $request)
    {
        $id = $request->id;
        subject::find($id)->update([
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code
        ]);

        $notification = array(
            'message' => 'Subject Updated Successfully ',
            'alert-type' => 'success'
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
    }
}
