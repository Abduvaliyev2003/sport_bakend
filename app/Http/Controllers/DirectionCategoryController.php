<?php

namespace App\Http\Controllers;

use App\Models\DirectionCategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Traits\LocaleTrait;

class DirectionCategoryController extends Controller
{
    use LocaleTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/directionCategory",
     *     tags={"DirectionCategory"},
     *     summary="Get all data from DirectionCategory database",
     *     description="Via this link All DirectionCategory` datas come",
     *     operationId="direction_category",
     *      @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     ),
     *      @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *
     *  )
     */

    public function direction_category(): \Illuminate\Http\JsonResponse
    {
        try {
            $directionCategory = DirectionCategory::select('id',
                LocaleTrait::convert('category'),
                'direction_id', 'sub_category'
            )->get();
            return response()->json([
                'status' => 'success',
                'directionCategory'=>$directionCategory
            ],Response::HTTP_OK);
        }
        catch (\Exception $e){
            return
                response()->json([
                    'status' => false,
                    'message' => $e->getMessage(),
                ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DirectionCategory  $directionCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DirectionCategory $directionCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DirectionCategory  $directionCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DirectionCategory $directionCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DirectionCategory  $directionCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DirectionCategory $directionCategory)
    {
        //
    }
}
