<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $collections = Product::get();
        return view('admin.index', ['collections'=> $collections]);
    }
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('admin_index')->with('success','data deleted successfully');
    }
}