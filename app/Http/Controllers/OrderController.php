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
}
