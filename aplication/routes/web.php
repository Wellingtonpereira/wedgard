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
    return view('web.index');
});
Route::get('/project/{id}/{type}', 'PortfolioController@show');

Route::post('contato','ContactController@send')->name('contato');

Route::get('/curriculum', function () {
    return view('web.curriculum');
});

Route::get('/email', function () {
    return ( new App\Mail\ComercialEsporte() )->render();
});
Route::get('/curriculum-mail', function () {

    $data= ['msg' => 'mensagem'];
    return ( new App\Mail\CurriculumMail( $data ) )->render();
});

Route::get('/formulario', 'EmailComercialController@index');
Route::post('/emailesporte', 'EmailComercialController@store'); 

Route::get('/emailcurriculum', 'CurriculumController@index'); 
Route::post('/emailcurriculum', 'CurriculumController@store'); 