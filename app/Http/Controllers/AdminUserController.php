<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::where('status','>',0)->where('type','user')->get();
        return view('admin.modules.user.index',compact('users'));
    }
   public function create()
    {
        return view('admin.modules.user.create');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.modules.user.edit', compact('user'));
    }
    public function save(Request $request)
    {
        //dd($request);
        $staff = new User();
        $staff->name = $request->name ;
        $staff->position = $request->position ;
        $staff->salary = $request->salary ;
        $staff->gender = $request->gender ;
        $staff->age = $request->age ;
        $staff->phone = $request->phone ;
        $staff->email = $request->email ;
        $staff->password = bcrypt($request->password);
        $staff->hired_date = $request->hired_date;
        $staff->type = "staff";

         // Handle main image upload
       if ($request->hasFile('image')) {
            $mainImage = $request->file('image');
            $mainImageName = 'user_' . time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'user_images/' . $mainImageName; // Change the folder structure as needed
            $mainImage->move(public_path('user_images'), $mainImageName);
            $staff->image = $mainImageName;
        }
        $staff->save();
        return redirect()->route('admin.user.index',['type' => 'staff'])->with(['success' => 'Staff Created Successfully']);

    }
    public function update(Request $request)
    {
        $user = User::findOrFail($request->user_id);
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
        return redirect()->route('admin.user.index')->with(['success' => 'User Updated Successfully']);

    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        return redirect()->back()->with(['success' => 'User Deleted Successfully']);
    }
}
