<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConsultantController;
use App\Http\Controllers\Controller;
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

/*Route::get('/welcome', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('front.index');
})->name('home');


/* Frontend */

Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/our-work', [Controller::class, 'our_work'])->name('our-work');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/clients', [Controller::class, 'clients'])->name('clients');


/* AdminPanel */

Route::middleware(['auth', 'admin'])->get('/admin', [AdminController::class, 'index'])->name('index');
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    /****************************** ADMIN USER ROUTES *****************************/
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users');
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/edit/{id}  ', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });
    });

    /****************************** ADMIN CONSULTANT ROUTES *****************************/
    Route::controller(ConsultantController::class)->group(function () {
        Route::get('/consultants', 'index')->name('consultants');
        Route::prefix('consultants')->name('consultants.')->group(function () {
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/edit/{id}  ', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });
    });

    /****************************** ADMIN CONSULTATIONS ROUTES *****************************/
    Route::controller(ConsultationController::class)->group(function () {
        Route::get('/consultations', 'index')->name('consultations');
        Route::get('/achieved_appointments', 'achieved')->name('consultations');
        Route::get('/unachieved_appointments', 'unachieved')->name('consultations');
        Route::prefix('consultations')->name('consultations.')->group(function () {
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/achieve_it/{id}', 'achieve_it')->name('achieve_it');
            Route::get('/edit/{id}  ', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });
    });

    /****************************** ADMIN MESSAGES ROUTES *****************************/
    Route::controller(MessageController::class)->group(function () {
        Route::get('/messages', 'index')->name('messages');
        Route::prefix('messages')->name('messages.')->group(function () {
            Route::get('/unread', 'unread')->name('unread');
            Route::get('/unreplied', 'unreplied')->name('unreplied');
            Route::get('/reply', 'reply')->name('reply');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/store/{id}', 'store')->name('store');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(callback: function () {

    Route::get('/dashboard', [\App\Http\Controllers\Front\UserController::class, 'load_consultation'])->name('dashboard');
    Route::get('/consultation-history', [\App\Http\Controllers\Front\UserController::class, 'consultation_history'])->name('consultation-history');
    Route::get('/new-consultation', [\App\Http\Controllers\Front\UserController::class, 'new_consultation'])->name('new-consultation');
    Route::post('/consultationstore', [\App\Http\Controllers\Front\UserController::class, 'consultationstore'])->name('consultationstore');
    Route::get('/consultationcancel/{id}', [\App\Http\Controllers\Front\UserController::class, 'consultationcancel'])->name('consultationcancel');

    Route::get('/messages', [\App\Http\Controllers\Front\UserController::class, 'messages'])->name('messages');
    Route::get('/new-message', [\App\Http\Controllers\Front\UserController::class, 'new_message'])->name('new-message');
    Route::post('/messagestore', [\App\Http\Controllers\Front\UserController::class, 'messagestore'])->name('messagestore');

    Route::get('/messages', function () {
        return view('messages');
    })->name('messages');
});
