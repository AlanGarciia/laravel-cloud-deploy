<?php

use App\Http\Controllers\CicleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Cicle
    Route::get('/cicles/create', [CicleController::class, 'create'])->name('cicles.create');
    Route::post('/cicles', [CicleController::class, 'store'])->name('cicles.store');
    Route::get('cicles/{cicle}', [CicleController::class, 'show'])->name('cicles.show');
    Route::delete('cicles/{cicle}', [CicleController::class, 'destroy'])->name('cicles.destroy');

    //Student
    Route::get('/form', [StudentController::class, 'create'])->name('student.create');
    Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('student.show');
        //Matricular al estudiant
    Route::post('/cicles/{cicle}/matricular', [StudentController::class, 'matricular'])->name('cicles.matricular');



    Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

    Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');

    Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
});

require __DIR__.'/auth.php';

