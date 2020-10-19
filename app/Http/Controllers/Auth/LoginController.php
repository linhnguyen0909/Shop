<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Webpatser\Uuid\Uuid;
use App\Http\Requests\ValidationRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.register');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);
        $credentials=$request->only('email', 'password');
        //dd($credentials, $request->all());
        if (Auth::attempt($credentials)) {
            return redirect('contacts');
        }
        return Redirect('login');
    }
    public function postRegistration(ValidationRequest $request)
    {
        $data = $request->all();
        $uuid =['id' =>Uuid::generate()];
        $a = array_merge($data, $uuid);
        $check = $this->create($a);

        return redirect::to('dashboard')->withSuccess('Great! You have Successfully loggedin');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.login');
        }
        return redirect::to('login')->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function create(array $data)
    {
        return User::create([
            'id'=>(string)$data['id'],
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);
    }
    public function logout()
    {
        session:flush();
        Auth::logout();
        return Redirect('login');
    }
}
