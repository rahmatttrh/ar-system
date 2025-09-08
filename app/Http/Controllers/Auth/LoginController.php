<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Tambahkan ini ⬇️
    public function username()
    {
        return 'username';
    }

    protected function redirectTo()
    {
        $user = Auth::user();

        switch ($user->role->name) { // asumsi nama kolom role = nm_level
            case 'Superuser':
                return '/super_user'; // route untuk Superuser
            case 'Account Receivable':
                return '/account_receivable'; // route untuk Account Receivable
            case 'General Manager':
                return '/general_manager'; // route untuk General Manager
            case 'Direksi':
                return '/direksi'; // route untuk Direksi
            case 'Pajak':
                return '/pajak'; // route untuk Pajak
            default:
                // return RouteServiceProvider::HOME; // default home
                return redirect('/');
        }
    }
}
