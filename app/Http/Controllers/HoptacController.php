<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class HoptacController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hoptac');
    }
	
	public function postEmail(Request $request) {
		$rqAll = $request->all();
		$validator = Validator::make($rqAll, [
            'email' => 'required|string|email|max:255',
            'text' => 'required|string|min:6',
        ]);
		if($validator->passes()) {
			Mail::send(array(), array(), function($message) use($rqAll) {
				$message->to($rqAll['email']);
				$message->from('affiliate@diamond-cbd-oil.com','Diamond CBD Affiliate Manager');
				$message->subject('Join Diamond CBD Oil Affiliate Program');
				$message->setBody($rqAll['text'], 'text/html');
			});
			return view('hoptac')->with('status', ['Email sended'])->with('error',0);
		}
		return view('hoptac')->with('status', $validator->errors()->toArray())->with('error',1);
	}
}
