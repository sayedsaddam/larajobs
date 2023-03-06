<?php

use App\Http\Controllers\Api\ListingApi;
use App\Http\Controllers\Api\UserApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::apiResource('users', UserApi::class);
Route::prefix('users')
    ->name('users.')
    ->group(function(){
        Route::get('/', [UserApi::class, 'index'])->name('index');
        Route::post('/', [UserApi::class, 'store'])->name('store');
        Route::get('/{user}', [UserApi::class, 'show'])->name('show');
        Route::put('/{user}', [UserApi::class, 'update'])->name('update');
        Route::delete('/{user}', [UserApi::class, 'destroy'])->name('destroy');
    });

Route::get('listings', [ListingApi::class, 'index']);

Route::get('/posts', function(){
    return response()->json([
        'posts' => [
            'title' => 'Post one'
        ]
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
