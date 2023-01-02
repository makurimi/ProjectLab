<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function showcart()
    {
        try {
            $carts = Auth::user()->carts->where('transaction_id', null);
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Please login first');
        }

        $totalPrice = 0;

        if (!$carts->isEmpty()) {
            foreach ($carts as $cart) {
                $cart->subTotal = $cart->quantity * $cart->product->price;
                $totalPrice += $cart->subTotal;
            }
        }

        $categories = category::all();
        return view('cart', compact('categories', 'carts', 'totalPrice'));
    }
    public function delete($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Success deleted item from cart');
    }
    public function purchase()
    {
        $order = new transaction();
        $user = Auth::user();
        $order->user_id = $user->id;
        $order->save();

        $carts = Auth::user()->carts->where('transaction_id', null);

        foreach ($carts as $cart) {
            $cart->transaction_id = $order->id;
            $cart->save();
        }
        return redirect()->back()->with('message', 'Purchase Successful');
    }
    public function history()
    {
        $id = Auth::user()->id;
        $transactions = Transaction::where('user_id', $id)->get();

        foreach ($transactions as $transaction) {
            $transaction->totalPrice = 0;
            $transaction->quantity = 0;
            foreach ($transaction->carts as $cart) {
                $cart->subTotal = $cart->quantity * $cart->product->price;
                $transaction->totalPrice += $cart->subTotal;
                $transaction->quantity += $cart->quantity;
            }
        }


        $categories = Category::all();
        return view('history', compact('categories', 'transactions'));
    }
}
