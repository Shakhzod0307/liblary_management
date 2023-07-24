<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AuthController;

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
// Login and registration routes
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'userlogin'])->name('userlogin');

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register/user',[AuthController::class, 'userregister'])->name('userregister');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

//Profile route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/profiles',[AuthController::class, 'profile'])->name('profile');
    Route::get('/profile/settings',[AuthController::class, 'settings'])->name('profilesettings');
    Route::post('/profile/update',[AuthController::class, 'update'])->name('profileupdate');

});

// Dashboard routes
Route::get('/',[BookController::class, 'index'])->name('books'); 
Route::get('/authors',[BookController::class, 'authors'])->name('authors');
Route::get('/sections',[SectionController::class, 'index'])->name('sections');
Route::get('/publishers',[BookController::class, 'publisher'])->name('publishers');
Route::get('/settings',[BookController::class, 'settings'])->name('settings');
Route::get('/book/{id}',[BookController::class, 'show'])->name('bookview');

// Author routes
Route::group(['middleware'=>'auth'],function(){
    Route::get('/author/edit/{id}',[BookController::class, 'editauthor'])->name('editauthor');
    Route::post('/author/edit/{id}',[BookController::class, 'updateauthor'])->name('updateauthor');
    Route::get('/author/delete/{id}',[BookController::class, 'deleteauthor'])->name('deleteauthor');
});


// Publisher routes
Route::group(['middleware'=>'auth'],function(){
    Route::get('/publisher/edit/{id}',[BookController::class, 'editpublisher'])->name('editpublisher');
    Route::post('/publisher/edit/{id}',[BookController::class, 'updatepublisher'])->name('updatepublisher');
    Route::get('/publisher/delete/{id}',[BookController::class, 'deletepublisher'])->name('deletepublisher');
});

// Settings route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/settings/edit/{id}',[BookController::class, 'editsettings'])->name('editsettings');
    Route::post('/settings/edit/{id}',[BookController::class, 'updatesettings'])->name('updatesettings');
    Route::get('/settings/delete/{id}',[BookController::class, 'deletesettings'])->name('deletesettings');
});

// Section routes

Route::get('/section/edit/{id}',[SectionController::class, 'editsection'])->name('editsection');
Route::post('/section/edit/{id}',[SectionController::class, 'updatesection'])->name('updatesection');
Route::get('/section/delete/{id}',[SectionController::class, 'deletesection'])->name('deletesection');









