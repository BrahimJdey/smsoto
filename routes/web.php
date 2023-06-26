<?php

use Illuminate\Support\Facades\Route;

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

 

use App\Http\Controllers\GroupeController;
use App\Http\Controllers\smsmodelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\PlaySMSController;
use App\Http\Controllers\ReportsController;

Route::get('/', function () {
    return view('login');
});
 
 
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/sms', function () {
    return view('smsmodel.index');
})->name('sms');

 
//programmer un message
Route::get('/progsms', [PlaySMSController::class, 'progsms'])->name('progsms');
Route::get('/progsms/create', [PlaySMSController::class, 'create']);
Route::post('/items', [PlaySMSController::class, 'store']);
Route::get('/items/{id}', [PlaySMSController::class, 'show']);
Route::get('/items/{id}/edit', [PlaySMSController::class, 'edit']);
Route::put('/update/{id}', [PlaySMSController::class, 'update']);
Route::delete('/progsms/{id}', [PlaySMSController::class, 'destroy']);

//smsmodel
Route::get('/showData', [smsmodelController::class, 'showData'])->name('showData');
Route::get('/create', [smsmodelController::class, 'create']);
Route::post('/store', [smsmodelController::class, 'store'])->name('store');
 Route::delete('/destroy/{id}', [smsmodelController::class, 'destroy'])->name('destroy');

//---Raport----
////features/////
//featuresms
Route::get('/featuresms', [ReportsController::class, 'featuresms'])->name('featuresms'); 
//sandbox
Route::get('/sandbox', [ReportsController::class, 'sandbox'])->name('sandbox'); 
//My sent messages
Route::get('/smsenvoye', [ReportsController::class, 'smsenvoye'])->name('smsenvoye'); 

////myaccount////
//inbox
Route::get('/inbox', [MyaccountController::class, 'inbox'])->name('inbox');


Route::resource("/contact", ContactController::class);
Route::get('export', [ContactController::class, 'export'])->name('export');
Route::get('imp', [ContactController::class, 'imp'])->name('imp');
Route::post('import', [ContactController::class, 'import'])->name('import');
Route::resource("/groupe", GroupeController::class);
