<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

use function Laravel\Prompts\password;

class Add_ProductController extends Controller
{
    public function save(Request $request){

        echo $request->file('image');
        $image = $request->file('image')->store('uploads','public');
        echo '<img src="{$request->image }" alt="img">';

        DB::table('Товар')->insert([
            'Название' => $request->name, 
            'Цена' => $request->price,
            'Годен до' => date('2024-01-01'), 
            'Количество' => intval($request->count), 
            'id_категории' => intval("1"),
            'imgFile' => $image, 
         ]);
        // $validateField = $request->validate([
        //     "email"=> ["required","string","max:255","email",'unique:users'],
        //     'password'=>["required","string","min:6","max:16"],
        //     'name'=> ["required","string","max:30"],
        //     'surname'=>["required","string","max:30"],
        // ]);
        // $user = User::create($validateField);
        // if($user){
        //     auth()->login($user);
        //     return redirect()->to(route('account'));
        // }

        // return redirect()->to(route('authorization'))->withErrors([
        //     'formError' => "Произошла ошибка при сохранении пользователя"
        // ]);
    }
}
