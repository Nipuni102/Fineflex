<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Policeofficer;
use Illuminate\Support\Facades\Hash;

class PoliceOfficerController extends Controller
{
    public function validateOfficer(Request $request)
    {
        // Define validation rules
        $rules = [
            'police_id' => 'required|string|exists:police_officers,police_id',
            'mobile_number' => 'required|string|exists:police_officers,mobile_number',
            'password' => 'required|string',
        ];

        // Custom error messages
        $messages = [
            'police_id.exists' => 'The provided Police ID is not registered.',
            'mobile_number.exists' => 'The mobile number is not registered.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Handle validation errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        // Verify password
        $officer = Policeofficer::where('police_id', $request->police_id)
            ->where('mobile_number', $request->mobile_number)
            ->first();

        if (!$officer || !password_verify($request->password, $officer->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials provided.',
            ], 401);
        }

        // Success response
        return response()->json([
            'success' => true,
            'message' => 'Police Officer validated successfully.',
            'data' => $officer,
        ]);
    }

    /**
     * Handle the police officer sign-up.
     */
    public function signUp(Request $request)
    {
        // Define validation rules
        $rules = [
            'police_id' => 'required|string|unique:police_officers,police_id',
            'name' => 'required|string|min:3',
            'mobile_number' => 'required|string|unique:police_officers,mobile_number',
            'email' => 'required|string|email|unique:police_officers,email',
            'password' => 'required|string|min:6|confirmed',// 'confirmed' expects a 'password_confirmation' field in the request
        ];

        // Custom error messages
        $messages = [
            'police_id.unique' => 'The provided Police ID is already taken.',
            'mobile_number.unique' => 'The mobile number is already registered.',
            'email.unique' => 'The email address is already in use.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Handle validation errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        // Create the police officer record
        $officer = PoliceOfficer::create([
            'police_id' => $request->police_id,
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'police_station_id' => $request->police_station_id, 
        ]);

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Police officer signed up successfully.',
            'data' => $officer,
        ]);
    }
}
