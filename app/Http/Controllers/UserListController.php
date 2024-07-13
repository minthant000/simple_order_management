<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    // user list
    public function userList(){
        $users = User::where('role','user')->paginate(4);
        return view('admin.user.list', compact('users'));
    }

    // change user role
    public function changeRole(Request $request){
        $updateRole = [
            'role' => $request->role
        ];
        User::where('id', $request->userId)->update($updateRole);
    }
}
