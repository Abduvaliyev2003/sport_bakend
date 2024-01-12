<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckRequest;
use App\Http\Requests\UpdateCheckRequest;
use App\Http\Traits\LocaleTrait;
use App\Models\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/check",
     *     tags={"Check"},
     *     summary="Get all data from fillials database",
     *     description="Via this link All fillials` datas come",
     *     operationId="check",
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

    public function check()
    {
        try {
            $checks = Check::all();
            return response()->json([
                'status' => __('Success'),
                'checks' => $checks
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
     *     path="/api/check",
     *     tags={"Check"},
     *     summary="Register a pasport",
     *     operationId="storeCheck",
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
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="direction_id",
     *                     description="direction ID",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="direction_category_id",
     *                     description="Direction category ID",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="score",
     *                     description="Direction category score",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="User ID",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="direction_category_name",
     *                     description="Direction category name",
     *                     type="string"
     *                 ),
     *                     @OA\Property(
     *                     property="direction_category_name_answer",
     *                     description="Direction category answer",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="pdf",
     *                     description="upload any pdf file",
     *                     type="file"
     *                 ),
     *                 @OA\Property(
     *                     property="admin_permission",
     *                     description="Permission of one of an Admin",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="messages",
     *                     description="message of one of an Admin",
     *                     type="string",
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

    public function storeCheck(StoreCheckRequest $request)
    {
        try {
            $request->validated();
            $check = new Check;
            if ($request->hasFile('pdf')){
                $path = $request->file('pdf')->store('pdf', 'public');
            }
            $check->user_id                =$request->user_id;
            $check->direction_id           =$request->direction_id;
            $check->direction_category_id  =$request->direction_category_id;
            $check->direction_category_name=$request->direction_category_name;
            $check->direction_category_name_answer = $request->direction_category_name_answer;
            $check->pdf                    =$path;
            $check->admin_permission       =$request->admin_permission;
            $check->messages               =$request->admin_permission;
            $check->score                  =$request->score;
            $check->save();

            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'Message' => __('Data created successfully'),
                'check' => $check
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
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/check/{check}",
     *     tags={"Check"},
     *     summary="Get one data from Avatar database",
     *     description="Via this link a Avatar`s data comes to show",
     *     operationId="showCheck",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="check",
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

    public function showCheck(Check $check): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'check' => $check,
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
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="/api/check/{check}/update",
     *     tags={"Check"},
     *     summary="Updated",
     *     description="Update this avatar",
     *     operationId="updateCheck",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="check",
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
     *                     property="direction_category_name",
     *                     description="Direction category name",
     *                     type="string"
     *                 ), @OA\Property(
     *                     property="score",
     *                     description="score",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="pdf",
     *                     description="upload any pdf file",
     *                     type="file"
     *                 ),
     *                 @OA\Property(
     *                     property="admin_permission",
     *                     description="Permission of one of an Admin",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="messages",
     *                     description="message of one of an Admin",
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

    public function updateCheck(UpdateCheckRequest $request, Check $check)
    {
        try {
            $request->validated();

            if ($request->hasFile('pdf')){
                Storage::disk('public')->delete($check->pdf);
                $path = $request->file('pdf')->store('pdf', 'public');
            }

            $check->direction_category_name = $request->input('direction_category_name');
            $check->score = $request->input('score');
            $check->pdf                     = $path ?? $check->pdf;
            $check->admin_permission        = $request->input("admin_permission");
            $check->messages                = $request->input("messages");
            $check->save();

            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'Message' => __('Data updated successfully'),
                'check' => $check
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
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */


    /**
     * @OA\Delete(
     *     path="/api/check/{check}/delete",
     *     tags={"Check"},
     *     summary="Deletes a avatar",
     *     operationId="destroyCheck",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="check",
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

    public function destroyCheck(Check $check)
    {
        Storage::disk('public')->delete($check->pdf);
        $check->delete();
        return response()->json([
            'status' => 'success',
            'check'=> $check
        ]);
    }
}
