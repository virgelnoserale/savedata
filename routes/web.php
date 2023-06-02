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

Route::get('/show', function () {
    $showdata = DB::table('save_data_mig_table')->get();
    return view('show', [
        'showdata' => $showdata
    ]);
});