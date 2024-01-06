<?php

use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnValue;
use App\Http\Controllers\CreateFormController;

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\UserTableController;

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

Route::get('welcome', function () {
    return view('welcome');
})->name("welcome")->middleware("auth");

//Auth

Route::get('/registration', [UserTableController::class, 'registration'])->name('registration');
Route::post('/registration', [UserTableController::class, 'post']);


Route::get('/login', [UserTableController::class, 'login'])->name('login');
Route::post("login" , [UserTableController::class, 'LoginPost']);

Route::post("/logout" , [UserTableController::class ,'__invoke'])->name("logout");



Route::get('/forget', [UserTableController::class, 'forget'])->name('forget');

Route::post('/password/update', [UserTableController::class,"updatePassword"])->name('password.update');

// -------start

Route::get("/post/create",[CreateFormController::class,"create"])->name("post.create")->middleware("auth");
Route::post("/post",[CreateFormController::class,"store"])->name("post.store");

Route::get("post/list",[CreateFormController::class,"index"])->name("list_item")->middleware("auth");
Route::get("post/{id}",[CreateFormController::class,"show"])->name("show_item")->middleware("auth");
Route::get("post/edit/{id}",[CreateFormController::class,"edit"])->name("edit_item");
Route::post("/post/{id}/update",[CreateFormController::class,"update"])->name("update-item");
Route::delete("/post/{id}",[CreateFormController::class,"destroy"])->name("post_destroy");