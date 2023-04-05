<?php

namespace App\Modules\Backend\V1\Auth\Controllers;

use App\Modules\Core\Controllers\Controller;
use App\Modules\Backend\V1\Auth\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('Auth::login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     *
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME)
            ->withSuccess(__('Auth::auth.login_form.message.success_login'));
    }

    public function home()
    {
        return view('Auth::dashboard');
    }
}
