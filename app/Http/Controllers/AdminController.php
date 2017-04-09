<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use APP\Role;
use App\Permission;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
      return View('admin.dashboard');
    }
    // Function to show Roles to Admins.
    public function showRolesPage()
    {
        $user = User::where('id',Auth::id())->get();
        $roles = Role::all();
        return view('admin.roles',['user' => $user,'roles' => $roles]);
    }
    // Function to show permissions to Admins.
    public function showPermissionsPage()
    {
        $user = User::where('id',Auth::id())->get();
        $permissions = Permission::all();
        return view('admin.permissions',['user' => $user,'permissions' => $permissions]);
    }

}
