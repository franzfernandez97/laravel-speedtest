<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index()
    {
        return response()->json(Client::all(), 200);
    }


    public function search(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'machineName' => 'sometimes|string'
        ]);

        $query = Client::where('username', $request->username);

        if ($request->has('machineName')) {
            $query->where('machine_name', $request->machineName);
        }

        $clients = $query->get();

        return response()->json($clients, 200);
    }
}
