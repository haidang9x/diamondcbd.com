<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;
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

    //use AuthenticatesUsers;

     use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
	public function showLoginForm()
    {
        return view('auth.login');
    }
	public function login(Request $request)
	{
		$rqlogin = $request;
        $this->validateLogin($rqlogin);
        if ($this->hasTooManyLoginAttempts($rqlogin)) {
            $this->fireLockoutEvent($rqlogin);

            return $this->sendLockoutResponse($rqlogin);
        }

        if ($this->attemptLogin($rqlogin)) {
            return $this->sendLoginResponse($rqlogin);
        }
        $this->incrementLoginAttempts($rqlogin);

        return $this->sendFailedLoginResponse($rqlogin);
    }
	public function username()
    {
        return 'email';
    }
	protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
    }
	protected function attemptLogin(Request $request)
    {
		$att = $this->credentials($request);
        return $this->guard()->attempt(
            $att, $request->has('remember')
        );
    }
	protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
	protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }
	protected function authenticated(Request $request, $user)
    {
        //
    }
	
	protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }
    protected function guard()
    {
        return Auth::guard();
    }

}
