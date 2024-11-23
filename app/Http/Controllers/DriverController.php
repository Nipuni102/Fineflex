<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Fine;

class DriverController extends Controller
{
    public function getDriverDetails(Request $request)
    {
        // Always respond with JSON, even for validation errors
        $request->headers->set('Accept', 'application/json');
    
        // Validate the request
        $request->validate([
            'licence_number' => 'required|string|exists:drivers,licence_id',
        ]);
    
        $driver = Driver::where('licence_id', $request->licence_number)->first();
    
        if ($driver) {
            return response()->json([
                'status' => 'success',
                'message' => 'Driver details retrieved successfully.',
                'data' => [
                    'name' => $driver->name,
                    'age' => $driver->age,
                    'address' => $driver->address,
                    'license_expire_date' => $driver->license_expire_date,
                    'competent_to_drive' => $driver->competent_to_drive,
                    'mobile_number' => $driver->mobile_number,
                    'email' => $driver->email,
                ],
            ], 200);
        }
    
        return response()->json([
            'status' => 'error',
            'message' => 'Driver not found.',
        ], 404);
    }

    public function getDriverFines(Request $request)
    {
        // Always respond with JSON, even for validation errors
        $request->headers->set('Accept', 'application/json');

        // Validate the request
        $request->validate([
            'driver_id' => 'required|string|exists:fines,driver_id',
        ]);

        // Retrieve fines for the given driver_id
        $fines = Fine::where('driver_id', $request->driver_id)->get();

        if ($fines->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'No fines found for this driver.',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Fines retrieved successfully.',
            'data' => $fines,
        ], 200);
    }
}
