<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/data', function(){
$array = [
    'グループ1' => [
        '名前1',
        '名前2',
    ],
    'グループ2' => [
        '名前3',
        '名前4',
        '名前5',
        '名前6'
    ],
    'グループ3' => [
        '名前7',
        '名前8',
        '名前9',
        '名前10',
        '名前11',
        '名前12'
    ]
];

    return json_encode($array);
});