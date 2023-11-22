<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Support\Facades\Session; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(AuthRequest $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            're_pass' => 'required|same:password'
        ]);
        $data = $request->all();
        $createUser = $this->create($data);
        return redirect('login')->withSuccess('You are registered Successfully.');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(AuthRequest $request)
    {
        $request->validate([            
            'email' => 'required|email',
            'password' => 'required',            
        ]);
        $checkLoginCredentials = $request->only('email','password');
        if(Auth::attempt($checkLoginCredentials))
        {
            return redirect('/')->withSuccess('You are successfully loggedin.');
        }
        return redirect('login')->withSuccess('You login credentials are incorrect.');
    }


    public function showForgot()
    {
        return view('forgot');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle(){
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();
            if(!$findUser){
                $findUser = new User();
                $findUser->name= $user->name;
                $findUser->email= $user->email;
                $findUser->password= '123456';
                $findUser->save();
            }
            session()->put('id', $findUser->id);
            return redirect('/');

        } catch(Exception $e) {
            dd($e->getMessage());
        }
    }

    

    
}
