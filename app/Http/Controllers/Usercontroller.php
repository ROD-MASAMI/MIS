<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function login(){
        return view('Auth/login');
    }

    public function logout(Request $request){
        auth()->logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         
          return redirect('/');
    }

    public function create (){
        return view('Auth/register');
    }

public function destroy ($id){
    $user = User::find($id);
     $user->delete();
return redirect('/home')->with('success', 'User deleted successfully');

}

public function edit($id){
    return view('Auth/edit', [
        'user' =>  User::find($id)
    ]);
}
public function update (Request $request, $id){
    $validated = $request->validate([
          'username' => 'required',
          'email' => 'required|email',
          'Phone_number' => 'min:9',
          'Address' => 'required',
          'Role' => 'required'
      ]);
      $user = User::find($id);
    $user->update($validated);
      return redirect('/home')->with('success', 'User update successfully');
  }

    public function store (Request $request){
        $validated = $request->validate([
              'username' => 'required',
              'email' => 'required|unique:users|email',
              'Phone_number' => 'min:10',
              'password' => 'required|confirmed',
              'Address' => 'required',
              'Role' => 'required'
          ]);
        $validated['password'] = Hash::make($validated['password']);
        // dd($validated);
        $user = User::create($validated);
          return redirect('/home')->with('success', 'User created successfully');
      }

    public function authenticate(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'Successfully logged in');
        }
        return back()->with('failed', 'Invalid credetianls');
    }
}
