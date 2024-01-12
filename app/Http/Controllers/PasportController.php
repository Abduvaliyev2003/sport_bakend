<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosportRequest;
use App\Http\Requests\UpdatePosportRequest;
use App\Models\Pasport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
    use Symfony\Component\HttpFoundation\Response;

class PasportController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/pasport",
     *     tags={"Pasport"},
     *     summary="Get all data from Pasport database",
     *     description="Via this link All Pasport` datas come",
     *     operationId="pasport",
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

    public function pasport()
    {
        try {
            $pasports = Pasport::all();
            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'Message' => __('Data created successfully'),
                'pasports' => $pasports,
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
     *     path="/api/pasport",
     *     tags={"Pasport"},
     *     summary="Register a pasport",
     *     operationId="storePasport",
     *     
     *      @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="pnfl",
     *                     description="Type your pnfl",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="pasport_seria",
     *                     description="Type your pasport seria",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="pasport_seria_code",
     *                     description="Type your pasport seria code",
     *                     type="integer"
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
    public function storePasport(StorePosportRequest $request)
    {

        try {
            $request->validated();
            $pasport = Pasport::create([
                'pnfl' => $request->pnfl,
                'pasport_seria'=>$request->pasport_seria,
                'pasport_seria_code' => $request->pasport_seria_code,
            ]);
            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'Message' => __('Data created successfully'),
                'pasport' => $pasport,
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
     * @param  \App\Models\Pasport  $pasport
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/pasport/{pasport}",
     *     tags={"Pasport"},
     *     summary="Get one data from Pasport database",
     *     description="Via this link a Pasport`s data comes to show",
     *     operationId="showPasport",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="pasport",
     *         in="path",
     *         description="ID for pasport data",
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

    public function showPasport(Pasport $pasport)
    {
        try {
            return response()->json([
                'status' => __('Success'),
                'test'=> __('Data updated successfully'),
                'local'=> App::getLocale(),
                'pasport' => $pasport,
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
     * @param  \App\Models\Pasport  $pasport
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Put(
     *     path="/api/pasport/{pasport}/update",
     *     tags={"Pasport"},
     *     summary="Updated",
     *     description="Update this pasport",
     *     operationId="updatePasport",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="pasport",
     *         in="path",
     *         description="pasport that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid pasport supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="pasport not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="pnfl",
     *                     description="Type your pnfl",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="pasport_seria",
     *                     description="Type your pasport seria",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="pasport_seria_code",
     *                     description="Type your pasport seria code",
     *                     type="integer"
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
    public function updatePasport(UpdatePosportRequest $request, Pasport $pasport)
    {
        try {
            $request->validated();
            $pasport->update([
                'pnfl' => $request->pnfl,
                'pasport_seria'=>$request->pasport_seria,
                'pasport_seria_code' => $request->pasport_seria_code,
            ]);

            return response()->json([
                'status' => __('Success'),
                'local'=> App::getLocale(),
                'message' => __('Data updated successfully'),
                'pasport' => $pasport,
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
     * @param  \App\Models\Pasport  $pasport
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Delete(
     *     path="/api/pasport/{pasport}/delete",
     *     tags={"Pasport"},
     *     summary="Deletes a pasport",
     *     operationId="destroyPasport",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="pasport",
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

    public function destroyPasport(Pasport $pasport)
    {
        try {
            $pasport->delete();
            return response()->json([
                'status' => 'success',
                'message' => __('Pasport deleted successfully'),
                'pasport' => $pasport,
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
