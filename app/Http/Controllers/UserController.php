<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User()
    {
        $users = User::get();
        return view('backend.user.user_view', compact('users'));
    }
}
