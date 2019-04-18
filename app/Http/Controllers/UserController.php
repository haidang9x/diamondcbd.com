<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Hash;
use App\User;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
		$data = \Auth::user();
        return view('user')->with('user',$data);
    }
	public function order() {
		$data = \Auth::user();
        return view('order')->with('user',$data);
	}
	
public function admin_credential_rules(array $data) {
  $messages = [
    'current-password.required' => 'Please enter current password',
    'password.required' => 'Please enter password',
  ];

  $validator = Validator::make($data, [
    'current-password' => 'required',
    'password' => 'required|same:password',
    'password_confirmation' => 'required|same:password',     
  ], $messages);

  return $validator;
}  
	public function changePass(Request $request)
		{
			  if(\Auth::Check())
			  {
				$data = \Auth::user();
				$request_data = $request->All();
				$validator = $this->admin_credential_rules($request_data);
				if($validator->fails())
				{
				 return view('user')->with('error' ,array_values($validator->getMessageBag()->toArray()))->with('user',$data);;
				}
				else
				{  
				  $current_password = \Auth::User()->password;           
				  if(Hash::check($request_data['current-password'], $current_password))
				  {           
					$user_id = \Auth::User()->id;                       
					$obj_user = User::find($user_id);
					$obj_user->password = bcrypt($request_data['password']);;
					$obj_user->save(); 
					return view('user')->with('status', 'Change password success!!!')->with('user',$data);;
				  }
				  else
				  {           
					$error = array(array('Please enter correct current password'));
					return view('user')->with('error' , $error)->with('user',$data);;   
				  }
				}        
			  }
			  else
			  {
				return redirect()->to('/user');
			  }    
		}
}
