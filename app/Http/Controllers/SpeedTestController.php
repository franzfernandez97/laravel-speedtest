<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\SpeedTest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SpeedTestController extends Controller
{
    public function index()
    {
        return response()->json(SpeedTest::all(),200);
    }

    public function store(Request $request)
{
    // Buscar un cliente con el mismo username y machineName
    $client = Client::where('username', $request->client['username'])
                    ->where('machine_name', $request->client['machineName'])
                    ->first();

    // Si no existe, lo creamos
    if (!$client) {
        $client = Client::create([
            'username' => $request->client['username'],
            'user_domain' => $request->client['userDomain'],
            'os_name' => $request->client['osName'],
            'os_version' => $request->client['osVersion'],
            'machine_name' => $request->client['machineName']
        ]);
    }

    // Guardar SpeedTest
    $speedTest = SpeedTest::create([
        'file_name' => $request->file_name ?? 'N/A',
        'date' => Carbon::parse($request->speedTest['timestamp'])->setTimezone('America/Bogota'),
        'download_speed' => $request->speedTest['download']['bytes'] / 1048576,
        'upload_speed' => $request->speedTest['upload']['bytes'] / 1048576,
        'isp' => $request->speedTest['isp'],
        'server_country' => $request->speedTest['server']['country'],
        'server_location' => $request->speedTest['server']['location'],
        'client_id' => $client->id
    ]);

    return response()->json([
        'message' => 'SpeedTest saved successfully!',
        'data' => $speedTest
    ], 201);
}
    
}
