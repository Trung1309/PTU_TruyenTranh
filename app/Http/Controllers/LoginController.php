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

    public function login(AuthRequest $request)
    {

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

        $story = StoryModel::paginate();
        return view('welcome',compact('story'))->with('i',(request()->input('page',1)-1)*10);

    }

    public function showRegisterForm()
    {
        return view('register');
    }
}
