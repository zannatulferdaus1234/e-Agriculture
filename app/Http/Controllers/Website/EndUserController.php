<?php

namespace App\Http\Controllers\Website;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\EndUser;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EndUserController extends Controller
{
    public function register()
    {
        $category = Category::get();
        return view('webapp.auth.my-account', compact('category'));
    }

    public function createUser(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'image',
            'phone' => ['required', 'unique:end_users', 'regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:end_users'],
            'password' => 'required|string|min:6|max:255|confirmed'
        ]);
        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('endUsers_image', 'public');
        }

        $end_user = EndUser::create($attributes);

        event(new UserRegistered($end_user));
        // UserRegistered::dispatch('end_user');
        $category = Category::get();
        $contents = Content::latest()->paginate(6)->onEachSide(3);
        $projects = Project::latest()->paginate(6)->onEachSide(3);

        Auth::guard('end_user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'));
        return view('webapp.index', compact('category', 'end_user','contents','projects'));
    }

    public function login()
    {
        $category = Category::get();
        return view('webapp.auth.my-account', compact('category'));
    }

    public function loginCheck(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('end_user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/');
        } else {
            return back()->with('fail', 'Invalid Password');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    function logout(Request $request)
    {
        if (Auth::guard('end_user')->check()) // this means that the end_user was logged in.
        {
            Auth::guard('end_user')->logout();
            return redirect()->route('webapp');
        } else {
            abort('404');
        }
        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('webapp');
    }


    public function showForgotPasswordForm()
    {
        return view('webapp.auth.forgotPassword');
    }


    public function forgotPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:end_users',
        ]);

        $token = Str::random(64);

        DB::table('enduser_reset_password')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('webapp.auth.email.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return redirect()->route('user_resetPasswordForm',$token)->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token)
    {
        return view('webapp.auth.email.resetPassword', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|exists:end_users',
            'password' => 'required|string|min:6|max:255|confirmed',
        ]);


        $end_user = EndUser::where('email', $request->email)
            ->update(['password' =>Hash::make($request->password)]);

        DB::table('enduser_reset_password')->where(['email' => $request->email])->delete();

        // return redirect()->route('userLogin');

        return redirect()->route('webapp')->withInput($request->only('email', 'remember'));

    }




    public function profile()
    {
        $category = Category::get();
        return view('webapp.auth.user.profile', compact('category'));
    }

    public function updateProfile(EndUser $end_user)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email', 'string', 'max:255', Rule::unique('end_users')->ignore($end_user)],
            'phone' => ['required', 'regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/', Rule::unique('end_users')->ignore($end_user)],
            'avatar' => 'image',
            //  'password' => 'required|string|min:6|max:255|confirmed'
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('endUsers_image', 'public');
        }

        $end_user->update($attributes);
        return redirect()->back();
    }
}
