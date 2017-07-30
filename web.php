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
use Anunciate\Estados;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','BlueController@index' );
Route::get('saludo', function(){
   return "Ejemplo de prueba Proyecto";
});

Route::get('saludo2', function($nombre = 'Ezequiel', $edad = '22'){
   return "Hola -> ".$nombre."edad={$edad}";
});

Route::get('vistahola','HolaController@hola');
Route::get('vistaadios','HolaController@adios');
Route::get('vista1', 'PrimerController@inicio');/*
Route::get('inicio', 'InicioController@index');
Route::get('inicio2', 'InicioController@index2');*/

Route::get('vista2', 'Vista2Controller@index');
Route::get('web', 'WebController@index');

Route::get('vistablue', 'BlueController@index');
Route::get('vistabluereset', 'BlueController@resetpas');
Route::get('vistabluesis', 'BlueController@sistema');

Route::name('vistablue')->get('vistablue', 'BlueController@index');
Route::name('vistabluereset')->get('vistabluereset', 'BlueController@resetpas');
Route::name('vistabluesis')->get('vistabluesis', 'BlueController@sistema');

Route::resource('blue','BlueController');

Route::name('dashboard')->get('dashboard','DashboardController@index');
Route::name('edit')->get('dashboard/edit','DashboardController@edit');
Route::name('destroy')->get('dashboard/destroy','DashboardController@destroy');
Route::get('create','DashboardController@create');
//Route::name('dashboard')->get('dashboard', 'BlueController@dashboard');
//Route::name('search_name')->post('dashboard', 'DashboardController@index'); 
Route::get('municipio/{id}','DashboardController@getMunicipio');
//Route::resource('dashboard','DashboardController');

//Route::get('dashboard/info','DashboardController@info');
//Route::name('info')->get('dashboard/infousers','DashboardController@info');
Route::get('municipio/{id}','DashboardController@getMunicipios');

Route::name('info')->get('deshboard/info', 'DashboardController@info');
Route::name('anunciousers')->post('deshboard/anunciousers', 'DashboardController@anunciousers');
Route::name('status')->get('dishboard/status/{id}/{bann}', 'DashboardController@status');
Route::get('deshboard/profile/{id}','DashboardController@profile');
Route::get('deshboard/pagos/{id}','DashboardController@pagos');
Route::name('redexcel')->get('redexcel','ExcelController@index');
Route::get('deshboard/test', 'DashboardController@test');
Route::name('login')->get('/login','LoginController@login');
Route::name('valida')->get('/valida','LoginController@valida');
Route::name('logout')->get('/logout','LoginController@logout');
Route::post('deshboard/getMunicipios', 'DashboardController@getMunicipios')->name('get-munis');
 
 
Route::get('vistabluereset/getRequest',function(){
    if(Request::ajax()){
        return 'getRequest cargo bien';
    }
});

 
Route::get('/getRequest',function(){
    if(Request::ajax()){
        return 'getRequest cargo bien';
    }
});


