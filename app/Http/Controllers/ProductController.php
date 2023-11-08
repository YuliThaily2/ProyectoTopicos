<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return $products;
    }

    public function store(Request $request){
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'Category_id' => $request->Category_id,
            'Brand_id' =>$request->Brand_id,
            'Supplier_id' =>$request->Supplier_id,
        ] );

        $product->save();

        return $request;
    }

    public function show(Request $request){
        $product = Product::where('id', $request->id)
        ->get();
        return $product;
    }

    public function destroy(Request $request){
        $product =Product::where('id',$request->id)
        ->delete();
        return 'ok';
    }

    
    public function update(Request $request){
        $product = Product::where('id', $request->id)->first();

        if ($product) {
            $product->name = $request->name;
            $product->description = $request-> description;
            $product->price = $request-> price;
            $product->stock_quantity = $request-> stock_quantity;
            $product->Category_id = $request-> Category_id;
            $product->Brand_id = $request-> Brand_id;
            $product->Supplier_id = $request-> Supplier_id;
            $product->save();
            return $request;
        } else {
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
    }
}
