<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\UserSocial;
use App\Models\User;
use App\Models\StoryModel;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('stories.index')->with('success', 'Đăng nhập thành công');;
            } else {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');;
            }
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Email or password is incorrect']);
    }

    public function logout(Request $request){
        Auth::logout();

        $story = StoryModel::paginate();
        return view('welcome',compact('story'))->with('i',(request()->input('page',1)-1)*10);
    }



    public function showForgot()
    {
        return view('forgot');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Tìm hoặc tạo một người dùng mới với thông tin từ Google
        $user = UserSocial::firstOrNew(['email' => $googleUser->getEmail()], [
            'name' => $googleUser->getName(),
            'avatar' => $googleUser->getAvatar(),
        ]);

        $user->save();

        // Đăng nhập người dùng vào hệ thống
        Auth::login($user, true);

        return redirect('/');

    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        // Xử lý thông tin user và đăng nhập hoặc đăng ký user
        // ...
        // Tìm hoặc tạo một người dùng mới với thông tin từ Google
        $user = UserSocial::firstOrNew(['email' => $facebookUser->getEmail()], [
            'name' => $facebookUser->getName(),
            'avatar' => $facebookUser->getAvatar(),
        ]);

        $user->save();

        Auth::login($user, true);

        $story = StoryModel::paginate();
        return view('welcome',compact('story'))->with('i',(request()->input('page',1)-1)*10);
    }



}
