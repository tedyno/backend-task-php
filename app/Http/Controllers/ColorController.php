<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use App\Models\Color;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class ColorController extends Controller
{
    public function index(): JsonResponse
    {
        return new JsonResponse(Color::all());
    }
}
