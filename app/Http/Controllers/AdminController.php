<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addProductPage()
    {
        $categories = Category::all();
        return view('add_product', compact('categories'));
    }
    public function addProduct(Request $request)
    {

        $validateCredentials = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric|min:2',
            'file' => 'required|mimes:jpeg,jpg,png',
        ]);
        $data = new Product();
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('product'), $fileName);
            $data->photo_path =  $fileName;
        }
        $data->description = $request->description;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->category_id = $request->category;
        $data->save();
        return redirect()->back()->with('alert', 'Success added product: ' . $data->name);
    }
    public function showProduct()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('manage_products', compact('products', 'categories'));
    }

    public function search(Request $request)
    {
        $validateCredentials = $request->validate([
            'search' => 'required',
        ]);
        $categories = Category::all();
        $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
        return view('admin_search_product', compact('products', 'categories'));
    }

    public function searchPage(Request $request)
    {
        $categories = Category::all();

        if ($request->search == null)
            $products = Product::where('name', 'like', '%' . $request->search . '%')->get();

        return view('admin_search_product', compact('products', 'categories'));
    }

    // public function delete($id)
    // {
    //     $data = Product::find($id);
    //     $data->is_deleted = true;
    //     $data->save();
    //     return redirect()->back()->with('message', 'Success deleted product id: ' . $id);
    // }

    public function updatePage($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('update', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = category::all();
        $validateCredentials = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric|min:2',
            'file' => 'required|mimes:jpeg,jpg,png',
        ]);
        $data = product::find($id);
        $data->description = $request->description;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->category_id = $request->category;

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('product'), $fileName);
            $data->photo_path =  $fileName;
        }

        $data->save();
        return redirect('/showproduct')->with('message', 'Success updated products id: ' . $id);
    }
}
