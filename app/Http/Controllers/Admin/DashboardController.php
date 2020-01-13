<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function registered()
    {
      $users = User::all();
      return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id)
    {
      $users = User::findOrFail($id);
      return view('admin.register-edit')->with('users',$users);
    }

    public function registereupdate(Request $request, $id)
    {
      $users = User::find($id);
      $users->name = $request->input('username');
      $users->phone = $request->input('phone');
      $users->email = $request->input('email');
      $users->usertype = $request->input('usertype');
      $users->update();

      return redirect('/role-register')->with('status','แก้ไขข้อมูลเรียบร้อย');
    }

    public function registeredelete(Request $request, $id)
    {
      $users = User::findOrFail($id);
      $users->delete();


      return redirect('/role-register')->with('status','ลบข้อมูล');
    }
}
