<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Training;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/training",
     *     tags={"Training"},
     *     summary="Get all data from training database",
     *     description="Via this link All training` datas come",
     *     operationId="training",
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


    public function training()
    {
        try {
            $trainings = Training::all();
            return response()->json([
                'status' => __('Success'),
                'message' => __('Data came successfully'),
                'trainings' => $trainings,
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Post(
     *     path="/api/training",
     *     tags={"Training"},
     *     summary="Register a training",
     *     operationId="storeTraining",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *      @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="region_id",
     *                     description="Type region id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="speciality",
     *                     description="Type fillial id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="direction",
     *                     description="Type your direction",
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

    public function storeTraining(StoreTrainingRequest $request)
    {
        try {
            $request->validated();
            $training = Training::create([
                'user_id' => $request->user_id,
                'region_id' => $request->region_id,
                'speciality' => $request->speciality,
                'direction' => $request->direction,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
            ]);

            return response()->json([
                'status' => __('Success'),
                'message' => __('Data created successfully'),
                'training' => $training,
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
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/training/{training}",
     *     tags={"Training"},
     *     summary="Get one data from Training database",
     *     description="Via this link a Training`s data comes to show",
     *     operationId="showTraining",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="training",
     *         in="path",
     *         description="ID for training data",
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

    public function showTraining(Training $training)
    {
        try {
            return response()->json([
                'status' => __('Success'),
                'trining' => $training,
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
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/training/{training}/update",
     *     tags={"Training"},
     *     summary="Updated",
     *     description="Update this training",
     *     operationId="updateTraining",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="training",
     *         in="path",
     *         description="training that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid training supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="training not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="region_id",
     *                     description="Type region id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="speciality",
     *                     description="Type fillial id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="direction",
     *                     description="Type your direction",
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

    public function updateTraining(UpdateTrainingRequest $request, Training $training)
    {
        try {
            $request->validated();
            $training->update([
                'user_id' => $request->user_id,
                'region_id' => $request->region_id,
                'speciality' => $request->speciality,
                'direction' => $request->direction,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
            ]);

            return response()->json([
                'status' => __('Success'),
                'message' => __('Data updated successfully'),
                'training' => $training,
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
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/training/{training}/delete",
     *     tags={"Training"},
     *     summary="Deletes a training",
     *     operationId="destroyTraining",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="training",
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

    public function destroyTraining(Training $training)
    {
        try {
            $training->delete();
            return response()->json([
                'status' => __('Success'),
                'message' => __('Data deleted successfully'),
                'training' => $training,
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
