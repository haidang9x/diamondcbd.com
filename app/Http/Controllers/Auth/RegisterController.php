<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'base_pass' => $data['password']
        ]);
    }
	
	protected function register(Request $request)
	{
		$input = $request->all();
		$validator = $this->validator($input);
		if($validator->passes()) {
			$data = $this->create($input)->toArray();
			$data['token'] = str_random(25);
			
			$user = User::find($data['id']);
			$user['token'] = $data['token'];
			$user->save();
			
			Mail::later(1,'mails.confirmation', $data, function($message) use($data) {
				$message->to($data['email']);
				$message->from('system@diamond-cbd-oil.com','Diamondcbd Team');
				$message->subject('Account details for '.(explode('@', $data['email'])[0]).' at Diamond CBD');
			});
			Mail::raw($data['email'].' new register diamond-cbd-oil.com', function ($message)  use($data){
				$message->to('haiht369@gmail.com');
				$message->from('system@diamond-cbd-oil.com','Diamondcbd Team');
				$message->subject('New register diamond-cbd-oil.com');
			});
			
			return redirect(route('login'))->with('status', 'Confirmation email. check inbox in '. $data['email'] . ' to confirm.');//->with('success', 1)->with('user', $user);
		}
		return redirect(route('register'))->with('status', $validator->errors()->toArray());
		
	}
	
	
	public function confirmation ($token)
	{
		$user = User::where('token', $token)->first();
		if(!is_null($user)) {
			$user->verify = 1;
			$user->token = '';
			$user->save();
			return redirect(route('login'))->with('status', 'Confirm success!!! You can login now!');
		}
		return redirect(route('login'))->with('status', 'Something went wrong.!');
	}
	
}
