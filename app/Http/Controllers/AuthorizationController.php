<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    
    public function login(Request $request){
        if(Auth::check()) {
            return redirect(route('account'));
        }
        $formField = $request->only(['email', 'password']);
        if(Auth::attempt($formField)){
            return redirect()->intended('account');
        }
        return redirect(route('authorization'))->withErrors(['email'=> 'Не удалось авторизоваться']);
    }
}
