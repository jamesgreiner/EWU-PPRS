<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;

//landing page of the application
Route::get('/', function () {
    return view('home');
});

//for viewing information about the Palouse Prairie Restoration Site
Route::get('/project-info', function () {
    return view('information');
});

//for seeing all current projects that have been stored in the database
Route::get('/projects', function () {
    return view('research');
});

//for viewing frequently asked questions
Route::get('/faq', function () {
    return view('faq');
});

//for viewing data in the database
Route::get('/data', function () {
    return view('data');
});

//for admins to view list of all entries: protected behind auth for admin
Route::get('/entry-form/entries', [EntryController::class, 'index']);

//for entering data into the database: protected behind auth for researchers
Route::get('/entry-form', [EntryController::class, 'create']);

//for saving the form data to the database
Route::post('/entries', [EntryController::class, 'store']);

//for contact information regarding different aspects of the project
Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
