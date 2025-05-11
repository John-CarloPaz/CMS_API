<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Departments
Route::get('/departments', [DepartmentController::class, 'getAllDepartments']);
Route::get('/department/{id}', [DepartmentController::class, 'getDepartmentById']);
Route::post('/department', [DepartmentController::class, 'createDepartment']);
Route::post('/department/{id}', [DepartmentController::class, 'updateDepartment']);
Route::delete('/department/{id}', [DepartmentController::class, 'deleteDepartment']);

//Programs
Route::get('/programs', [ProgramController::class, 'getAllPrograms']);
Route::get('/program/{id}', [ProgramController::class, 'getProgramById']);
Route::get('/programs/{departmentId}', [ProgramController::class, 'getProgramsByDepartmentId']);
Route::post('/program', [ProgramController::class, 'createProgram']);
Route::post('/program/{id}', [ProgramController::class, 'updateProgram']);
Route::delete('/program/{id}', [ProgramController::class, 'deleteProgram']);

//Students
Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/register-account', [UserController::class, 'accountRegistration']);
Route::get('/users', [UserController::class, 'getAllUsers']);
Route::get('/user/{id}', [UserController::class, 'getUserById']);
Route::post('/user/{id}', [UserController::class, 'updateUser']);
Route::delete('/user/{id}', [UserController::class, 'deleteUser']);

//Sections
Route::get('/sections', [SectionController::class, 'getAllSections']);
Route::get('/section/{id}', [SectionController::class, 'getSectionById']);
Route::post('/section', [SectionController::class, 'createSection']);
Route::post('/section/{id}', [SectionController::class, 'updateSection']);
Route::delete('/section/{id}', [SectionController::class, 'deleteSection']);

// Grading
Route::get('/grades', [SectionController::class, 'getAllGrades']);
Route::get('/grade/{id}', [SectionController::class, 'getGradeById']);
Route::post('/grade', [SectionController::class, 'createGrade']);
Route::post('/grade/{id}', [SectionController::class, 'updateGrade']);
Route::delete('/grade/{id}', [SectionController::class, 'deleteGrade']);

// Auth
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
