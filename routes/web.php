<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserGroupsController;


Route::get('/', function () {
    return view('layout.main');
});


Route::get('groups', [UserGroupsController::class, 'index'])->name('groups');
Route::get('groups/create', [UserGroupsController::class, 'create']);
Route::post('groups', [UserGroupsController::class, 'store']);
Route::delete('groups/{id}', [UserGroupsController::class, 'destroy']);
