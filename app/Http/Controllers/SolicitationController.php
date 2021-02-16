<?php

namespace App\Http\Controllers;

use App\Models\Solicitation;
use Illuminate\Http\Request;
use App\Models\Order;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SolicitationController extends Controller
{
    public function createSolicitation(Request $request) {
        $solicitation = Solicitation::create([
            'code' => $request->code,
            'ready_date' => Carbon::parse($request->dueDate),
            'status' => 0
        ]);

        if($solicitation) {
            return response()->json([
                'solicitation' => $solicitation,
                'success_message' => 'Solicitação criada!'
            ], 201);
        } else {
            return response()->json([
                'error_message' => 'Erro'
            ], 400);
        }

        
    }

    public function getSolicitations() {
        $solicitation = Solicitation::paginate(4);

        return response()->json([
            'solicitations' => $solicitation
        ], 200);
    }
}
