<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\SurveysController;
use App\Http\Controllers\JobPlaceController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\EventUsersController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\OffersUserController;
use App\Http\Controllers\UserAnswerController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhysiotherapyController;
use App\Http\Controllers\SurveysAnswerController;
use App\Http\Controllers\VolunteerUserController;
use App\Http\Controllers\PhysiotherapyVideoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Route::post('/login',[User::class,'LoginApi']);




Route::post('/login', [UserController::class, 'loginApi']);
Route::get('/user/login/{phone}', [UserController::class, 'userByPhoneNumber']);


Route::post('update/user/{id}', [UserController::class, 'updateUserById']);




Route::post('/create/user', [UserController::class, 'createUserApi']);


/// update token for user by phone number

Route::post('/user/update/token/{phone}', [UserController::class, 'userUpdateToken']);



/// Upload image

Route::post('/upload-image', [UserController::class, 'uploadImageApi']);



//Route::post('/login', [UserController::class, 'loginApi']);



//Route::post('/create-post', [PostController::class, 'storeNewPostApi'])->middleware('auth:sanctum');
//Route::delete('/delete-post/{post}', [PostController::class, 'deleteApi'])->middleware('auth:sanctum', 'can:delete,post');




// get all Jop title 

Route::get('/all/job/title', [JobTitleController::class, 'allJobApi']);
Route::get('/all/job/place', [JobPlaceController::class, 'allJobPlaceApi']);



Route::get('/all/memberships', [MembershipController::class, 'allmembershipsApi']);




/// get all news

Route::get('/all/news/{number}', [NewsController::class, 'allNewsApi']);


/// get all Surveys

Route::get('/all/surveys', [SurveysController::class, 'allSurveysApi']);


/// get all Surveys Answer

Route::get('/all/surveys/answer/{qu_id}', [SurveysAnswerController::class, 'allSurveysAnswerApi']);
Route::get('/answer/increment/{id}', [SurveysAnswerController::class, 'increasCount']);






Route::post('/userAnswer', [UserAnswerController::class, 'UsersAnswer']);

//Route::post('/check/userAnswer', [UserAnswerController::class, 'UsersAnswerCheck']);

Route::post('/check/userAnswer', [UserAnswerController::class, 'UsersAnswerCheck']);



///ActivitiesEvents


Route::get('/all/activities/events/{membership_id}', [EventController::class, 'allActivitiesBymembershipId']);
Route::get('/all/activities/events/limited/{membership_id}', [EventController::class, 'allActivitiesBymembershipIdLimited']);





Route::post('/apply/event', [EventUsersController::class, 'applyEvent']);


Route::post('/check/eventApply', [EventUsersController::class, 'CheckEventApply']);



/// Magazine Api

Route::get('/magazine/all', [MagazineController::class, 'allMagazineApi']);
Route::get('/magazine/all/limited', [MagazineController::class, 'allMagazineLimitedApi']);




//offers

Route::get('/offers/all', [OffersController::class, 'allOffersApi']);

Route::get('/offers/all/limited', [OffersController::class, 'allOffersApiLimited']);


Route::post('/apply/offers', [OffersUserController::class, 'applyoffers']);
Route::post('/check/offersApply', [OffersUserController::class, 'CheckoffersApply']);




/// Volunteer
Route::get('/Volunteer/all', [VolunteerController::class, 'allOVolunteerWorksApi']);

Route::post('/apply/Volunteer', [VolunteerUserController::class, 'applyVolunteer']);

Route::post('/check/VolunteerApply', [VolunteerUserController::class, 'CheckVolunteerApply']);


///

Route::get('/Physiotherapy/all', [PhysiotherapyController::class, 'PhysiotherapyCateApi']);

Route::get('/PhysiotherapyVideo/all/{id}', [PhysiotherapyVideoController::class, 'allPhysiotherapyVideoApi']);
///


Route::get('/video/all', [VideoController::class, 'allVideoapi']);



Route::get('/html/all/{type}', [HtmlController::class, 'getHtml']);



/// get Notification by userId,


Route::get('/notification/all/{user_id}', [NotificationController::class, 'allNotificationForUserId']);



Route::post('/notification/update/view/{notification_id}', [NotificationController::class, 'updateNotificationUserView']);



Route::get('/notification/clear/all/{user_id}', [NotificationController::class, 'clearAllNotificationForUserId']);




Route::post('/notification/update/all/view/{user_id}', [NotificationController::class, 'updateNotificationUserViewByUserId']);



