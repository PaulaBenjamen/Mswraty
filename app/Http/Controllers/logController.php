<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class logController extends Controller
{
    public function login(Request $request){
        //dd($request->all());
        if ( Auth::attempt([
          'email' => $request->email,
          'password' =>$request->password  
        ]))
        {
            $user = User::where('email' , $request->email)->first();
            if($user->is_photographer()){
                return redirect()->route('/photographer_home');
            }
            return redirect()->route('/user_home');
        }
        redirect()->back();
    }
}
