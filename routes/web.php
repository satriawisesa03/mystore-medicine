<?php

use Illuminate\Support\Facades\Route;

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
    return view('mystore');
});

Route::get('wfp/{kelas}', function($kelas){
    //apabila kelas bukan C,
    //maka munculkan "bukan kelas saya"
    //apabila kelas C, maka
    //keluarkan WFP kelas saya
    if($kelas =="C" || $kelas =="c"){
        return "WFP kelas " . $kelas;
    }
    else{
        return "bukan kelas saya";
    }
    //return "WFP kelas " . $kelas;
});

Route::view('/welcome', 'welcome');

Route::post('satria', function(){
    return "Hello WFP C";
});

Route::get('greeting', function(){
    return view ('welcome', ['name'=>'Satria']);
});

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');
