<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index(){
        $categorys = Category::with('product.user')->get();
        return view('product', compact('categorys'));
    }

    function add_product(Request $req){
        $category = new Category();
        $category->name = $req->category_name;
        $category->save();

        foreach($req->product_name as $value){
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }

        return redirect('/product');
    }
}
