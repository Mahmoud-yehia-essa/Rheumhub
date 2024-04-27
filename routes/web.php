<?php

use App\Models\Membership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SourcesController;
use App\Http\Controllers\SurveysController;
use App\Http\Controllers\JobPlaceController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\PoliciesController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\AppVersionController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\EventUsersController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\OffersCateController;
use App\Http\Controllers\OffersUserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhysiotherapyController;
use App\Http\Controllers\SurveysAnswerController;
use App\Http\Controllers\SurveysResultController;
use App\Http\Controllers\VolunteerUserController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\PhysiotherapyVideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});


Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.go.lgoin');


Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashBoard'])->name('admin.dashboard');

    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');


    Route::get("/admin/profile",[AdminController::class,'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');



    Route::get('/admin/all/users', [UserController::class, 'AllUsers'])->name('admin.all.users');
    Route::get('/admin/add/user', [UserController::class, 'AddUser'])->name('admin.add.user');
    Route::post('/admin/add/user', [UserController::class, 'AddUserStore'])->name('admin.add.user.store');
    Route::get('/admin/delete/user/{id}', [UserController::class, 'DeleteUser'])->name('admin.user.delete');
    Route::get('/admin/active/user/{id}', [UserController::class, 'ActiveUser'])->name('admin.user.active');
    Route::get('/admin/inactive/user/{id}', [UserController::class, 'InactiveUser'])->name('admin.user.inactive');
    Route::get('/admin/update/user/{id}', [UserController::class, 'UpdateUser'])->name('admin.user.update');
    Route::post('/admin/update/user/{id}', [UserController::class, 'UpdateUserStore'])->name('admin.upate.user.store');

    

    Route::get('/admin/all/events', [EventController::class, 'AllEvents'])->name('admin.all.events');
    Route::get('/admin/add/events', [EventController::class, 'AddEvents'])->name('admin.add.events');
    
    Route::get('/admin/update/event/{id}', [EventController::class, 'UpdateEvent'])->name('admin.event.update');
    Route::get('/admin/delete/event/{id}', [EventController::class, 'DeleteEvent'])->name('admin.event.delete');
    


Route::get('/admin/open/event/{id}', [EventController::class, 'OpenEvent'])->name('admin.event.open');
Route::get('/admin/close/event/{id}', [EventController ::class, 'CloseEvent'])->name('admin.event.close');
Route::post('/admin/add/event', [EventController::class, 'AddEventStore'])->name('admin.add.event.store');

Route::post('/admin/update/event/{id}', [EventController::class, 'UpdateEventStore'])->name('admin.update.event.store');


Route::get('/admin/users/event/{event_id}', [EventUsersController ::class, 'getUsersForEvents'])->name('admin.event.users');




Route::get('/admin/all/volunteer', [VolunteerController::class, 'Allvolunteer'])->name('admin.all.volunteer');
Route::get('/admin/add/volunteer', [VolunteerController::class, 'Addvolunteer'])->name('admin.add.volunteer');
Route::post('/admin/add/volunteer', [VolunteerController::class, 'AddvolunteerStore'])->name('admin.add.volunteer.store');
Route::get('/admin/update/volunteer/{id}', [VolunteerController::class, 'UpdateVolunteer'])->name('admin.volunteer.update');
Route::get('/admin/delete/volunteer/{id}', [VolunteerController::class, 'DeleteVolunteer'])->name('admin.volunteer.delete');
Route::post('/admin/update/volunteer/{id}', [VolunteerController::class, 'UpdateVolunteerStore'])->name('admin.update.volunteer.store');


Route::get('/admin/users/volunteer/{volunteer_id}', [VolunteerUserController ::class, 'getUsersForVolunteer'])->name('admin.Volunteer.users');




Route::get('/admin/all/membership', [MembershipController::class, 'Allmembership'])->name('admin.all.membership');
Route::get('/admin/add/membership', [MembershipController::class, 'Addmembership'])->name('admin.add.membership');
Route::post('/admin/add/membership', [MembershipController::class, 'AddmembershipStore'])->name('admin.add.membership.store');
Route::get('/admin/update/membership/{id}', [MembershipController::class, 'Updatemembership'])->name('admin.membership.update');
Route::get('/admin/delete/membership/{id}', [MembershipController::class, 'Deletemembership'])->name('admin.membership.delete');
Route::post('/admin/update/membership/{id}', [MembershipController::class, 'UpdatemembershipStore'])->name('admin.update.membership.store');



Route::get('/admin/all/jobTitle', [JobTitleController::class, 'AlljobTitle'])->name('admin.all.jobTitle');
Route::get('/admin/add/jobTitle', [JobTitleController::class, 'AddjobTitle'])->name('admin.add.jobTitle');
Route::post('/admin/add/jobTitle', [JobTitleController::class, 'AddjobTitleStore'])->name('admin.add.jobTitle.store');
Route::get('/admin/update/jobTitle/{id}', [JobTitleController::class, 'UpdatejobTitle'])->name('admin.jobTitle.update');
Route::get('/admin/delete/jobTitle/{id}', [JobTitleController::class, 'DeletejobTitle'])->name('admin.jobTitle.delete');
Route::post('/admin/update/jobTitle/{id}', [JobTitleController::class, 'UpdatejobTitleStore'])->name('admin.update.jobTitle.store');








Route::get('/admin/all/jobPlace', [JobPlaceController::class, 'AlljobPlace'])->name('admin.all.jobPlace');
Route::get('/admin/add/jobPlace', [JobPlaceController::class, 'AddjobPlace'])->name('admin.add.jobPlace');
Route::post('/admin/add/jobPlace', [JobPlaceController::class, 'AddjobPlaceStore'])->name('admin.add.jobPlace.store');
Route::get('/admin/update/jobPlace/{id}', [JobPlaceController::class, 'UpdatejobPlace'])->name('admin.jobPlace.update');
Route::get('/admin/delete/jobPlace/{id}', [JobPlaceController::class, 'DeletejobPlace'])->name('admin.jobPlace.delete');
Route::post('/admin/update/jobPlace/{id}', [JobPlaceController::class, 'UpdatejobPlaceStore'])->name('admin.update.jobPlace.store');



Route::get('/admin/all/eventType', [EventTypeController::class, 'AlleventType'])->name('admin.all.eventType');
Route::get('/admin/add/eventType', [EventTypeController::class, 'AddeventType'])->name('admin.add.eventType');
Route::post('/admin/add/eventType', [EventTypeController::class, 'AddeventTypeStore'])->name('admin.add.eventType.store');
Route::get('/admin/update/eventType/{id}', [EventTypeController::class, 'UpdateeventType'])->name('admin.eventType.update');
Route::get('/admin/delete/eventType/{id}', [EventTypeController::class, 'DeleteeventType'])->name('admin.eventType.delete');
Route::post('/admin/update/eventType/{id}', [EventTypeController::class, 'UpdateeventTypeStore'])->name('admin.update.eventType.store');





Route::get('/admin/send/notification/users', [NotificationController::class, 'UsersNotification'])->name('admin.add.notification.users');


//New
Route::post('/admin/send/notification/users', [NotificationController::class, 'sendNotificatioForUser'])->name('admin.add.notification.users.store');

Route::get('/admin/all/notification/users', [NotificationController::class, 'allNotification'])->name('admin.all.notification.users');


Route::post('/admin/send/notification/memberships', [NotificationController::class, 'sendNotificatioFormemberships'])->name('admin.add.notification.memberships.store');

Route::post('/admin/send/notification/jobTitle', [NotificationController::class, 'sendNotificatioForjobTitle'])->name('admin.add.notification.jobTitle.store');


Route::post('/admin/send/notification/jobPlace', [NotificationController::class, 'sendNotificatioForjobPlace'])->name('admin.add.notification.jobPlace.store');


Route::post('/admin/send/notification/eventType', [NotificationController::class, 'sendNotificatioForjobeventType'])->name('admin.add.notification.eventType.store');

Route::post('/admin/send/notification/all/type', [NotificationController::class, 'sendNotificatioForAllType'])->name('admin.add.notification.all.type.store');
Route::get('/admin/send/notification/all/type', [NotificationController::class, 'NotificatioForAllType'])->name('admin.add.notification.all.type');


Route::get('/admin/send/notification/memberships', [NotificationController::class, 'MembershipsNotification'])->name('admin.add.notification.memberships');
Route::get('/admin/send/notification/jobTitle', [NotificationController::class, 'jobTitleNotification'])->name('admin.add.notification.jobTitle');
Route::get('/admin/send/notification/jobPlace', [NotificationController::class, 'jobPlaceNotification'])->name('admin.add.notification.jobPlace');
Route::get('/admin/send/notification/event', [NotificationController::class, 'EventNotification'])->name('admin.add.notification.event');





Route::get('/admin/all/OffersCate', [OffersCateController::class, 'AllOffersCate'])->name('admin.all.OffersCate');
Route::get('/admin/add/OffersCate', [OffersCateController::class, 'AddOffersCate'])->name('admin.add.OffersCate');
Route::post('/admin/add/OffersCate', [OffersCateController::class, 'AddOffersCateStore'])->name('admin.add.OffersCate.store');
Route::get('/admin/update/OffersCate/{id}', [OffersCateController::class, 'UpdateOffersCate'])->name('admin.OffersCate.update');
Route::get('/admin/delete/OffersCate/{id}', [OffersCateController::class, 'DeleteOffersCate'])->name('admin.OffersCate.delete');
Route::post('/admin/update/OffersCate/{id}', [OffersCateController::class, 'UpdateOffersCateStore'])->name('admin.update.OffersCate.store');





Route::get('/admin/all/Offers', [OffersController::class, 'AllOffers'])->name('admin.all.Offers');
Route::get('/admin/add/Offers', [OffersController::class, 'AddOffers'])->name('admin.add.Offers');
Route::post('/admin/add/Offers', [OffersController::class, 'AddOffersStore'])->name('admin.add.Offers.store');
Route::get('/admin/update/Offers/{id}', [OffersController::class, 'UpdateOffers'])->name('admin.Offers.update');
Route::get('/admin/delete/Offers/{id}', [OffersController::class, 'DeleteOffers'])->name('admin.Offers.delete');
Route::post('/admin/update/Offers/{id}', [OffersController::class, 'UpdateOffersStore'])->name('admin.update.Offers.store');


Route::get('/admin/users/Offers/{event_id}', [OffersUserController ::class, 'getUsersForOffers'])->name('admin.Offers.users');





Route::get('/admin/all/Magazine', [MagazineController::class, 'AllMagazine'])->name('admin.all.Magazine');
Route::get('/admin/add/Magazine', [MagazineController::class, 'AddMagazine'])->name('admin.add.Magazine');
Route::post('/admin/add/Magazine', [MagazineController::class, 'AddMagazineStore'])->name('admin.add.Magazine.store');
Route::get('/admin/delete/Magazine/{id}', [MagazineController::class, 'DeleteMagazine'])->name('admin.Magazine.delete');
Route::get('/admin/update/Magazine/{id}', [MagazineController::class, 'UpdateMagazine'])->name('admin.Magazine.update');
Route::post('/admin/update/Magazine/{id}', [MagazineController::class, 'UpdateMagazineStore'])->name('admin.upate.Magazine.store');




Route::get('/admin/all/News', [NewsController::class, 'AllNews'])->name('admin.all.News');
Route::get('/admin/add/News', [NewsController::class, 'AddNews'])->name('admin.add.News');
Route::post('/admin/add/News', [NewsController::class, 'AddNewsStore'])->name('admin.add.News.store');
Route::get('/admin/update/News/{id}', [NewsController::class, 'UpdateNews'])->name('admin.News.update');
Route::get('/admin/delete/News/{id}', [NewsController::class, 'DeleteNews'])->name('admin.News.delete');
Route::post('/admin/update/News/{id}', [NewsController::class, 'UpdateNewsStore'])->name('admin.update.News.store');





Route::get('/admin/all/Video', [VideoController::class, 'AllVideo'])->name('admin.all.Video');
Route::get('/admin/add/Video', [VideoController::class, 'AddVideo'])->name('admin.add.Video');
Route::post('/admin/add/Video', [VideoController::class, 'AddVideoStore'])->name('admin.add.Video.store');
Route::get('/admin/update/Video/{id}', [VideoController::class, 'UpdateVideo'])->name('admin.Video.update');
Route::get('/admin/delete/Video/{id}', [VideoController::class, 'DeleteVideo'])->name('admin.Video.delete');
Route::post('/admin/update/Video/{id}', [VideoController::class, 'UpdateVideoStore'])->name('admin.update.Video.store');







Route::get('/admin/all/Physiotherapy', [PhysiotherapyController::class, 'AllPhysiotherapy'])->name('admin.all.Physiotherapy');
Route::get('/admin/add/Physiotherapy', [PhysiotherapyController::class, 'AddPhysiotherapy'])->name('admin.add.Physiotherapy');
Route::post('/admin/add/Physiotherapy', [PhysiotherapyController::class, 'AddPhysiotherapyStore'])->name('admin.add.Physiotherapy.store');
Route::get('/admin/update/Physiotherapy/{id}', [PhysiotherapyController::class, 'UpdatePhysiotherapy'])->name('admin.Physiotherapy.update');
Route::get('/admin/delete/Physiotherapy/{id}', [PhysiotherapyController::class, 'DeletePhysiotherapy'])->name('admin.Physiotherapy.delete');
Route::post('/admin/update/Physiotherapy/{id}', [PhysiotherapyController::class, 'UpdatePhysiotherapyStore'])->name('admin.update.Physiotherapy.store');






Route::get('/admin/all/PhysiotherapyVideo', [PhysiotherapyVideoController::class, 'AllPhysiotherapyVideo'])->name('admin.all.PhysiotherapyVideo');
Route::get('/admin/add/PhysiotherapyVideo', [PhysiotherapyVideoController::class, 'AddPhysiotherapyVideo'])->name('admin.add.PhysiotherapyVideo');
Route::post('/admin/add/PhysiotherapyVideo', [PhysiotherapyVideoController::class, 'AddPhysiotherapyVideoStore'])->name('admin.add.PhysiotherapyVideo.store');
Route::get('/admin/update/PhysiotherapyVideo/{id}', [PhysiotherapyVideoController::class, 'UpdatePhysiotherapyVideo'])->name('admin.PhysiotherapyVideo.update');
Route::get('/admin/delete/PhysiotherapyVideo/{id}', [PhysiotherapyVideoController::class, 'DeletePhysiotherapyVideo'])->name('admin.PhysiotherapyVideo.delete');
Route::post('/admin/update/PhysiotherapyVideo/{id}', [PhysiotherapyVideoController::class, 'UpdatePhysiotherapyVideoStore'])->name('admin.update.PhysiotherapyVideo.store');






Route::get('/admin/all/Surveys/Questions', [SurveysController::class, 'AllSurveysQuestions'])->name('admin.all.Surveys.Questions');
Route::get('/admin/add/Surveys/Questions', [SurveysController::class, 'AddSurveysQuestions'])->name('admin.add.Surveys.Questions');
Route::post('/admin/add/Surveys/Questions', [SurveysController::class, 'AddSurveysQuestionsStore'])->name('admin.add.Surveys.Questions.store');
Route::get('/admin/update/Surveys/Questions/{id}', [SurveysController::class, 'UpdateSurveysQuestions'])->name('admin.Surveys.Questions.update');
Route::get('/admin/delete/Surveys/Questions/{id}', [SurveysController::class, 'DeleteSurveysQuestions'])->name('admin.Surveys.Questions.delete');
Route::post('/admin/update/Surveys/Questions/{id}', [SurveysController::class, 'UpdateSurveysQuestionsStore'])->name('admin.update.Surveys.Questions.store');


Route::get('/admin/all/Surveys/Questions/users/{id}', [SurveysController::class, 'AllSurveysQuestionsUseers'])->name('admin.all.Surveys.Questions.Users');






Route::get('/admin/all/SurveysAnswer', [SurveysAnswerController::class, 'AllSurveysAnswer'])->name('admin.all.SurveysAnswer');
Route::get('/admin/add/SurveysAnswer', [SurveysAnswerController::class, 'AddSurveysAnswer'])->name('admin.add.SurveysAnswer');
Route::post('/admin/add/SurveysAnswer', [SurveysAnswerController::class, 'AddSurveysAnswerStore'])->name('admin.add.SurveysAnswer.store');
Route::get('/admin/update/SurveysAnswer/{id}', [SurveysAnswerController::class, 'UpdateSurveysAnswer'])->name('admin.SurveysAnswer.update');
Route::get('/admin/delete/SurveysAnswer/{id}', [SurveysAnswerController::class, 'DeleteSurveysAnswer'])->name('admin.SurveysAnswer.delete');
Route::post('/admin/update/SurveysAnswer/{id}', [SurveysAnswerController::class, 'UpdateSurveysAnswerStore'])->name('admin.update.SurveysAnswer.store');



//SurveysResultController


Route::get('/admin/all/SurveysResult/{id}', [SurveysResultController::class, 'SurveysResult'])->name('admin.all.SurveysResult');



// More

// About
Route::get('/admin/add/about', [AboutController::class, 'AddAbout'])->name('admin.add.About');
Route::post('/admin/update/about', [AboutController::class, 'UpdateAboutStore'])->name('admin.update.About.store');

//Contact
Route::get('/admin/add/contact', [ContactController::class, 'AddContact'])->name('admin.add.Contact');
Route::post('/admin/update/contact', [ContactController::class, 'UpdateContactStore'])->name('admin.update.Contact.store');



//Policies
Route::get('/admin/add/policies', [PoliciesController::class, 'AddPolicies'])->name('admin.add.Policies');
Route::post('/admin/update/pontact', [PoliciesController::class, 'UpdatePoliciesStore'])->name('admin.update.Policies.store');

//Assessment
Route::get('/admin/add/Assessment', [AssessmentController::class, 'AddAssessment'])->name('admin.add.Assessment');
Route::post('/admin/update/Assessment', [AssessmentController::class, 'UpdateAssessmentStore'])->name('admin.update.Assessment.store');



//Assessment
Route::get('/admin/add/Sources', [SourcesController::class, 'AddSources'])->name('admin.add.Sources');
Route::post('/admin/update/Sources', [SourcesController::class, 'UpdateSourcesStore'])->name('admin.update.Sources.store');



/// Version
Route::get('/admin/add/version', [AppVersionController::class, 'AddVersion'])->name('admin.add.Version');
Route::post('/admin/update/version', [AppVersionController::class, 'UpdateVersionStore'])->name('admin.update.Version.store');




});   





Route::middleware(['auth','role:user'])->group(function(){

    Route::get('/user/dashboard',[UserController::class,'UserDashBoard'])->name('user.dashboard');


});




/// get  Search Form for users

Route::get('/appplication/home',[ApplicationFormController::class,'viewApplication'])->name('view-application');





require __DIR__.'/auth.php';
