<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotController extends Controller
{
    //
    public function showForgotPasswordForm()
    {
        return view('forgot');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __('Vui Lòng kiểm tra email để đổi mật khẩu')])
            : back()->withErrors(['email' => __("Email này chưa được đăng kí")]);
    }

    public function showResetForm($token, $email)
    {
        return view('reset-password', ['token' => $token, 'email' => $email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('custom.login.form')->with(['status' => __("Đổi mật khẩu thành công đăng nhập")])
            : back()->withErrors(['password' => [__($status)]]);
    }
}
