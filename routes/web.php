<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/digimons','DigimonsController@list');
Route::get('/shardscalculations', 'DigimonsController@calculate');
Route::get('/about', 'DigimonsController@tentang');
Route::get('/evolutionList/{id}', 'DigimonsController@evolution');

Route::get('/skilldata/{id}', 'DigiSkillController@index');

Route::get('/input_evo', 'DigiInputController@evolution');
Route::get('/input_skill', 'DigiInputController@skill');
Route::get('/input_digi', 'DigiInputController@digimon');








