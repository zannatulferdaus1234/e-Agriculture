<?php

namespace App\Http\Controllers\Website;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EndUser;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Contracts\Auth\Authenticatable;


class EndUserController extends Controller
{
    public function register()
    {
        $category = Category::get();
        return view('webapp.auth.my-account',compact('category'));
    }

    public function createUser()
    {
        $end_user = EndUser::create(request()->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', 'unique:end_users','regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:end_users'],
            'password' => 'required|string|min:6|max:255|confirmed'
        ]));
        event(new UserRegistered($end_user));
        // UserRegistered::dispatch('end_user');
        $category = Category::get();


        return view('webapp.index',compact('category','end_user'));
    }

    public function login()
    {
        $category = Category::get();
        return view('webapp.auth.my-account',compact('category'));
    }

    public function loginCheck(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('end_user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/webapp');
        }else{
            return back()->with('fail','Invalid Password');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    function logout(Request $request)
    {
        if(Auth::guard('end_user')->check()) // this means that the end_user was logged in.
        {
            Auth::guard('end_user')->logout();
            return redirect()->route('webapp');
        } else{
            abort('404');
        }
        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('webapp');
    }


    public function forgotPassword()
    {
        $category = Category::get();
        return view('webapp.content.single-content',compact('category'));
    }
}
