<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/form', [StudentController::class, 'create'])->name('student.create');

Route::get('/', [StudentController::class, 'index'])->name('student.index');

Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('student.show');

Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');

Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');

Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('student.update');

Route::get('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('student.destroy');



