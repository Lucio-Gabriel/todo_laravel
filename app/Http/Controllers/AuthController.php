<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        // verificando se o nosso usuario está logado ou não
        if(Auth::check()){
            return redirect()->route('home');
        }

        return view('login');
    }

    public function login_action(Request $request){
        // dd($request);

        // validação de requisição
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if( Auth::attempt($validator)){
            return redirect()->route('home');
        }
    }

    public function register(Request $request){
        // verificando se o nosso usuario está logado ou não
        $isLoggedIn = Auth::check();
        if($isLoggedIn){
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register_action(Request $request){
        // validando o formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        // valores  que vou receber e guarda no banco
        $data = $request->only('name', 'email', 'password');

        $data['password'] = Hash::make($data['password']);

        $userCreated = User::create($data);
        // dd($userCreated);

        return redirect(route('login'));

    }

    public function logout(){

        Auth::logout();

        return redirect()->route('login');
    }


}
