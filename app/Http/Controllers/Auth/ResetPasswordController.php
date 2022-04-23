<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

//use App\Rules\StrongPasswordReset;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    

    protected function rules()
    {
        return [
            'password' => ['required', 'string', Password::min(8)->numbers()->mixedCase()->letters()->symbols()->uncompromised()]
            //'password_confirmation' => ['required', 'string', 'confirmed', Password::min(8)->numbers()->mixedCase()->letters()->symbols()->uncompromised()]
           // 'password' => 'required|string|min:8', //->numbers()->mixedCase()->letters()->symbols()->uncompromised()],
            //'password_confirmation' => 'required|string|confirmed|min:8' //->numbers()->mixedCase()->letters()->symbols()->uncompromised()]
        ];
    }

    protected $redirectTo = RouteServiceProvider::HOME;

}
