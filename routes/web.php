<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\homeController;

use App\Http\Controllers\courseController;


use App\Http\Controllers\PruebaController;

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

//USING CONTROLLER
//Routes by GET

// 1. Index

// Ruta: localhost/firstApp/public/courses
route::get('/courses', [courseController::class, 'index'])->name('courses.index');

// 2. Create
// Ruta: localhost/firstApp/public/courses/create

route::get('/courses/create/', [courseController::class, 'create'])->name('courses.create');

// 3. Store
// Ruta: localhost/firstApp/public/courses/store

route::post('/courses', [courseController::class, 'store'])->name('courses.store');

// 4. Show
// Ruta: localhost/firstApp/public/courses/show
route::get('/courses/{id}', [courseController::class, 'show'])->name('courses.show');

// 5. Edit
// Ruta: localhost/firstApp/public/courses/edit
route::get('/courses/{id}/edit', [courseController::class, 'edit'])->name('courses.edit');

// 6. Update
// Ruta: localhost/firstApp/public/courses/update
route::put('/courses/{id}', [courseController::class, 'update'])->name('courses.update');

// 7. Delete
// Ruta: localhost/firstApp/public/courses/delete
route::delete('/courses/{id}', [courseController::class, 'destroy'])->name('courses.destroy');

// Controller home return string
// http://localhost/firstApp/public/    ROOT
// Route::get('/', homeController::class); //Because we are only using the name of the controller and ::class, laravel asume that we are using the method __invoke

//Controller Course by group return string
// Route::controller(courseController::class)->group(function () {
    // Route::get('courses', "index");
    // Route::get('courses/create', "create");
    // Route::get('courses/{course}/{category?}', "show");
    // });