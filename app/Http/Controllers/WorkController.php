<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Work;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/work",
     *     tags={"Work"},
     *     summary="Get all data from Work database",
     *     description="Via this link All Work` datas come",
     *     operationId="work",
     *     
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

    public function work()
    {
        try {
            $work = Work::all();
            return response()->json([
                'status' => __('Success'),
                'message' => __('Data came successfully'),
                'work' => $work,
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

    /**
     * @OA\Post(
     *     path="/api/work",
     *     tags={"Work"},
     *     summary="Register a education",
     *     operationId="storeWork",
     
     *      @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type your district user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="region_id",
     *                     description="Type region id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="district",
     *                     description="Type your district",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="work_place",
     *                     description="Type your work place",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="faculty",
     *                     description="Type your faculty",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="cafedra",
     *                     description="Type your cafedra",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="position",
     *                     description="Type your position",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="work_name",
     *                     description="Type your work name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="work_phone",
     *                     description="Type your work phone",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="date_start",
     *                     description="Type your start date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="date_end",
     *                     description="Type your end date",
     *                     type="string"
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


    public function storeWork(StoreWorkRequest $request)
    {
        try {
            $request->validated();

            $work = Work::create([
                'user_id'=>$request->user_id,
                'region_id'=>$request->region_id,
                'district'=>$request->district,
                'work_place'=>$request->work_place,
                'faculty'=>$request->faculty,
                'cafedra'=>$request->cafedra,
                'position'=>$request->position,
                'work_name'=>$request->work_name,
                'work_phone'=>$request->work_phone,
                'date_start'=>$request->date_start,
                'date_end'=>$request->date_end,
            ]);

            return response()->json([
                'status' => __('Success'),
                'message' => __('Data created successfully'),
                'work' => $work,
            ], Response::HTTP_OK);
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
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/work/{work}",
     *     tags={"Work"},
     *     summary="Get one data from Work database",
     *     description="Via this link a Work`s data comes to show",
     *     operationId="showWork",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="work",
     *         in="path",
     *         description="ID for work data",
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

    public function showWork(Work $work)
    {
        try {
            return response()->json([
                'status' => 'success',
                'education' => $work,
            ], Response::HTTP_OK);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */


    /**
     * @OA\Put(
     *     path="/api/work/{work}/update",
     *     tags={"Work"},
     *     summary="Updated",
     *     description="Update this Work",
     *     operationId="updateWork",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="work",
     *         in="path",
     *         description="Work that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid education supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="education not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type your user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="region_id",
     *                     description="Type region id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="district",
     *                     description="Type your district",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="work_place",
     *                     description="Type your work place",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="faculty",
     *                     description="Type your faculty",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="cafedra",
     *                     description="Type your cafedra",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="position",
     *                     description="Type your position",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="work_name",
     *                     description="Type your work name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="date_start",
     *                     description="Type your start date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="date_end",
     *                     description="Type your end date",
     *                     type="string"
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

    public function updateWork(UpdateWorkRequest $request, Work $work)
    {
        try {
            $request->validated();
            $work->update([
                'user_id'=>$request->user_id,
                'region_id'=>$request->region_id,
                'district'=>$request->district,
                'work_place'=>$request->work_place,
                'faculty'=>$request->faculty,
                'cafedra'=>$request->cafedra,
                'position'=>$request->position,
                'work_name'=>$request->work_name,
                'date_start'=>$request->date_start,
                'date_end'=>$request->date_end,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Work updated successfully',
                'work' => $work,
            ], Response::HTTP_OK);
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/work/{work}/delete",
     *     tags={"Work"},
     *     summary="Deletes a work",
     *     operationId="destroyWork",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="work",
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

    public function destroyWork(Work $work)
    {
        try {
            $work->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Work deleted successfully',
                'work' => $work,
            ], Response::HTTP_OK);
        }
        catch (\Exception $e){
            return
                response()->json([
                    'status' => false,
                    'message' => $e->getMessage(),
                ]);
        }
    }
}
