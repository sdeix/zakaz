<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use Psy\Readline\Hoa\Console;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Cookie;
class BasketController extends Controller {

    private $basket;

    public function __construct() {
        $this->getBasket();
    }
    public function index(Request $request) {
        $basket_id = $request->cookie('basket_id');
        if (!empty($basket_id)) {
            $products = Basket::findOrFail($basket_id)->products;
            if(empty($products)) {
                return redirect()->route('basket');               
            }

            return view('basket', compact('products'));
        } else {
            return redirect()->route('basket');
        }
    }


    /**
     * Добавляет товар с идентификатором $id в корзину
     */
    public function add(Request $request, $id) {
        $basket_id = $request->cookie('basket_id');
        $quantity = $request->input('quantity') ?? 1;
        if (empty($basket_id)) {
            // если корзина еще не существует — создаем объект
            $basket = Basket::create();
            // получаем идентификатор, чтобы записать в cookie
            $basket_id = $basket->id;
        } else {
            // корзина уже существует, получаем объект корзины
            $basket = Basket::findOrFail($basket_id);
            // обновляем поле `updated_at` таблицы `baskets`
            $basket->touch();
        }

        if ($basket->products->contains($id)) {
            // если такой товар есть в корзине — изменяем кол-во
            $pivotRow = $basket->products()->where('id_товара', $id)->first()->pivot;
            $quantity = $pivotRow->quantity + $quantity;
            $pivotRow->update(['quantity' => $quantity]);
        } else {
            // если такого товара нет в корзине — добавляем его
            $basket->products()->attach($id, ['quantity' => $quantity]);
        }
        // выполняем редирект обратно на страницу, где была нажата кнопка «В корзину»
        return back()->withCookie(cookie('basket_id', $basket_id, 525600));
    }
    public function plus(Request $request, $id) {
        $basket_id = $request->cookie('basket_id');
        if (empty($basket_id)) {
            abort(404);
        }
        $this->change($basket_id, $id, 1);
        return redirect()
            ->route('basket')
            ->withCookie(cookie('basket_id', $basket_id, 525600));
    }


    public function minus(Request $request, $id) {
        $basket_id = $request->cookie('basket_id');
        if (empty($basket_id)) {
            abort(404);
        }
        $this->change($basket_id, $id, -1);
        return redirect()
            ->route('basket')
            ->withCookie(cookie('basket_id', $basket_id, 525600));
    }

    private function change($basket_id, $product_id, $count = 0) {
        if ($count == 0) {
            return;
        }
        $basket = Basket::findOrFail($basket_id);
        if ($basket->products->contains($product_id)) {
            $pivotRow = $basket->products()->where('product_id', $product_id)->first()->pivot;
            $quantity = $pivotRow->quantity + $count;
            if ($quantity > 0) {
                $pivotRow->update(['quantity' => $quantity]);
                $basket->touch();
            } else {
                $pivotRow->delete();
            }
        }
    }

    public function clear() {
        $this->basket->delete();
        $this->getBasket();
        return redirect()->route('basket');
    }
    private function getBasket() {
        $basket_id = request()->cookie('basket_id');
        if (!empty($basket_id)) {
            try {
                $this->basket = Basket::findOrFail($basket_id);
            } catch (ModelNotFoundException $e) {
                $this->basket = Basket::create();
            }
        } else {
            $this->basket = Basket::create();
        }
        Cookie::queue('basket_id', $this->basket->id, 525600);
    }
}