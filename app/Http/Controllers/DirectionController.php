<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDirectionRequest;
use App\Http\Requests\UpdateDirectionRequest;
use App\Models\Direction;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Traits\LocaleTrait;
use App\Http\Resources\DirectionResource;
use Symfony\Component\HttpFoundation\Response;

/**
 *  @Controller("/course")
 */
/**
 * {@inheritDoc}
 */
class DirectionController extends Controller
{
    use LocaleTrait;

    public function __construct()
    {
        /*$this->middleware('auth:api');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/direction",
     *     tags={"Direction"},
     *     summary="Get all data from Direction database",
     *     description="Via this link All Courses` datas come",
     *     operationId="course",
     *     @OA\Parameter(
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

    public function direction()
    {
        try {
            $direction = Direction::select('id', LocaleTrait::convert('title'))->get();
            return response()->json([
                'status' => __('Success'),
                'direction' => $direction
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
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Post(
     *     path="/api/direction",
     *     tags={"Direction"},
     *     summary="Create a new direction",
     *     description="Create a new direction for course table in the database",
     *     operationId="storeDirection",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="title",
     *                     description="Type a title for a course",
     *                     type="string",
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Direction not found"
     *     ),
     * )
     *
     */

    public function storeDirection(StoreDirectionRequest $request)
    {
        try {
            $request->validated();
            $locale = LocaleTrait::convert('title');
            $direction = new Direction;
            $direction[$locale]=$request->title;
            $direction->save();

            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'message' => __('Data updated successfully'),
                'direction' => $direction
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/direction/{id}",
     *     tags={"Direction"},
     *     summary="Get one data from Direction database",
     *     description="Via this link a Direction`s data comes to show",
     *     operationId="showDirection",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID for direction data",
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

    public function showDirection($id)
    {
        $data = Direction::select('id', LocaleTrait::convert('title'))->where('id', $id)->get();
        try {
            return response()->json([
                'status' => __('Success'),
                'direction'=> $data
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Put(
     *     path="/api/direction/{direction}/update",
     *     tags={"Direction"},
     *     summary="Updated",
     *     description="Update this direction",
     *     operationId="updateDirection",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="direction",
     *         in="path",
     *         description="direction that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid direction supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="direction not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="title",
     *                     description="Type a title for a course",
     *                     type="string",
     *                 ),
     *             )
     *         )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation"
     *     )
     *   )
     */

    public function updateDirection(UpdateDirectionRequest $request, Direction $direction)
    {
        try {
            $request->validated();
            $direction[LocaleTrait::convert('title')] = $request->title;
            $direction->update();

            return response()->json([
                'status' => __('Success'),
                'direction'=> $direction->select('id', LocaleTrait::convert('title'))->where('id', $direction->id)->get(),
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Delete(
     *     path="/api/direction/{id}/delete",
     *     tags={"Direction"},
     *     summary="Deletes a direction",
     *     operationId="destroyDirection",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="id",
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
     *         description="Invalid direction supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="direction not found"
     *     ),
     *  )
     */

    public function destroyDirection($id)
    {
        try {
            $direction=Direction::find($id);
            $direction->delete();
            return response()->json([
                'status' => __('Success'),
                'direction'=>  $direction

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
}
