<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

use function Laravel\Prompts\password;
use App\Models\Product;
class Delete_ProductController extends Controller
{
    public function delete($product_id)
    {
        if(Auth::check()){
        if(Auth::user()->role=="admin"){
            $deletedRows = Product::where('id_товара', '=', $product_id)->delete();
            return redirect()->to(route('products'));
        }
    }

    }
}
