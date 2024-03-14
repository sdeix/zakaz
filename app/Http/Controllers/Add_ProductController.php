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
    public function save(Request $request)
    {
        $valid = $request->validate([
            "name" => ["required", "string", "max:255"],
            'price' => ["required", "integer", "min:100","min:1000"],
            'count' => ["required", "integer", "min:1","min:100"],
        ]);

        if (!$valid) {
            return redirect()->to(route('account'));
        }
        $image = "";
        if($request->file('image')){
            $image = $request->file('image')->store('uploads', 'public');
        }
 
        DB::table('Товар')->insert([
            'Название' => $request->name,
            'Цена' => $request->price,
            'Годен до' => date('2024-01-01'),
            'Количество' => intval($request->count),
            'id_категории' => intval("1"),
            'imgFile' => $image,
        ]);
        return redirect()->to(route('products'));
    }
}
