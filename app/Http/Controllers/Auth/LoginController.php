<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TelegramBotController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        $user = \Auth::user();
        if ($user->hasAnyRole('admin')) {
            return '/admin/index';
        }
        elseif($user->hasAnyRole('enrollee')) {
            return '/enrollee';
        }
        return '/';

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if (!isset($user->name)){
            $user->name = '---';
        }
        if (!isset($user->last_name)){
            $user->last_name = '---';
        }
        $massage = 'Новый вход в админ\\-панель сайта: *'.$user->name.' '.$user->last_name.'* ‼️';
        (new TelegramBotController())->send($massage);
    }
}
