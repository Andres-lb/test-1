<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class updateController extends Controller
{
    



    public function update(User $user)
{ 
    $attributes = request()->validate([
        'title' => ['required'],
        'name' => ['required'],
        'lname' => ['required'],
        'email' => ['required', 'email', 'max:255', Rule::unique('users','email')->ignore($user->id)],
        'password' =>'',
        'phone' => ['required'],
        'gender'=> ['required'],
         'address'=> ['max:1500'],
         'country'=> ['string'],
         'birthday'=> ['required','date'],
         'subscribe'=> ['boolean'],

    ]);
    
    $attributes['name']=ucwords($attributes['name']);
    $attributes['lname']=ucwords($attributes['lname']);
    $attributes['birthday']=Carbon::parse($attributes['birthday']);


if(isset($attributes['password'])) {
    $attributes = request()->validate(['password'=>'required|confirmed|min:8']);
    $attributes['password']=Hash::make($attributes['password']);
}
 else {
    unset($attributes['password']);
 };   





     $user->updateOrFail($attributes);

    return view ('/update');
}
}
