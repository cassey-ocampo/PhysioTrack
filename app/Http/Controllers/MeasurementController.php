<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeasurementController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'height_cm' => 'required|numeric|min:1|max:300',
            'weight_kg' => 'required|numeric|min:1|max:500',
        ]);

        // Convert height from centimeters to meters
        $height = $validated['height_cm'] / 100;

        // Calculate BMI
        $bmi = $validated['weight_kg'] / ($height * $height);

        // Save the measurement to the database
        $id = DB::table('measurements')->insertGetId([
            'height_cm' => $validated['height_cm'],
            'weight_kg' => $validated['weight_kg'],
            'bmi' => round($bmi, 2),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Return the saved result
        return response()->json([
            'message' => 'Measurement saved successfully.',
            'data' => [
                'id' => $id,
                'height_cm' => $validated['height_cm'],
                'weight_kg' => $validated['weight_kg'],
                'bmi' => round($bmi, 2),
            ],
        ], 201);
    }
}