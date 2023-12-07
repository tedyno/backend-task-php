<?php

namespace App\Http\Controllers;

use App\Http\Services\CarService;
use App\Models\Car;
use App\Models\Color;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Car::all());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            // Validate incoming request data
            $validatedData = $request->validate([
                'make' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'buildDate' => 'required|date',
                'colorId' => 'required|integer|exists:App\Models\Color,id',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }

        $car = new Car($validatedData);

        $car = new Car($validatedData);
        $car->build_date = $validatedData['buildDate'];
        $color = Color::find($validatedData['colorId']);

        $car->color()->associate($color);
        $car->save();

        return response()->json($car, 201);
    }

    public function show(Car $car): JsonResponse
    {
        return response()->json($car);
    }

    public function destroy(Car $car): JsonResponse
    {
        $car->delete();

        return response()->json();
    }
}
