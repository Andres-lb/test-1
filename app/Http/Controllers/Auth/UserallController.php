<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;


class UserallController extends Controller
{
    public function find(User $user)
    { 
        return view('user', [
            'user' => User::find($user->id)
        ]);
    
    }

    public function alluser()
    { 
        return view('allusers', [
           'users' => User::orderBy('name')->get()
        

        ]);
    
    }





}
