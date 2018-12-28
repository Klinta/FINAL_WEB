<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function inputData(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'username' => 'required',
            'pass' => 'required',
            'email' => 'required|email|unique:registerform',
        ]);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator);
        }else{
            $userid = request('userid');
            $pass = request('pass');
            $username = request('username');
            $email = request('email');

            $data = array('pass'=>$pass, 'username'=>$username, 'email'=>$email);

            \DB::table('registerform')->insert($data);

            return \Redirect::back();
        }


    }



    
}
