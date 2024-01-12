<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Education;
use App\Models\Fillial;
use App\Models\Pasport;
use App\Models\PersonalInfo;
use App\Models\Region;
use App\Models\Training;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;

class AllDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/allData",
     *     tags={"AllData"},
     *     summary="Get all data ",
     *     description="Via this link All datas come",
     *     operationId="allData",
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

    public function allData()
    {
        $avatar = Avatar::all();
        $education = Education::all();
        $fillial = Fillial::all();
        $personalInfo = PersonalInfo::all();
        $pasport = Pasport::all();
        $user = User::all();
        $work = Work::all();
        $training = Training::all();
        $region = Region::all();
        return response()->json([
            'status' => 'success',
            'message' => 'All data',
            'avatar' => $avatar,
            'education'=>$education,
            'fillial'=>$fillial,
            'personalInfo'=>$personalInfo,
            'pasport'=>$pasport,
            'user' =>$user,
            'work'=>$work,
            'training'=>$training,
            'region' => $region
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *     path="/api/allData/{id}",
     *     tags={"AllData"},
     *     summary="Get one data from Direction database",
     *     description="Via this link a Direction`s data comes to show",
     *     operationId="showAllData",
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
     *         description="ID for all data",
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

    public function showAllData($id)
    {
        $user_data = User::find($id);
        $user_of_region = Region::find(Education::where('user_id', $id)->first()->region_id);
        
        $workRegion = Region::find(Work::where('user_id', $id)->first()->region_id);
        $trainingRegion = Region::find(Training::where('user_id', $id)->first()->region_id);
        return response()->json([
            'edicationR'=>$user_of_region,
            'workRegion'=>$workRegion,
            'trainingRegion'=>$trainingRegion,
           
            'user_personal_info'=> $user_data->personalInfo,
            'user_pasport' => $user_data->pasport,
            'user_education' => $user_data->education,
            'user_fillial' => $user_data->fillial,
            'user_work' => $user_data->work,
            'user_training' => $user_data->training,
            'user_avatar' => $user_data->avatar,
            'user_userPdf' => $user_data->userPdf,
            'user_directions' => $user_data->directions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
