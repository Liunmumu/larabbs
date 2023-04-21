<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       if (Auth::attempt($credentials, $request->has('remember'))) {
           session()->flash('success', 'Welcome back!');
           return redirect()->route('users.show', [Auth::user()]);
       } else {
           session()->flash('danger', 'Sorry,');
           return redirect()->back()->withInput();
       }
    }

}
