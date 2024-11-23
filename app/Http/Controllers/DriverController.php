<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;

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
}
