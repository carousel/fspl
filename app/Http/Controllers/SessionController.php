<?php

namespace App\Http\Controllers;
use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getSignin()
    {
        return view('session.signin');
    }
    public function postSignin()
    {
        $input = \Request::all();
        $validator = $this->validator($input);
        if($validator->fails()){
            return \Redirect::to('/signin')
                ->withErrors($validator);
        }else{
            $message = 'Welcome ' . $input['email'];
            return \Redirect::to('/')
                ->with('message',$message);
        }
    }
    public function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getSignup()
    {
        return view('session.signup');
    }

    public function postSignup()
    {
        $input = \Input::all();
        return $input;
    }


}
