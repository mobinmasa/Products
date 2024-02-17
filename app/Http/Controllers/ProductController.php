<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductController extends Controller
{
   public function index()
   {
        $products = Product::all();
        dd($products);
   }

   public function show(int $id)
   {
        $product = Product::findOrFail($id);
        dd($product);
   }
}
