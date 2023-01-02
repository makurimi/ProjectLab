<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('welcome', compact('categories'));
    }

    public function categoryProduct($id)
    {
        $categories = category::all();
        $products = product::where('category_id', $id)->where('is_deleted', false)->paginate(10)->withQueryString();
        $categoryName = category::find($id)->name;
        return view('product_category', compact('categories', 'categoryName', 'products'));
    }

    public function productDetail($id)
    {
        $categories = category::all();
        $product = product::find($id);

        return view('product_detail', compact('categories', 'product'));
    }

    public function addToCart($id, Request $request)
    {
        $validateCredentials = $request->validate([
            'qty' => 'required|numeric|min:1',
        ]);
        $cart = new cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $id;
        $cart->quantity = $request->qty;
        try {
            $cart->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['alert' => 'Failed to add to cart']);
        }
        return redirect()->back()->with('alert', 'Added to cart');
    }


    public function search(Request $request)
    {
        $validateCredentials = $request->validate([
            'search' => 'required',
        ]);
        $categories = category::all();
        $products = product::where('name', 'like', '%' . $request->search . '%')->where('is_deleted', false)->paginate(10)->withQueryString();
        return view('search', compact('categories', 'products'));
    }

    public function searchPage(Request $request)
    {
        $categories = category::all();
        if ($request->search == null)
            $products = product::where('is_deleted', false)->get();
        else
            $products = product::where('name', 'like', '%' . $request->search . '%')->where('is_deleted', false)->paginate(10)->withQueryString();
        return view('search', compact('categories', 'products'));
    }
}
