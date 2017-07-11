<?php

namespace App\Http\Controllers;

use App\Services\Contracts\CarSharing;

class CarsController extends Controller
{
    public function index(CarSharing $carSharing)
    {
        return response()->json(
            $carSharing->getAllCars()
        );
    }

    public function getRandom(CarSharing $carSharing)
    {
        $randomCar = $carSharing->getRandomCar();

        return view('car')
            ->withModel($randomCar['model'])
            ->withImage($randomCar['image']);
    }
}
