<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersPostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
    public function index()
    {
        $users = User::where('id','<>','1')->paginate();

        return view('users.index', compact('users'));
    }
    public function save(UsersPostRequest $request)
    {
        
        $users= New User();
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=Hash::make($request->input('password'));
        $users->save();
        return redirect()->back()->with('success', 'Usuario creado con exito.');
    }
    public function update(Request $request,$id)
    {
        
        $users = User::findOrFail($id);
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=Hash::make($request->input('password'));
        $users->update();
        return redirect()->back()->with('success', 'Profile updated.');
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Usuario borrado.');
    }
}
