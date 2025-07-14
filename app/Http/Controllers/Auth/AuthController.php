<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CadastroRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function loginAttempt(LoginRequest $request)
    {
        
        $credentials = $request->only(['email', 'password']);
        
        if(Auth::attempt($credentials, $request->filled('remember'))):
            $request->session()->regenerate();
            if (Auth::user()->isAdmin()):
                return redirect()->intended(route('admin.dashboard'));
            endif;
            return redirect()->intended(route('voter.dashboard'));
        endif;

        return redirect()->route('login')->withInput()->with('mensagem', 'Email/Senha Inválidos');
    }

    public function logout(Request $request)
    {
        if(!$request->isMethod('POST')):
            return redirect()->back();
        endif;
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');

    }

    public function register()
    {
        return view('auth.register');
    }

    public function userRegister(CadastroRequest $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);
        
        User::create($user);
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    
    public function passwordResetForm()
    {
        return view('auth.reset');
    }

}
 