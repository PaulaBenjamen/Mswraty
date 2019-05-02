<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class PagesController extends Controller
{
    public function listall()
    {
        $users = User::where('user_type' , 'photographer')->get();
        return view('user_home')->with('users',$users);

    }
}
