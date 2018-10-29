<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Events\newUser;

#models
use App\user;

class userController extends Controller
{
    #root
    public function root(Request $request)
    {
        #fetch users
        $users = new user;
        $users = $users->all();

        #return to view with vars
        return view('users.root')
                        ->with('users',$users);
    }

    #new user
    public function newUser(Request $request)
    {
        #create id

        $id = rand(10,10000);

        #create user
        
        $user                   =   new user;
        $user->id               =   $id;
        $user->name             =   $request->name;
        $user->phone            =   $request->phone;
        $user->location         =   $request->location;
        $user->email_address    =   $request->email_address;
        $user->password         =   Hash::make($request->password);
        $user->remember_token   =   $request->_token;

        #save record

        try
        {
            $user->save();
            #fetch credentials
            $credentials = $request->only('email_address','password');

            #check/validate
            if (Auth::attempt($credentials)) 
            {
                #Authentication passed.
                return redirect('users')
                                        ->with('code',1)
                                        ->with('msg', 'Entry Successful');
            }
                       
        }
        catch(Exception $e)
        {
            return back()
                        ->with('code',0)
                        ->with('msg', 'Something Went Wrong.');
        }
        
    }

    #index
    public function index(Request $request)
    {
        return view('users.login');
    }

    #validate-login
    public function validateuser(Request $request)
    {
        #fetch credentials
        $credentials = $request->only('email_address','password');

        #check/validate
        if (Auth::attempt($credentials)) 
        {
            #Authentication passed.
            return redirect('users');
        }
        else
        {
            #Authentication denied.
            return "not authenticated";
        }
     

    }

    #register
    public function register(Request $request)
    {
        return view('users.register');
    }

    #logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}
