<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckUserRequest;
use App\Http\Requests\UpdateCheckUserRequest;
use App\Models\CheckUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class CheckUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/checkUser",
     *     tags={"CheckUser"},
     *     summary="Get all data from checkUser database",
     *     description="Via this link All checkUser` datas come",
     *     operationId="checkUser",
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
     *  )
     */

    public function checkUser()
    {
        try {
            $checkUsers = CheckUser::get();
            return response()->json([
                'status' => __('ok'),
                'checkUsers' => $checkUsers
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
     *     path="/api/checkUser",
     *     tags={"CheckUser"},
     *     summary="Register a pasport",
     *     operationId="storeCheckUser",
     *      @OA\Parameter(
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
     *                     description="type user id",
     *                     type="integer",
     *                 ),
     *                 @OA\Property(
     *                     property="permission",
     *                     description="permission of one of an Admin",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="message",
     *                     description="message of one of an Admin",
     *                     type="string",
     *                 ),
     *
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */

    public function storeCheckUser(StoreCheckUserRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            $request->validated();
            $checkUsers = CheckUser::create($request->all());
            return response()->json([
                'status' => __('ok'),
                'checkUsers' => $checkUsers
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
     * @param  \App\Models\CheckUser  $checkUser
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/checkUser/{checkUser}",
     *     tags={"CheckUser"},
     *     summary="Get one data from CheckUser database",
     *     description="Via this link a CheckUser`s data comes to show",
     *     operationId="showCheckUser",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="checkUser",
     *         in="path",
     *         description="ID for checkUser data",
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

    public function showCheckUser(CheckUser $checkUser)
    {
        try {
            return response()->json([
                'status' => __('ok'),
                'local'=> App::getLocale(),
                'check' => $checkUser,
            ]);
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
     * @param  \App\Models\CheckUser  $checkUser
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/checkUser/{checkUser}/update",
     *     tags={"CheckUser"},
     *     summary="Updated",
     *     description="Update this checkUser",
     *     operationId="updateCheckUser",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="checkUser",
     *         in="path",
     *         description="checkUser that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid avatar supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="avatar not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="permission",
     *                     description="permission of one of an Admin",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="message",
     *                     description="massege of one of an Admin",
     *                     type="string",
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

    public function updateCheckUser(UpdateCheckUserRequest $request, CheckUser $checkUser)
    {
        try {
            $request->validated();
            $checkUser->update($request->all());

            return response()->json([
                'status' => __('ok'),
                'local'=> App::getLocale(),
                'message' => __('Data updated successfully'),
                'check' => $checkUser
            ]);
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
     * @param  \App\Models\CheckUser  $checkUser
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/checkUser/{checkUser}/delete",
     *     tags={"CheckUser"},
     *     summary="Deletes a checkUser",
     *     operationId="destroyCheckUser",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="checkUser",
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
     *         description="Avatar not found"
     *     ),
     *  )
     */

    public function destroyCheckUser(CheckUser $checkUser)
    {
        try {
            $checkUser->delete();

            return response()->json([
                'status' => 'ok',
                'check'=> $checkUser
            ]);
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
