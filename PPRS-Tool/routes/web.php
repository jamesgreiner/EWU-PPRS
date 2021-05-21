<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultipleFileUploadContoller;

//landing page of the application
Route::get('/', function () {
    return view('home');
});

//for viewing information about the Palouse Prairie Restoration Site
Route::get('/project-info', function () {
    return view('information');
});

//for seeing all current projects that have been stored in the database
Route::get('/projects', [EntryController::class, 'index'] );

//for viewing frequently asked questions
Route::get('/faq', function () {
    return view('faq');
});

//for viewing data in the database
Route::get('/data', function () {
    return view('data');
});

//for contact information regarding different aspects of the project
Route::get('/contact', function () {
    return view('contact');
});

//routing to user dashboard if auth verified
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//grouping of routes that need auth to grant access user/admin
Route::group(['middleware' => 'auth'], function() {
    
    
    //route for admins to view users registed
    Route::resource('users',\App\Http\Controllers\UserController::class);

    //for entering data into the database: protected behind auth for researchers
    Route::get('/entry-form', [EntryController::class, 'create']);

    //for saving the form data to the database
    Route::post('/entries', [EntryController::class, 'store']);


    //routes for file upload
    Route::get('files-upload', [MultipleFileUploadContoller::class, 'index']);
    Route::post('save-multiple-files', [MultipleFileUploadContoller::class, 'store']);
    
    Route::post('/entry-files', function () {
        return view('entry-files');
    });
});

