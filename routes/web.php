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
//Route::get('/','BlueController@index' );
//Route::get('saludo', function(){
//   return "Ejemplo de prueba Proyecto";
//});

Route::get('saludo2', function($nombre = 'Ezequiel', $edad = '22'){
   return "Hola -> ".$nombre."edad={$edad}";
});



// route for view/blade file
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
// route for post request
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// route for check status responce
Route::get('paypal', array('as' => 'statuspaypal','uses' => 'PaypalController@getPaymentStatus',));



//////////// CREDIT CARD

// route for post request
Route::post('cardsuscribe', array('as' => 'cardsuscribe','uses' => 'PaymentscardController@postPaymentWithcard',));
// route for check status responce
//Route::get('paypal', array('as' => 'statuspaypal','uses' => 'PaypalcardController@getPaymentStatus',));




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
Route::name('edit')->get('dashboard/edit/{id}','DashboardController@edit');
Route::name('destroy')->delete('dashboard/destroy/{id}','DashboardController@destroy');
Route::get('dasboard/create','DashboardController@create');
Route::name('store')->post('store','DashboardController@store');
Route::name('store2')->post('store2','DashboardController@store2');
Route::name('update')->post('update/{id}','DashboardController@update');
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
Route::name('statusanuncio')->get('dishboard/statusanuncio/{id}/{bann}/{idu}', 'DashboardController@statusanuncio');
Route::name('blockanun')->get('dishboard/blockanun/{id}/{bann}/{idu}', 'DashboardController@blockanun');
Route::get('deshboard/profile/{id}','DashboardController@profile');
Route::name('filtro')->post('deshboard/pendientes', 'DashboardController@pendientes'); 
Route::get('deshboard/pendientes/{id}','DashboardController@pendientes');
Route::get('deshboard/pagos/{id}','DashboardController@pagos');
Route::name('redexcel')->get('redexcel','ExcelController@index');
Route::name('excelpagos')->get('excelpagos/{id}','ExcelController@pagos');
Route::name('excelpendientes')->get('excelpendientes','ExcelController@pendientes');
Route::name('excelusers')->get('excelusers','ExcelController@users');
Route::get('deshboard/suscribe/{id}', 'DashboardController@suscribe')->name('sucribe');

Route::get('deshboard/test', 'DashboardController@test');
Route::get('dashboard/test', 'DashboardController@pruebasession')->name('test');
Route::name('login')->get('/login','LoginController@login');
Route::name('valida')->get('/valida','LoginController@valida');
Route::name('logout')->get('/logout','LoginController@logout');
Route::post('/getMunicipios', 'DashboardController@getMunicipios')->name('get-munis');
Route::post('/getPagos', 'DashboardController@getPagos')->name('get-pagos');
Route::post('/total', 'DashboardController@total')->name('total');
Route::post('/anuncio', 'DashboardController@anunciosuser')->name('anuncio');
Route::post('/ubicacion', 'DashboardController@ubicacionuser')->name('ubicacion');

Route::get('vistabluereset/getRequest',function(){
    if(Request::ajax()){
        return 'getRequest cargo bien';
    }
});

 
Route::get('deshboard/getRequest',function(){
    if(Request::ajax()){
        
        return 'getRequest cargo bien';
    }
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('dashboard/admin', 'DashboardController@profileadmin')->name('profile');
Route::get('dashboard/settings', 'DashboardController@settingsadmin')->name('settings');