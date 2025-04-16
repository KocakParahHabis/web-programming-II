<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController; 

Route::get('/', function () {
    return view('v_html.biodata');
});

Route::get('biodata',[HelloWorldController::class,'index']);
Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']); 
Route::get('getlorem', [HtmlController::class, 'getLorem']);
Route::get('helloword', [HtmlController::class, 'Biodata']);
Route::get('gettabel', [HtmlController::class, 'gettabel']);
Route::get('getform', [HtmlController::class, 'getform']);