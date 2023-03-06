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

Route::prefix('listings')
    ->name('listings.')
    ->group(function(){
        Route::get('/', [ListingApi::class, 'index']);
        Route::post('/', [ListingApi::class, 'store'])->name('store');
        Route::get('/{listing}', [ListingApi::class, 'show'])->name('show');
        Route::put('/{listing}', [ListingApi::class, 'update'])->name('update');
        Route::delete('/{listing}', [ListingApi::class, 'destroy'])->name('destroy');
    });

Route::get('/posts', function(){
    return response()->json([
        'posts' => [
            'id' => 1,
            'title' => 'Post one',
            'slug' => 'post-one',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nihil, repudiandae aut fugiat quae quod architecto molestiae laborum placeat vel incidunt delectus tempore corporis beatae nulla soluta quidem aliquid iure.'
        ]
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
