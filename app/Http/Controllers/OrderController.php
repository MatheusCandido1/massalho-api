<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Solicitation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getOrders($id) {
        $orders = Order::whereHas(
            'solicitation', function($query) use ($id){
                $query->where('solicitation_id', $id);
            })
            ->get();

        return response()->json([
            'orders' =>  $orders
        ], 200);
    }

    public function createOrder(Request $request) {
        $order = Order::create([
            'ready_date' => $request->ready_date,
            'quantity' => $request->quantity,
            'status' => 0,
            'user_id' => 1,
            'product_id' => $request->product_id, 
        ]); 

        $solicitation = Solicitation::find($request->solicitation_id);

        $order->solicitation()->attach($solicitation->id);

        if($order) {
            return response()->json([
                'order' => $order,
                'success_message' => 'Pedido criado e sincronizado!'
            ], 201);
        } else {
            return response()->json([
                'error_message' => 'Erro'
            ], 400);
        }
    }
}
