<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()) {
            return redirect(route('account'));
        }
        $validateField = $request->validate([
            "email"=> ["required","string","max:255","email",'unique:users'],
            'password'=>["required","string","min:6","max:16"],
            'name'=> ["required","string","max:30"],
            'surname'=>["required","string","max:30"],
        ]);
        $user = User::create($validateField);
        if($user){
            auth()->login($user);
            return redirect()->to(route('account'));
        }

        return redirect()->to(route('authorization'))->withErrors([
            'formError' => "Произошла ошибка при сохранении пользователя"
        ]);
    }
}
