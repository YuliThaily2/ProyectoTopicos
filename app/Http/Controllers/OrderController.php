<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request){
        $order = Order::create([
            'order_Date' => $request->order_Date,
            'orden_Status' => $request->orden_Status,
            'Customer_id' => $request->Customer_id,
            
        ] );

        $order->save();

        return $request;
    }

    public function show(Request $request){
        $order = Order::where('order_Date', $request->order_Date)
        ->get();
        return $order;
    }

    public function destroy(Request $request){
        $order =order::where('id',$request->id)
        ->delete();
        return 'ok';
    }

    
    public function update(Request $request){
        $order = Order::where('id', $request->id)->first();

        if ($order) {
            $order->order_Date = $request->order_Date;
            $order->orden_Status = $request-> orden_Status;
            $order->Customer_id = $request-> Customer_id;
            $order->save();
            return $request;
        } else {
            return response()->json(['mensaje' => 'Orden no encontrada'], 404);
        }
    }
}
