<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAvatarRequest;
use App\Http\Requests\UpdateAvatarRequest;
use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/avatar",
     *     tags={"Avatar"},
     *     summary="Get all data from Avatar database",
     *     description="Via this link All Avatar` datas come",
     *     operationId="avatar",
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
    public function avatar(): \Illuminate\Http\JsonResponse
    {
        try {
            $avatar = Avatar::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Avatar created successfully',
                'avatar' => $avatar,
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
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/avatar",
     *     tags={"Avatar"},
     *     summary="Store an avatar",
     *     operationId="storeAvatar",
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
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="photo",
     *                     description="Upload your photo avatar",
     *                     type="file",
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

    public function storeAvatar(StoreAvatarRequest $request)
    {
        try {
            $request->validated();
            $avatar = new Avatar;
            if ($request->hasFile('photo')){
                $path = $request->file('photo')->store('avatars', 'public');
            }
            $avatar->user_id = $request->user_id;
            $avatar->photo = $path ?? null;
            $avatar->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Avatar created successfully',
                'avatar' => $avatar,
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
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/avatar/{avatar}",
     *     tags={"Avatar"},
     *     summary="Get one data from Avatar database",
     *     description="Via this link a Avatar`s data comes to show",
     *     operationId="showAvatar",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="avatar",
     *         in="path",
     *         description="ID for avatar data",
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

    public function showAvatar(Avatar $avatar)
    {
        try {
            return response()->json([
                'status' => 'success',
                'avatar' => $avatar,
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
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/avatar/{avatar}/update",
     *     tags={"Avatar"},
     *     summary="Updated",
     *     description="Update this avatar",
     *     operationId="updateAvatar",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="avatar",
     *         in="path",
     *         description="avatar that to be updated",
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
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="photo",
     *                     description="Upload your photo avatar",
     *                     type="file",
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

    public function updateAvatar(UpdateAvatarRequest $request, Avatar $avatar)
    {
        try {
            $request->validated();
            if ($request->hasFile('photo')){
                Storage::disk('public')->delete($avatar->photo);
                $path = $request->file('photo')->store('avatars', 'public');
            }

            $avatar->update([
                'photo' => $path ?? $avatar->photo
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Avatar updated successfully',
                'avatar' => $avatar,
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
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/avatar/{avatar}/delete",
     *     tags={"Avatar"},
     *     summary="Deletes a avatar",
     *     operationId="destroyAvatar",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="avatar",
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

    public function destroyAvatar($id)
    {
        try {
            $avatar = Avatar::find($id);
            Storage::disk('public')->delete($avatar->photo);
            $avatar->delete();
            return response()->json([
                'status' => 'success',
                'avatar'=> $avatar
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
