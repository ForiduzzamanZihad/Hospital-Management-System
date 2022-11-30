<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
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

Route::get('admin/add_doctors', [DoctorController::class, 'addDoctor']);
Route::get('admin/doctors',[DoctorController::class, 'index']);

Route::get('admin/add_service', [ServiceController::class, 'addService']);
Route::get('admin/services', [ServiceController::class, 'index']);

Route::get('admin/add_patient', [PatientController::class, 'addPatient']);
Route::get('admin/patients', [PatientController::class, 'index']);

Route::resource('appointment','AppointmentController');
    
Route::get('/admin','AdminController@index')->name('admin_index');