<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login_page()
    {
        return view('admin.modules.auth.login');
    }
  
  

    public function user_login_page()
    {
        return view('frontend.modules.login');
    }
    public function user_register_page()
    {
       
        return view('frontend.modules.register');
    }
    public function user_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->type = "user";


        $user->save();
        return redirect()->back()->with(['success' => 'user Created Successfully']);

    }
     public function profile_update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->name ;
        $user->address = $request->address ;
        $user->phone = $request->phone ;
        $user->email = $request->email ;
        $user->password = Hash::make($request->password);
        

         // Handle main image upload
       if ($request->hasFile('image')) {
            $mainImage = $request->file('image');
            $mainImageName = 'user_' . time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'user_images/' . $mainImageName; // Change the folder structure as needed
            $mainImage->move(public_path('user_images'), $mainImageName);
            $user->image = $mainImageName;
        }
        $user->save();
        return redirect()->back()->with(['success' => 'Profile Updated Successfully']);

    }
     public function password_update(Request $request)
    {
        
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        $user = Auth::user();

        // Check if old password matches the current password
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Old password does not match']);
        }

        // Update the new password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('status', 'Password updated successfully');
    }
     public function login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('admin.dashboard'); // Redirect to the intended URL or a default one
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['credentials' => 'Invalid email or password']); // You can customize the error message
        }
    }
    public function user_login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('user-account'); // Redirect to the intended URL or a default one
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['credentials' => 'Invalid email or password']); // You can customize the error message
        }
    }
    public function user_account()
    {
      return view('frontend.modules.user-account');
    }
    public function admin_profile()
    {
      $user = User::findOrFail(Auth::user()->id);
      return view('admin.modules.auth.profile',compact('user'));
    }
      public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function user_logout()
    {
        Auth::logout();
        return redirect()->route('user-login');
    }
}
