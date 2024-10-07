<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }// End Method

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }// End Method


    public function AdminProfileUpdate(Request $request)
    {
        // dd($request->all()) this is for check if the value inserted is correct;
        $id = Auth::user()->id;
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // this is for not creating but replacing the image into new upload image
            @unlink(public_path('uploads/admin_profiles/' . $admin->photo));
            $imageName = date('YmdHi') . ' ' . $file->getClientOriginalName(); //20240202.admin.png
            $file->move(public_path('uploads/admin_profiles'), $imageName);
            $admin['photo'] = $imageName;

        }

        $admin->save();

        // this is message if updated success
        $notification = array(
            'message' => 'Admin Profile Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method


    public function AdminPasswordChange()
    {
        return view('admin.admin_password_change');
    }// End Method

    public function AdminPasswordUpdate(Request $request)
    {
        // input field validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // checking if the password is in database auth
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password Does Not Match',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method
}
