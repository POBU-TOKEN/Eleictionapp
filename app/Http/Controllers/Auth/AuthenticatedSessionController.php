<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
       $request->authenticate(); // Usa o método já implementado em LoginRequest

    $request->session()->regenerate();

    // Redirecionamento condicional baseado no campo 'role'
    $user = Auth::user();

    if ($user->role === 'admin') {
        return redirect()->intended('/admin/dashboard');
    } elseif ($user->role === 'voter') {
        return redirect()->intended('/voter/dashboard');
    }

    // Fallback se o role não for nenhum dos esperados
    return redirect()->intended('home');
}
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
