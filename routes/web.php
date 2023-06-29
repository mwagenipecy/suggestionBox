<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterUserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();


Route::get('/home',function (){
    if(auth()->user()->role==1){return redirect('user_suggestion/home');
    } else if(auth()->user()->role==2){
        return redirect('admin/home');
    } else{return "no define path for you";}})->name('home');



// user registration



Route::post('user_register',[RegisterUserController::class,'store'])->name('user_register');



// route for admin start here

Route::prefix('admin')->group(function(){
       Route::get('home',function (){ return view('admin/home/dashboard.blade.php');})->name('admin-dashboard.blade.php');
});


// route for admin end here






//route for user start here
Route::prefix('user_suggestion')->group(function(){

       Route::get('home',function (){ return view('systemUser/home/dashboard');})->name('user-dashboard');




       // view my suggestions
      Route::get('my_suggestion',function(){  return view('systemUser/suggestionBox/viewMySuggestion');})->name('view_my_suggestions');




      // view other suggestion
    Route::get('other_suggestion', function(){ return view('systemUser/suggestionBox/viewOtherSuggestion');})->name('view_other_suggestion');




    // compose the suggestions

    Route::get('compose_new_suggestion',function(){ return view('systemUser/suggestionBox/composeSuggestion');})->name('compose_new_suggestion');


     // user normal profile
    Route::get('my_profile',[ProfileController::class,'index'])->name('user_profile');
    Route::post('profile/update',[ProfileController::class,'changePassword'])->name('update_user_profile');

    // delete acount
    Route::post('deleteAccount',[ProfileController::class,'deleteAccount'])->name('delete_user_account');


    // complete registration '
    Route::get('complete_registration_now',[RegisterUserController::class,'completeRegistrationPage'])->name('complete_registration_page');


});

//route for user end here
