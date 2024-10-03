<?php

namespace App\Http\Controllers\backend;

use App\Models\classes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    public function CreateClass()
    {
        return view('backend.classes.create_class_view');
    } // end method

    public function StoreClass(Request $request)
    {
        // for checking if the input is right
        // dd($request->all());

        // this code is for inserting data into table
        $class = new classes();
        $class->class_name = $request->class_name;
        $class->section = $request->section;

        $class->save();

        // this is for notification if successfully added a class
        $notification = array(
            'message' => 'Student Class Created Successfully ',
            'alert-type' => 'info'
        );
        return redirect()->route('manage.classes')->with($notification);
    } // end method

    public function ManageClasses()
    {
        // this method is getting all the content in the table
        $classes = classes::all();
        return view('backend.classes.manage_class_view', compact('classes'));
    } // end method

    public function EditClass($id)
    {
        $class = classes::find($id);
        // for checking if the id is right
        // echo $class;

        return view('backend.classes.edit_class_view', compact('class'));


    } // end method

    public function UpdateClass(Request $request)
    {
        $id = $request->id;
        // another method to update
        classes::find($id)->update([
            'class_name' => $request->class_name,
            'section' => $request->section
        ]);

        $notification = array(
            'message' => 'Student Class Updated Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.classes')->with($notification);
    }// end method


    public function DeleteClass($id)
    {
        classes::find($id)->delete();

        $notification = array(
            'message' => 'Student Class Deleted Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }// end method
}
