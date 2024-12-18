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
            'police_id' => 'required|int',
            'driver_id' => 'required|int',
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

    public function getFinesByDateAndOfficer(Request $request)
{
    // Always respond with JSON
    $request->headers->set('Accept', 'application/json');

    // Validate the request
    $request->validate([
        'police_id' => 'required|int|exists:fines,police_id',
        'start_date' => 'required|date|before_or_equal:end_date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    // Fetch fines with related driver and violation type data
    $fines = Fine::where('police_id', $request->police_id)
        ->whereBetween('date', [$request->start_date, $request->end_date])
        ->join('drivers', 'fines.driver_id', '=', 'drivers.licence_id') // Join with drivers table
        ->join('violationtypes', 'fines.violation_type_id', '=', 'violationtypes.id') // Join with violation types
        ->select(
            'fines.vehicle_number',
            'drivers.licence_id as license_number',
            'violationtypes.violation_name as violation',
            'fines.notification_status as payment_status'
        )
        ->get();

    // Check if fines exist
    if ($fines->isEmpty()) {
        return response()->json([
            'status' => 'error',
            'message' => 'No fines found for the given filters.',
        ], 404);
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Fines retrieved successfully.',
        'data' => $fines,
    ], 200);
}



}
