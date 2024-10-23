<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketCategoryController;
use App\Http\Controllers\TicketNoteController;
use App\Http\Controllers\UserController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'authenticate']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('logout', [LoginController::class, 'logout']);
    Route::get('me', [LoginController::class, 'user']);
    // Route::get('user', fn(Request $request) => $request->user());
});

Route::resource('tickets', TicketController::class);
Route::resource('categories', TicketCategoryController::class);
Route::resource('notes', TicketNoteController::class);
Route::resource('users', UserController::class);

// Route::post('login', [AuthController::class, 'login']);
// Route::post('send-email-reset-password', [AuthController::class, 'resetPasswordRequest']);
// Route::post('reset-password', [AuthController::class, 'updatePassword']);
// Route::get('get-user-to-register/{user:invite_token}', [AuthController::class, 'userToRegister']);
// Route::post('register/{user:invite_token}', [AuthController::class, 'register']);

// Route::middleware(['auth'])->group(function () {
//     Route::get('logout', [AuthController::class, 'logout']);
//     Route::get('me', [AuthController::class, 'me']);

//     Route::resource('projects', ProjectController::class);
//     Route::post('projects/{project}/add-hand', [ProjectController::class, 'addHandToProject']);
//     Route::post('projects/{project}/remove-hand-from-project', [ProjectController::class, 'removeHandFromProject']);

//     Route::resource('hands', HandController::class);
//     Route::post('hands/{hand}/add-project', [HandController::class, 'addProjectToHand']);

//     Route::resource('customers', CustomerController::class);

//     Route::resource('users', UserController::class);

//     Route::resource('teams', TeamController::class);
//     Route::post('teams/{team}/remove-hand-from-team', [TeamController::class, 'removeHandFromTeam']);
//     Route::post('teams/{team}/add-hand-to-team', [TeamController::class, 'addHandToTeam']);
// });
