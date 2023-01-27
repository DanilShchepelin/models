<?php

namespace App\Http\Controllers;

use App\Http\Requests\Color\StoreColorRequest;
use App\Http\Requests\Color\UpdateColorRequest;
use App\Http\Resources\ColorResource;
use App\Models\Color;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ColorResource::collection(Color::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreColorRequest $request
     * @return JsonResponse
     */
    public function store(StoreColorRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $color = Color::create([
            'name' => $validated['name']
        ]);

        return response()->json([
            'message' => 'Color updated successfully',
            'color' => $color
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Color $color
     * @return ColorResource
     */
    public function show(Color $color): ColorResource
    {
        return ColorResource::make($color);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateColorRequest $request
     * @param Color $color
     * @return JsonResponse
     */
    public function update(UpdateColorRequest $request, Color $color): JsonResponse
    {
        $color->update($request->validated());

        return response()->json([
            'message' => 'Color updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy(Color $color): JsonResponse
    {
        $color->delete();

        return response()->json([
            'message' => 'Color deleted successfully'
        ], 204);
    }
}
