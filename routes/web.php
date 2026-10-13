<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student');
    Route::post('/save', [StudentController::class, 'save'])->name('student.save');
    Route::delete('/{stu_id}', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('/{stu_id}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/{stu_id}/update', [StudentController::class, 'update'])->name('student.update');
    Route::get('/{stu_id}/manage', [StudentController::class, 'vewRecords'])->name('student.manage');
    Route::post('/saveRecord', [StudentController::class, 'saveRecord'])->name('student.saveRecord');
});
