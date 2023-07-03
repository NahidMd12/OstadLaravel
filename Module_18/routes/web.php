<?php

use App\Http\Controllers\AssignmentController;
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

Route::controller(AssignmentController::class)->group(function () {
    Route::get('/', 'postData');
    Route::get('/postData', 'postData');
    Route::get('/categoryPost/{id}', 'categoryPost');
    Route::get('/posts/{id}/delete', 'softDelete');
    Route::get('/softData', 'softData');
    Route::get('/categories/{id}/posts', 'specificCatPost');
    Route::get('/categories/{id}/latestpost', 'latestPost');
    Route::get('/categories', 'CategoriesLatestPosts');
});
