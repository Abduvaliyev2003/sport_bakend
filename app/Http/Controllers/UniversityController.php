<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/university",
     *     tags={"University"},
     *     summary="Get all data from university database",
     *     description="Via this link All university` datas come",
     *     operationId="university",
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

    public function university()
    {
        $university = University::all();
        return response()->json([
            'status' => 'success',
            'message' => 'University comes successfully',
            'university' => $university,
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
     *     path="/api/university",
     *     tags={"University"},
     *     summary="Register a university",
     *     operationId="storeUniversity",
     *      @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="name",
     *                     description="Type your university name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="district_education_id",
     *                     description="Type your district education id",
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

    public function storeUniversity(StoreUniversityRequest $request)
    {
        $request->validated();

        $university = University::create([
            'name' => $request->name,
            'district_education_id'=>$request->district_education_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'University created successfully',
            'university' => $university,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/university/{university}",
     *     tags={"University"},
     *     summary="Get one data from University database",
     *     description="Via this link a University`s data comes to show",
     *     operationId="showUniversity",
     *     @OA\Parameter(
     *         name="university",
     *         in="path",
     *         description="ID for university data",
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

    public function showUniversity(University $university)
    {
        return response()->json([
            'status' => 'success',
            'university' => $university,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/university/{university}/update",
     *     tags={"University"},
     *     summary="Updated",
     *     description="Update this university",
     *     operationId="updateUniversity",
     *     @OA\Parameter(
     *         name="university",
     *         in="path",
     *         description="university that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid university supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="university not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="name",
     *                     description="Type your university name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="district_education_id",
     *                     description="Type your district education id",
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

    public function updateUniversity(UpdateUniversityRequest $request, University $university)
    {
        $request->validated();
        $university->update([
            'name' => $request->name,
            'district_education_id'=>$request->district_education_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'University updated successfully',
            'university' => $university,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/university/{university}/delete",
     *     tags={"University"},
     *     summary="Deletes a university",
     *     operationId="destroyUniversity",
     *     @OA\Parameter(
     *         name="university",
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

    public function destroyUniversity(University $university)
    {
        $university->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'university deleted successfully',
            'university' => $university,
        ]);
    }
}
