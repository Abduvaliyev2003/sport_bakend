<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Models\Education;
use App\Models\Pasport;
use App\Http\Traits\LocaleTrait;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EducationController extends Controller
{

    use LocaleTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/education",
     *     tags={"Education"},
     *     summary="Get all data from Education database",
     *     description="Via this link All Education` datas come",
     *     operationId="education",
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

    public function education()
    {
        try {
            $educations = Education::all();
            return response()->json([
                'status' =>  __('Success'),
                'educations' => $educations,
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
     *     path="/api/education",
     *     tags={"Education"},
     *     summary="Register a education",
     *     operationId="storeEducation",

     *      @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="region_id",
     *                     description="Type your district education id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="enter_date",
     *                     description="Type your enter date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="end_date",
     *                     description="Type your end date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="education_name",
     *                     description="Type your end date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="specialization",
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

    public function storeEducation(StoreEducationRequest $request)
    {
        try {
            $request->validated();
            $education = new Education;
            $education['education_name_uz'] = $request->education_name;
            $education['specialization_uz'] = $request->specialization;
            $education['user_id'] = $request->user_id;
            $education['region_id'] = $request->region_id;
            $education['enter_date'] = $request->enter_date;
            $education['end_date'] = $request->end_date;
            $education->save();

            return response()->json([
                'status' => __('Success'),
                'message' => __('Data created successfully'),
                'education' => $education,
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
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Get(
     *     path="/api/education/{education}",
     *     tags={"Education"},
     *     summary="Get one data from Education database",
     *     description="Via this link a Education`s data comes to show",
     *     operationId="showEducation",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="education",
     *         in="path",
     *         description="ID for education data",
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

    public function showEducation(Education $education)
    {
        try {
            return response()->json([
                'status' => 'success',
                'education' => $education,
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
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Put(
     *     path="/api/education/{education}/update",
     *     tags={"Education"},
     *     summary="Updated",
     *     description="Update this education",
     *     operationId="updateEducation",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="education",
     *         in="path",
     *         description="education that to be updated",
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
     *                     property="region_id",
     *                     description="Type your region id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="user_id",
     *                     description="Type user id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="enter_date",
     *                     description="Type your enter date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="end_date",
     *                     description="Type your end date",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="education_name",
     *                     description="Type your education name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="specialization",
     *                     description="Type your specialization",
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

    public function updateEducation(UpdateEducationRequest $request, Education $education)
    {
        try {
            $request->validated();
            $education->update([
                'region_id'=>$request->region_id,
                'user_id'=>$request->user_id,
                'enter_date'=>$request->enter_date,
                'end_date'=>$request->end_date,
                'education_name'=>$request->education_name,
                'specialization'=>$request->specialization
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Education updated successfully',
                'education' => $education,
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
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Delete(
     *     path="/api/education/{education}/delete",
     *     tags={"Education"},
     *     summary="Deletes a education",
     *     operationId="destroyEducation",
     *     @OA\Parameter(
     *         name="Accept-Language",
     *         in="header",
     *         description="Set language parameter by typing uz, ru, en",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="education",
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

    public function destroyEducation(Education $education)
    {
        try {
            $education->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Education deleted successfully',
                'education' => $education,
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
