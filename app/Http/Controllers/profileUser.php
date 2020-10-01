<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class profileUser extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function prof_index(Request $request){
        $user = $request->get('keyword');
        $users = User::all();

        if($user){
            $user = User::where("name", "LIKE", "%keyword%")->get();
        }
        return view('user.prfle_user', compact('users'));
    }

    public function del_data($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/user/prfle_user');
    }

    public function edit_index()
    {
        $users = User::where('id', Auth::user()->id)->first();


        return view('user.edit', compact('users'));
    }

    public function updateAccount(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->alamat = $request->alamat;
        $user->update();
        session()->flash('notif');

        return redirect('/user/prfle_user');
        
        
        
        
    }
}
