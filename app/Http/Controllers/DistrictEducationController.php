<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDistrictEducationRequest;
use App\Http\Requests\UpdateDistrictEducationRequest;
use App\Models\DistrictEducation;
use Illuminate\Http\Request;

class DistrictEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/district",
     *     tags={"DistrictEducation"},
     *     summary="Get all data from DistrictEducation database",
     *     description="Via this link All District Education` datas come",
     *     operationId="districtEducation",
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

    public function districtEducation()
    {
        $districtEducation = DistrictEducation::all();
        return response()->json([
            'status' => 'success',
            'message' => 'DistrictEducation comes successfully',
            'districtEducation' => $districtEducation,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/district",
     *     tags={"DistrictEducation"},
     *     summary="Register a district",
     *     operationId="storeDistrictEducation",
     *      @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="name",
     *                     description="Type your district education name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="fillial_id",
     *                     description="Type fillial id",
     *                     type="integer"
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */

    public function storeDistrictEducation(StoreDistrictEducationRequest $request)
    {
        $request->validated();

        $districtEducation = DistrictEducation::create([
            'name' => $request->name,
            'fillial_id'=>$request->fillial_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'districtEducation created successfully',
            'districtEducation' => $districtEducation,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistrictEducation  $districtEducation
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/district/{districtEducation}",
     *     tags={"DistrictEducation"},
     *     summary="Get one data from District Education database",
     *     description="Via this link a District Education`s data comes to show",
     *     operationId="showDistrictEducation",
     *     @OA\Parameter(
     *         name="districtEducation",
     *         in="path",
     *         description="ID for districtEducation data",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
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
     *  )
     */

    public function showDistrictEducation(DistrictEducation $districtEducation)
    {
        return response()->json([
            'status' => 'success',
            'districtEducation' => $districtEducation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistrictEducation  $districtEducation
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/district/{districtEducation}/update",
     *     tags={"DistrictEducation"},
     *     summary="Updated",
     *     description="Update this districtEducation",
     *     operationId="updateDistrictEducation",
     *     @OA\Parameter(
     *         name="districtEducation",
     *         in="path",
     *         description="districtEducation that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid districtEducation supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="districtEducation not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="name",
     *                     description="Type your district education name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="fillial_id",
     *                     description="Type fillial id",
     *                     type="integer"
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     )
     *   )
     */

    public function updateDistrictEducation(UpdateDistrictEducationRequest $request, DistrictEducation $districtEducation)
    {
        $request->validated();
        $districtEducation->update([
            'name' => $request->name,
            'fillial_id'=>$request->fillial_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'DistrictEducation updated successfully',
            'districtEducation' => $districtEducation,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistrictEducation  $districtEducation
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/district/{districtEducation}/delete",
     *     tags={"DistrictEducation"},
     *     summary="Deletes a districtEducation",
     *     operationId="destroyDistrictEducation",
     *     @OA\Parameter(
     *         name="districtEducation",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid course supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="course not found"
     *     ),
     *  )
     */

    public function destroyDistrictEducation(DistrictEducation $districtEducation)
    {
        $districtEducation->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'District Education deleted successfully',
            'districtEducation' => $districtEducation,
        ]);
    }
}
