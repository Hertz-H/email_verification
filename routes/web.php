<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPagController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\User\EducationController;
use App\Http\Controllers\User\ExperienceController;
use App\Http\Controllers\User\SkillController;
use App\Http\Controllers\User\ProfileController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 

/**----------------------
 *    front rootes
 *------------------------**/
Route::get('/home',[HomeController::class,"load"]);

Route::get('/jobs',[JobPagController::class,"load"]);
Route::get('/jobDetails',[JobPagController::class,"loadDetails"]);

Route::get('/companies',[CompanyController::class,"load"]);
Route::get('/services',[ServiceController::class,"load"]);

Route::get('/contact',[ContactController::class,"load"]);
Route::get('/about',[AboutController::class,"load"]);

Route::get('/signup',[UserController::class,"signup"]);
Route::post('/signup',[UserController::class,"register"])->name('signUser');

Route::get('/login',[UserController::class,"login"]);
Route::post('/login',[UserController::class,"doLogin"])->name('doLogin');

// Route::get('/update_service',[ServiceController::class,"updatePage"]);

 /**----------------------
  *    admin  operations
  *------------------------**/

Route::group(['middleware'=>'auth'],function(){
    
	Route::group(['middleware'=>'role:admin'],function(){
/**----------------------
 *    Users Routes
 *------------------------**/ 
Route::get('/list_users',[UserController::class,"list"]);      
Route::get('/add_user',[UserController::class,"loadAdd"]);
Route::post('/add_user',[UserController::class,"add"])->name('save_user');
Route::get('/activate_user/{id}/{active}',[UserController::class,"activate"]);
Route::get('/update_user/{id}',[UserController::class,"updatePage"]);
Route::post('/update_user',[UserController::class,"update"])->name('updateUser');
  /**----------------------
 *    Service Routes
 *------------------------**/ 
        Route::get('/list_services',[ServiceController::class,"list"]);
        Route::get('/add_service',[ServiceController::class,"loadAdd"]);
        Route::get('/update_service/{id}',[ServiceController::class,"updatePage"]);
        Route::post('/update_service',[ServiceController::class,"update"])->name('save_update');
        Route::get('/activate_service/{id}/{active}',[ServiceController::class,"activate"]);
        Route::post('/add_service',[ServiceController::class,"add"])->name('save_service');
  /**----------------------
 *    Ad Routes
 *------------------------**/      

        Route::post('/add_ad',[AdController::class,"add"])->name('save_ad');
        Route::get('/add_ad',[AdController::class,"loadAdd"]);
        Route::get('/list_ads',[AdController::class,"list"]);
        Route::get('/update_ad/{id}',[AdController::class,"updatePage"]);
        Route::post('/update_ad',[AdController::class,"update"])->name('updateAd');
        Route::get('/activate_ad/{id}/{active}',[AdController::class,"activate"]);
        
/**----------------------
 *    Company Routes
 *------------------------**/
        
        Route::post('/add_company',[ServiceController::class,"add"])->name('save_company');
        Route::get('/add_company',[CompanyController::class,"loadAdd"]);
        Route::post('/add_company',[CompanyController::class,"add"])->name('save_company');
        Route::get('/list_companies',[CompanyController::class,"list"]);
        Route::get('/update_company/{id}',[CompanyController::class,"updatePage"]);
        Route::post('/update_company',[CompanyController::class,"update"])->name('updateCompany');
        Route::get('/activate_company/{id}/{active}',[CompanyController::class,"activate"]);
        
/**----------------------
 *    Job  Routes
 *------------------------**/
        Route::get('/add_job',[JobPagController::class,"loadAdd"]);
        Route::post('/add_job',[JobPagController::class,"add"])->name('save_job');
        Route::get('/list_jobs',[JobPagController::class,"list"]);
        Route::get('/update_job/{id}',[JobPagController::class,"updatePage"]);
        Route::post('/update_job',[JobPagController::class,"update"])->name('updatejob');
        Route::get('/activate_job/{id}/{active}',[JobPagController::class,"activate"]);
  
	});
	
	Route::group(['middleware'=>'role:user'],function(){

/**----------------------
 *    Profile
 *------------------------**/

Route::get('/profile',[ProfileController::class,"list"]);
Route::get('/update_profile',[ProfileController::class,"updatePage"]);
Route::post('/update_profile',[ProfileController::class,"update"])->name('updateProfile');

/**----------------------
 * Education Routes
 *------------------------**/      

Route::post('/add_education',[EducationController::class,"add"])->name('save_edcation');
Route::get('/add_education',[EducationController::class,"loadAdd"]);
Route::get('/list_education',[EducationController::class,"list"]);
Route::get('/update_education/{id}',[EducationController::class,"updatePage"]);
Route::post('/update_education',[EducationController::class,"update"])->name('updateEducation');
Route::get('/activate_education/{id}/{active}',[EducationController::class,"activate"]);

/**----------------------
 *    Experience
 *------------------------**/
Route::post('/add_experience',[ExperienceController::class,"add"])->name('save_experience');
Route::get('/add_experience',[ExperienceController::class,"loadAdd"]);
Route::get('/list_experiences',[ExperienceController::class,"list"]);
Route::get('/update_experience/{id}',[ExperienceController::class,"updatePage"]);
Route::post('/update_experience',[ExperienceController::class,"update"])->name('updateExperience');
Route::get('/activate_experience/{id}/{active}',[ExperienceController::class,"activate"]);



/**----------------------
 *    Skill
 *------------------------**/
Route::post('/add_skill',[SkillController::class,"add"])->name('save_skill');
Route::get('/add_skill',[SkillController::class,"loadAdd"]);
Route::get('/list_skills',[SkillController::class,"list"]);
Route::get('/update_skill/{id}',[SkillController::class,"updatePage"]);
Route::post('/update_skill',[SkillController::class,"update"])->name('updateSkill');
Route::get('/activate_skill/{id}/{active}',[SkillController::class,"activate"]);

/**----------------------
 *    Contact
 *------------------------**/
Route::post('/add_contact',[ContactController::class,"add"])->name('save_contact');
Route::get('/add_contact',[ContactController::class,"loadAdd"]);
Route::get('/list_contacts',[ContactController::class,"list"]);
Route::get('/update_contact/{id}',[ContactController::class,"updatePage"]);
Route::post('/update_contact',[ContactController::class,"update"])->name('updateContact');
Route::get('/activate_contact/{id}/{active}',[ContactController::class,"activate"]);





  });

    /**----------------------
  *    Change password
  *------------------------**/
Route::get('/change-password', [HomeController::class, 'changePassword']);
Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update_password');


 /**----------------------
  *   log out
  *------------------------**/
Route::get('/logout',[UserController::class,'logout'])->name('logout');
	
});
Route::get('/verify_email/{token}',[UserController::class,"verifyEmail"]);




 
/**----------------------
 *    Forget Password
 *------------------------**/


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
// Route::get('/log',function(){
//     return view("auth.log_in");
// });

// Route::get('/log',function(){
//     return view("auth_2.log");
// });

// Route::get('/email',function(){
//     return view("auth.email");
// });
// Route::get('/reset',function(){
//     return view("auth.reset");
// });

// Route::get('/confirm',function(){
//     return view("auth.confirm");
// });



// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


