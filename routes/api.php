<?php

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

// Route::get('/post',function(){
//     return response()->json([
//         'status'=>[
//             '404'=>'Not Found',
//             '200'=>'OK'
//         ]
//     ]);
// });// To get the output add api before '/post'. ex: .../api/post

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
