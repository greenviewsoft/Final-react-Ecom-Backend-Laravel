<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function AdminLogout(){

        Auth::logout();
        return Redirect()->route('login');

    } // End Method 


    public function UserProfile(){

     $admindata = User::find(8);

       return view('backend.admin_profile',compact('admindata'));
    } // end methods


public function UserProfileStore(Request $request){

  $data = User::find(8);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

         $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.profile')->with($notification);

    }// end mehtod 
    

public function ChangePassword(){


return view('backend.change_password');

}// end method

    public function ChangePasswordUpdate(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);
       $hashedPassword = User::find(8)->password;
       if (Hash::check($request->oldpassword,$hashedPassword)) {
            $user = User::find(8);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('admin.logout');
        }
        else{
            return redirect()->back();
        }

     } // End method

}
