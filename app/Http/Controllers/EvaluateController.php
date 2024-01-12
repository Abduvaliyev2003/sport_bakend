<?php

namespace App\Http\Controllers;

use App\Http\Resources\EvaluateResource;
use App\Models\Check;
use App\Models\Direction;
use App\Models\DirectionCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EvaluateController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/evaluate/{user_id}",
     *     tags={"Evaluate"},
     *     summary="Get all data from evaluate database",
     *     description="Via this link All evaluate` datas come",
     *     operationId="evaluate",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="user_id",
     *         in="path",
     *         description="user_id for check data",
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

    public function evaluate($user_id){
        try {
            $evaluate = Check::where('user_id', $user_id)->get();
            return  EvaluateResource::collection($evaluate);
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
     * @OA\Get(
     *     path="/api/direction_user/{direction_id}",
     *     tags={"Evaluate"},
     *     summary="Get all data from evaluate database",
     *     description="Via this link All evaluate` datas come",
     *     operationId="countDirectionUser",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="direction_id",
     *         in="path",
     *         description="direction_id for check data",
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

    public function countDirectionUser($direction_id): \Illuminate\Http\JsonResponse
    {
        try {
            $direction_user = Check::where('direction_id', $direction_id)->get();
            $data = [];
            foreach ($direction_user as $user){
                $data[] = User::where('id', $user->user_id)->first();
            }
            return response()->json([
                'data'=> $direction_user,
                'datas'=>$data
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
     * @OA\Get(
     *     path="/api/direct/{direction_id}",
     *     tags={"Evaluate"},
     *     summary="Get all data from evaluate database",
     *     description="Via this link All evaluate` datas come",
     *     operationId="directionByUserId",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="direction_id",
     *         in="path",
     *         description="direction_id for check data",
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

    public function directionByUserId($direction_id): \Illuminate\Http\JsonResponse
    {
        try {
            $direction_user = Check::where('direction_id', $direction_id)->get();
            $data = [];
            foreach ($direction_user as $user){
                $data[] = User::where('id', $user->user_id)->first();
                $data[] = $user->pdf;
            }
            return response()->json([
                'datas'=>$data
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
