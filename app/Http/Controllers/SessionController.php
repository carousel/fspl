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
        $input = \Request::except('_token');
        $validator = $this->signinValidator($input);
        if($validator->fails()){
            return \Redirect::to('/signin')
                ->withErrors($validator);
        }
        if(\Auth::attempt($input)){
            $message = 'Welcome ' . $input['email'];
            return \Redirect::to('/')
                ->with('message',$message);
        }else{
            $error = 'Your password is incorrect, please try again';
            return \Redirect::to('/signin')
                ->with('error',$error);
        }

    }
    public function signinValidator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);
    }
    public function signupValidator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
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
        $input = \Request::all();
        $validator = $this->signupValidator($input);
        if($validator->fails()){
            return \Redirect::to('/signup')
                ->withErrors($validator);
        }else{
            $user = new \App\User;
            $user->name = $input['name'];
            $user->email = $input['email'];
            $user->password  = bcrypt($input['password']);
            $user->save();
            return \Redirect::to('/signin')
                ->with('message','Thanks for registering, you can now login');
        }
    }

    public function getSignout()
    {
        \Auth::logout();
        return \Redirect::to('/')
            ->with('message','You are now logged out');
    }


}
