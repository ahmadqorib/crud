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


// menampilkan data
Route::get('/catetanku', function(){
    $data = \App\Catetan::all();

    return view('catetan', ['list' => $data]);
});

// Route::get('/catetanku', 'CatetanController@index');

// menyimpan data
Route::get('/catetanku/create', function(){

    $catetan = new \App\Catetan();
    $catetan->judul = 'belajar laravel 5.5';
    $catetan->deskripsi = 'Belajar laravel 5.5 sangat menyenangkan';
    $catetan->save();

    return redirect('catetanku');
});

// update data tanpa mengirim parameter
Route::get('/catetanku/update', function(){
    $catetan = \App\Catetan::where(['id_catetan' => 1])->first();
    $catetan->judul = 'belajar laravel 5';
    $catetan->deskripsi = 'Code For Life';
    $catetan->update();

    return redirect('catetanku');
});

// update data dengan mengirim parameter
Route::get('/catetanku/update/{id}', function($id){
    $catetan = \App\Catetan::where(['id_catetan' => $id])->first();
    $catetan->judul = 'belajar laravel 5.5';
    $catetan->deskripsi = 'Code For Life For Money';
    $catetan->update();

    return redirect('catetanku');
});

// hapus data tanpa mengirim parameter
Route::get('/catetanku/delete', function(){
    $catetan = \App\Catetan::find(1);
    $catetan->delete();

    return redirect('catetanku');

});

// hapus data dengan mengirim parameter
Route::get('/catetanku/delete/{id}', function($id){
    $catetan = \App\Catetan::find($id);
    $catetan->delete();

    return redirect('catetanku');

});
