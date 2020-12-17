<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Request;
use \App\User;
use Carbon\Carbon;

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
     protected $redirectTo = '/student_home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('authenticate');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $user = new \App\User();
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, true)) {
            $user = Auth::user();
            $user->last_login = Carbon::now('America/Tijuana')->toDateTimeString();
            $user->save();

            Auth::login($user, true);
            
            // if($user->user instanceof \App\Student) {
            //     $redirectTo = '/home';
            // } else if($user->user instanceof \App\Teacher) {
            //     $redirectTo = '/home';
            // }
            
            return redirect('/home');
        } else {
            return redirect()->intended('/loggedfailed');
        }
    }

    /**
     * Logs the user out, ending their session.
     * 
     * @param none
     * 
     * @return Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
