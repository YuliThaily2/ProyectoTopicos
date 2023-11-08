<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function store(Request $request){
        $supplier = Supplier::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ] );

        $supplier->save();

        return $request;
    }

    public function show(Request $request){
        $supplier = Supplier::where('id', $request->id)
        ->get();
        return $supplier;
    }

    public function destroy(Request $request){
        $supplier =Supplier::where('id',$request->id)
        ->delete();
        return 'ok';
    }

    
    public function update(Request $request){
        $supplier = Supplier::where('id', $request->id)->first();

        if ($supplier) {
            $supplier->name = $request->name;
            $supplier->address = $request-> address;
            $supplier->phone = $request-> phone;
            $supplier->email = $request-> email;
         
            $supplier->save();
            return $request;
        } else {
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
    }
}
