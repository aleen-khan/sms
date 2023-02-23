<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;

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
   return view('login');
});

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/add-group', [GroupController::class, 'addGroup'])->name('add.group');
    Route::post('/add-group', [GroupController::class, 'store'])->name('add.group');
    Route::get('/manage-group', [GroupController::class, 'manageGroup'])->name('manage.group');
    Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('edit');
    Route::post('/update-group', [GroupController::class, 'updateGroup'])->name('update.group');
    Route::get('/delete/{id}', [GroupController::class, 'delete'])->name('delete');

    Route::get('/service', [ServiceController::class, 'sendSms'])->name('service');
    Route::post('/send-sms', [ServiceController::class, 'store'])->name('send-sms');
    Route::get('/service-history', [ServiceController::class, 'serviceHistory'])->name('service.history');

    Route::get('/add-member', [MemberController::class, 'addMember'])->name('add.member');
    Route::get('/manage-member', [MemberController::class, 'manageMember'])->name('manage.member');
    Route::post('/add-member', [MemberController::class, 'store'])->name('add.member');
    Route::get('/edit-member/{id}', [MemberController::class, 'editMember'])->name('edit.member');
    Route::post('/update-member', [MemberController::class, 'updateMember'])->name('update.member');
    Route::get('/delete-member/{id}', [MemberController::class, 'deleteMember'])->name('delete.member');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



