<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function affRegist(Request $request) {
        $param = $request->all();
        $response = [
            'error' => ''
        ];
        if(empty($param['email'])){
            $response['error'] .= 'Email not valid <br>';
        } if(empty($param['password'])){
            $response['error'] .= 'Enter your password <br>';
        } if(empty($param['confirm_password'])){
            $response['error'] .= 'Enter your confirm password <br>';
        } if( $param['confirm_password'] != $param['password'] ){
            $response['error'] .= 'Confirm password not match <br>';
        } if( empty($param['first_name']) ){
            $response['error'] .= 'Enter your first name <br>';
        } if( empty($param['last_name']) ){
            $response['error'] .= 'Enter your last name <br>';
        }
//        return redirect()->route('affRegist', ['error' => $response]);
//        return view('profile')->with($response);
        return view('affiliate-program')->with($response);
    }
}
