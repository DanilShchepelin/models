<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\StoreCarRequest;
use App\Http\Requests\Car\UpdateCarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return CarResource::collection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCarRequest $request
     * @return JsonResponse
     */
    public function store(StoreCarRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $car = Car::create([
            'model' => $validated['model'],
            'number' => $validated['number'],
            'color_id' => $validated['color_id'],
            'comment' => $validated['comment']
        ]);

        return response()->json([
            'message' => 'Car created successfully',
            'article' => $car
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Car $car
     * @return CarResource
     */
    public function show(Car $car): CarResource
    {
        return CarResource::make($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCarRequest $request
     * @param Car $car
     * @return JsonResponse
     */
    public function update(UpdateCarRequest $request, Car $car): JsonResponse
    {
        $car->update($request->validated());

        return response()->json([
            'message' => 'Car updated successfully',
            'car' => $car
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Car $car
     * @return JsonResponse
     */
    public function destroy(Car $car): JsonResponse
    {
        $car->delete();

        return response()->json([
            'message' => 'Car deleted successfully'
        ], 204);
    }
}
