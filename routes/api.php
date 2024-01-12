<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FillialController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\EvaluateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware("localization")->group(function () {
    Route::controller(\App\Http\Controllers\PasportController::class)->group(function (){
        Route::get('/pasport', 'pasport');
        Route::get('/pasport/{pasport}', 'showPasport');
        Route::post('/pasport', 'storePasport');
        Route::put('/pasport/{pasport}/update', 'updatePasport');
        Route::delete('/pasport/{pasport}/delete', 'destroyPasport');
    });
    Route::controller(DirectionController::class)->group(function (){
        Route::get('/direction', 'direction');
        Route::get('/direction/{direction}', 'showDirection');
        Route::post('/direction', 'storeDirection');
        Route::put('/direction/{direction}/update', 'updateDirection');
        Route::delete('/direction/{id}/delete', 'destroyDirection');
    });
    Route::controller(\App\Http\Controllers\AvatarController::class)->group(function (){
        Route::get('/avatar', 'avatar');
        Route::get('/avatar/{avatar}', 'showAvatar');
        Route::post('/avatar', 'storeAvatar');
        Route::put('/avatar/{avatar}/update', 'updateAvatar');
        Route::delete('/avatar/{id}/delete', 'destroyAvatar');
    });
    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'login');
        Route::post('/register', 'register');
        Route::post('/logout', 'logout');
        Route::post('/refresh', 'refresh');
    });
    Route::controller(\App\Http\Controllers\EducationController::class)->group(function (){
        Route::get('/education', 'education');
        Route::get('/education/{education}', 'showEducation');
        Route::post('/education', 'storeEducation');
        Route::put('/education/{education}/update', 'updateEducation');
        Route::delete('/education/{education}/delete', 'destroyEducation');
    });

    Route::controller(\App\Http\Controllers\CheckController::class)->group(function (){
        Route::get('/check', 'check');
        Route::get('/check/{check}', 'showCheck');
        Route::post('/check', 'storeCheck');
        Route::post('/check/{check}/update', 'updateCheck');
        Route::delete('/check/{check}/delete', 'destroyCheck');
    });

    Route::controller(FillialController::class)->group(function(){
        Route::get('filial', 'filials');
    });

    Route::controller(PersonalInfoController::class)->group(function (){
        Route::get('/personal', 'personal');
        Route::get('/personal/{personalInfo}', 'showPersonal');
        Route::post('/personal', 'storePersonal');
        Route::put('/personal/{personalInfo}/update', 'updatePersonal');
        Route::delete('/personal/{personalInfo}/delete', 'destroyPersonal');
    });

    Route::controller(\App\Http\Controllers\RegionController::class)->group(function (){
        Route::get('region', 'region');
    });

    Route::controller(\App\Http\Controllers\TrainingController::class)->group(function (){
        Route::get('/training', 'training');
        Route::post('/training', 'storeTraining');
        Route::get('/training/{training}', 'showTraining');
        Route::put('/training/{training}/update', 'updateTraining');
        Route::delete('/training/{training}/delete', 'destroyTraining');
    });

    Route::controller(\App\Http\Controllers\WorkController::class)->group(function (){
        Route::get('work', 'work');
        Route::get('work/{work}', 'showWork');
        Route::post('work', 'storeWork');
        Route::put('work/{work}/update', 'updateWork');
        Route::delete('work/{work}/delete', 'destroyWork');
    });

    Route::controller(\App\Http\Controllers\AvatarController::class)->group(function (){
        Route::get('/avatar', 'avatar');
        Route::get('/avatar/{avatar}', 'showAvatar');
        Route::post('/avatar', 'storeAvatar');
        Route::put('/avatar/{avatar}/update', 'updateAvatar');
        Route::delete('/avatar/{id}/delete', 'destroyAvatar');
    });

    Route::controller(\App\Http\Controllers\DirectionCategoryController::class)->group(function (){
        Route::get('directionCategory', 'direction_category');
    });

    Route::controller(\App\Http\Controllers\AllDataController::class)->group(function (){
        Route::get('/allData', 'allData');
        Route::get('/allData/{id}', 'showAllData');
    });

    Route::controller(\App\Http\Controllers\UserPdfController::class)->group(function (){
        Route::get('userPdf', 'user_pdf');
        Route::get('userPdf/{userPdf}', 'showUserPdf');
        Route::post('userPdf', 'storeUserPdf');
        Route::put('userPdf/{userPdf}/update', 'updateUserPdf');
        Route::delete('userPdf/{id}/delete', 'destroyUserPdf');
    });
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);

    Route::get('/reset-password', [AuthController::class, 'resetPasswordLoad']);
    Route::post('/reset-password', [AuthController::class, 'resetPassword']);

    Route::controller(EvaluateController::class)->group(function (){
        Route::get('/evaluate/{user_id}', 'evaluate');
        Route::get('/direction_user/{direction_id}', 'countDirectionUser');
        Route::get('/direct/{direction_id}', 'directionByUserId');
    });

    Route::controller(\App\Http\Controllers\CheckUserController::class)->group(function (){
        Route::get('/checkUser', 'checkUser');
        Route::get('/checkUser/{checkUser}', 'showCheckUser');
        Route::post('/checkUser', 'storeCheckUser');
        Route::put('/checkUser/{checkUser}/update', 'updateCheckUser');
        Route::delete('/checkUser/{checkUser}/delete', 'destroyCheckUser');
    });
});

Route::controller(\App\Http\Controllers\UniversityController::class)->group(function (){
    Route::get('/university', 'university');
    Route::get('/university/{university}', 'showUniversity');
    Route::post('/university', 'storeUniversity');
    Route::put('/university/{university}/update', 'updateUniversity');
    Route::delete('/university/{university}/delete', 'destroyUniversity');
});

Route::controller(\App\Http\Controllers\DistrictEducationController::class)->group(function (){
    Route::get('/district', 'districtEducation');
    Route::get('/district/{districtEducation}', 'showDistrictEducation');
    Route::post('/district', 'storeDistrictEducation');
    Route::put('/district/{districtEducation}/update', 'updateDistrictEducation');
    Route::delete('/district/{districtEducation}/delete', 'destroyDistrictEducation');
});


