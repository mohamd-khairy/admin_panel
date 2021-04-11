<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'role' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return back()->with('message', __('admin.success_add'));
    }

    public function edit($id)
    {

        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,id,' . $request->id,
            'mobile' => 'required',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'role' => 'required'
        ]);

        $data = $request->all();
        $user = User::find($request->id);
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }else{
            $data['password'] = $user->password;
        }
        $user->update($data);
        return back()->with('message', __('admin.success_edit'));
    }


    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('message', __('admin.success_delete'));
    }
}
