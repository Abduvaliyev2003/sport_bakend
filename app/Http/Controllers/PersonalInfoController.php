<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalInfoRequest;
use App\Http\Requests\UpdatePesonalInfoRequest;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *  @Controller("/personal")
 */
/**
 * {@inheritDoc}
 */
class PersonalInfoController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth:api');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     */

    /**
     * @OA\Get(
     *     path="/api/personal",
     *     tags={"Personal Info"},
     *     summary="Get all data from Personal Info database",
     *     description="Via this link All Personal Infos` datas come",
     *     operationId="personal",
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

    public function personal()
    {
        try {
            $personalInfos = PersonalInfo::with('pasport')->get();
             
            return response()->json([
                'status' => __('Success'),
                'personalInfos'=>$personalInfos
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
     *     path="/api/personal",
     *     tags={"Personal Info"},
     *     summary="Register a Personal Info",
     *     operationId="storePersonal",
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
     *                     property="full_name",
     *                     description="Type your full name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="email",
     *                     description="Type your email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="phone",
     *                     description="Type your phone",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="gender",
     *                     description="Type your gender",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="birth_date",
     *                     description="Type the date of your birth",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="nationality",
     *                     description="Type the nationality",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="pasport_id",
     *                     description="Type the pasport id",
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

    public function storePersonal(StorePersonalInfoRequest $request)
    {
        try {
            $request->validated();

            $personalInfo=PersonalInfo::create([
                'user_id'=>$request->user_id,
                'full_name'=>$request->full_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'gender'=>$request->gender,
                'birth_date'=>$request->birth_date,
                'nationality'=>$request->nationality,
                'pasport_id'=>$request->pasport_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Personal Info created successfully',
                'personal-info' => $personalInfo,
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
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/personal/{personalInfo}",
     *     tags={"Personal Info"},
     *     summary="Get one data from personal info database",
     *     description="Via this link a personal`s data comes to show",
     *     operationId="showPersonal",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="personalInfo",
     *         in="path",
     *         description="ID for personal data",
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

    public function showPersonal( $personalInfo)
    {    
        try {
            
           $personal =   PersonalInfo::with('pasport')->whereHas('pasport', function($q) use ($personalInfo){
            $q->where('id', '=', $personalInfo);
           })->find( $personalInfo);
          
            return response()->json([
                'status' => 'success',
                'personal' => $personal ,
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
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/personal/{personalInfo}/update",
     *     tags={"Personal Info"},
     *     summary="Updated",
     *     description="Update this personal",
     *     operationId="updatePersonal",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="personal",
     *         in="path",
     *         description="personal that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid personal supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="personal not found"
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
     *                     property="full_name",
     *                     description="Type your full name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="email",
     *                     description="Type your email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="phone",
     *                     description="Type your phone",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="gender",
     *                     description="Type your gender",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="birth_date",
     *                     description="Type the date of your birth",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="nationality",
     *                     description="Type the nationality",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="pasport_id",
     *                     description="Type the pasport id",
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

    public function updatePersonal(UpdatePesonalInfoRequest $request, PersonalInfo $personalInfo)
    {
        try {
            $request->validated();
            $personalInfo->update([
                'user_id'=>$request->user_id,
                'pasport_id'=>$request->pasport_id,
                'full_name'=>$request->full_name,
                'gender'=>$request->gender,
                'email'=>$request->email,
                'birth_date'=>$request->birth_date,
                'nationality'=>$request->nationality,
                'phone'=>$request->phone,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'personal updated successfully',
                'personal' => $personalInfo,
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
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/personal/{personalInfo}/delete",
     *     tags={"Personal Info"},
     *     summary="Deletes a personal",
     *     operationId="destroyPersonal",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="personal",
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
     *         description="Invalid personal supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="personal not found"
     *     ),
     *  )
     */

    public function destroyPersonal(PersonalInfo $personalInfo)
    {
        try {
            $personalInfo->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Personal deleted successfully',
                'personal' => $personalInfo,
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
