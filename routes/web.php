<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSavdData;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('savedata_link', 'welcome');
Route::POST('savedata_link',[ControllerSavdData::class, 'welcome']);

Route::view('showdata_link','show');
Route::get('showdata_link',[ControllerSavdData::class, 'showList']);



Route::view('deletedata_link','deletepage');
Route::get('deletedata_link',[ControllerSavdData::class, 'deleteList']);



Route::get('delete/{id}',[ControllerSavdData::class,'delete']);







Route::view('updatedata_link','updatepage');
Route::get('updatedata_link',[ControllerSavdData::class, 'updateList']);
