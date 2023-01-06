<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\MemberInfoController;
use App\Http\Controllers\PersonalInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('index');
})->name('home');
/* About Us */
Route::get('/what-we-do', function () {return view('what_we_do');})->name('what-we-do');
Route::get('/education', function () { return view('education');})->name('education');
Route::get('/training-and-employment', function () { return view('training-and-employment');})->name('training-and-employment');
Route::get('/enterprise', function () { return view('enterprise');})->name('enterprise');
Route::get('/mental-health-and-wellbeing', function () { return view('mental-health-and-wellbeing');})->name('mental-health-and-wellbeing');
Route::get('/staff', function () { return view('staff');})->name('staff');
Route::get('/mission-objectives', function () { return view('mission_objectives');})->name('mission-objectives');

//Route::get('/partnerships', function () { return view('partnerships');})->name('partnerships');
Route::get('/news', function () { return view('news');})->name('news');
/*courses*/
Route::get('/creative', function () { return view('creative');})->name('creative');
Route::get('/creative-media-production', function () { return view('creative-media-production');})->name('creative-media-production');
Route::get('/counselling', function () { return view('counselling');})->name('counselling');
Route::get('/academic', function () { return view('academic');})->name('academic');
Route::get('/the-employability-workplace-skills-programme', function () { return view('the-employability-workplace-skills-programme');})->name('the-employability-workplace-skills-programme');
Route::get('/business-and-enterprise-skills-programme', function () { return view('business-and-enterprise-skills-programme');})->name('business-and-enterprise-skills-programme');
Route::get('/elearning', function () { return view('elearning');})->name('elearning');
Route::get('/trade', function () { return view('trade');})->name('trade');

Route::get('/our-impact', function () { return view('our_impact');})->name('our-impact');

/*support-us*/
Route::get('/supports-us', function () { return view('supports-us');})->name('supports-us');
Route::get('/volunteer', function () { return view('volunteer');})->name('volunteer');
Route::get('/support-our-work', function () { return view('support-our-work');})->name('support-our-work');
Route::get('/fundraise-for-us', function () { return view('fundraise-for-us');})->name('fundraise-for-us');
Route::get('/corporate-partnerships', function () { return view('corporate-partnerships');})->name('corporate-partnerships');

/*contact-us*/
Route::get('/contact-us', function () { return view('contact_us');})->name('contact-us');
Route::post('/contactForm', [CommonController::class, 'contactForm']);

Route::get('/donate', function () { return view('donate');})->name('donate');
Route::get('/become-a-member', function () { return view('become_member');})->name('become-a-member');

/*blogs*/
Route::get('/the-film-production-workshops', function () { return view('the-film-production-workshops');})->name('the-film-production-workshops');
Route::get('/the-money-management-programme', function () { return view('the-money-management-programme');})->name('the-money-management-programme');
Route::get('/crowd-funding-campaign', function () { return view('crowd-funding-campaign');})->name('crowd-funding-campaign');

/*mail section*/
Route::post('/mailForm', [CommonController::class, 'mailForm']);




/*login*/
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'register'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [RegisterController::class, 'login'])->middleware('guest');
Route::get('/logout', [RegisterController::class, 'logout'])->middleware('auth');

/*PersonalInfo*/
Route::get('/personal', [PersonalInfoController::class, 'index']);
Route::post('/personal',[PersonalInfoController::class, 'store']);
Route::get('/edit',[PersonalInfoController::class, 'edit']);
Route::put('/edit',[PersonalInfoController::class, 'update']);
Route::get('/myaccount', [PersonalInfoController::class, 'account']);

/*MemberInfo*/
Route::get('/member', [MemberInfoController::class, 'index']);
Route::post('/member', [MemberInfoController::class, 'store']);

