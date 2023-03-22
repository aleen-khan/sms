<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
        $id = Auth::user()->id;
        $users = User::find($id);
        return view('admin.profile.profile', compact('users'));
    }

    public function editProfile(){
        return view('admin.profile.edit-profile');
    }

    public function changePassword()
    {
        return view('admin.profile.password');
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'current_password'     => 'required',
            'new_password'         => 'required',
            'confirm_new_password' => 'required|same:new_password',
        ]);
        
        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return redirect()->back()->with("error", "Current Password Doesn't Match!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        // return ($request->all());
        return redirect()->back()->with("status", "Password Changed Successfully!");
    }
}
