<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\View\View;
use App\Http\Requests\Products\ProductStoreRequest;


class ProductController extends Controller
{
   public function index():View
   {
        $products = Product::all();
        return view('products.index', compact('products'));


   }

   public function create():View
   {
      return view('products.create');
   }

   public function store(ProductStoreRequest $request)
   {
      Product::create([
         'name' => $request->get('name'),
         'cost' => $request->get('cost'),
         'description' => $request->get('description'),
      ]);
     
      return redirect(route('products.index'));
   }

   











   

 

   // public function show(int $id)
   // {
   //      $product = Product::query()->findOrFail($id);
   //      return view('product.show', compact('product'));

   // }
}
