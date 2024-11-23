<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fine;
use Carbon\Carbon;

class FineController extends Controller
{
    public function saveFine(Request $request)
    {
        // Always respond with JSON
        $request->headers->set('Accept', 'application/json');

        // Validate the request
        $request->validate([
            'fine_id' => 'required|string|unique:fines,fine_id',
            'police_id' => 'required|string',
            'driver_id' => 'required|string',
            'vehicle_number' => 'required|string',
            'violation_type_id' => 'required|string',
            'police_station' => 'required|string',
        ]);

        // Create a new fine record
        $fine = Fine::create([
            'fine_id' => $request->fine_id,
            'police_id' => $request->police_id,
            'driver_id' => $request->driver_id,
            'vehicle_number' => $request->vehicle_number,
            'violation_type_id' => $request->violation_type_id,
            'police_station' => $request->police_station,
            'notification_status' => 'pending', // Automatically set
            'date' => Carbon::now()->format('Y-m-d'), // Automatically set to current date
            'time' => Carbon::now()->format('H:i:s'), // Automatically set to current time
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Fine saved successfully.',
            'data' => $fine,
        ], 201);
    }
}
