<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login.login');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required'
        ]);

        $user = array(
            'name' => $request->get('login'),
            'password' => $request->get('password')
        );

        if ( Auth::attempt($user) ) {
            return redirect()->route('blog.articles');
        } else {
            return back()->with('error', 'Неверный логин или пароль');
        }
    }
}