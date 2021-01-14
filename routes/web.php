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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@index');
Route::get('/front/exportpdf', 'FrontController@exportpdf');
Route::post('/', 'FrontController@chart');

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/register', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister');
Route::get('/logout', 'AuthController@logout');

// Route::group(['middleware' => ['auth', 'checkRole:Petugas,Kadis,Masyarakat']], function () {
Route::group(['middleware' => ['auth', 'checkRole:Petugas']], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/dashboard/exportpdf', 'DashboardController@exportpdf');
    Route::post('/dashboard', 'DashboardController@chart');
});

Route::group(['middleware' => ['auth', 'checkRole:Petugas']], function () {
    Route::get('/periode', 'PeriodeController@index');
    Route::get('/periode/{periode}/show', 'PeriodeController@show');
    Route::get('/periode/create', 'PeriodeController@create');
    Route::post('/periode/store', 'PeriodeController@store');
    Route::get('/periode/{periode}/edit', 'PeriodeController@edit');
    Route::post('/periode/{periode}/update', 'PeriodeController@update');
    Route::get('/periode/{periode}/destroy', 'PeriodeController@destroy');

    Route::get('/statis/kumum', 'KumumController@index');
    Route::get('/statis/kumum/{id}/viewdata', 'KumumController@viewdata');
    Route::get('/statis/kumum/add', 'KumumController@add');
    Route::post('/statis/kumum/create', 'KumumController@create');
    Route::get('/statis/kumum/{id}/edit', 'KumumController@edit');
    Route::post('/statis/kumum/{id}/update', 'KumumController@update');
    Route::get('/statis/kumum/{id}/delete', 'KumumController@delete');

    Route::get('/statis/ldaerah', 'LdaerahController@index');
    Route::get('/statis/ldaerah/{id}/viewdata', 'LdaerahController@viewdata');
    Route::get('/statis/ldaerah/add', 'LdaerahController@add');
    Route::post('/statis/ldaerah/create', 'LdaerahController@create');
    Route::get('/statis/ldaerah/{id}/edit', 'LdaerahController@edit');
    Route::post('/statis/ldaerah/{id}/update', 'LdaerahController@update');
    Route::get('/statis/ldaerah/{id}/delete', 'LdaerahController@delete');

    Route::get('/statis/pemdesa', 'PemdesaController@index');
    Route::get('/statis/pemdesa/{id}/viewdata', 'PemdesaController@viewdata');
    Route::get('/statis/pemdesa/add', 'PemdesaController@add');
    Route::post('/statis/pemdesa/create', 'PemdesaController@create');
    Route::get('/statis/pemdesa/{id}/edit', 'PemdesaController@edit');
    Route::post('/statis/pemdesa/{id}/update', 'PemdesaController@update');
    Route::get('/statis/pemdesa/{id}/delete', 'PemdesaController@delete');

    Route::get('/statis/prasarana', 'PrasaranaController@index');
    Route::get('/statis/prasarana/{id}/viewdata', 'PrasaranaController@viewdata');
    Route::get('/statis/prasarana/add', 'PrasaranaController@add');
    Route::post('/statis/prasarana/create', 'PrasaranaController@create');
    Route::get('/statis/prasarana/{id}/edit', 'PrasaranaController@edit');
    Route::post('/statis/prasarana/{id}/update', 'PrasaranaController@update');
    Route::get('/statis/prasarana/{id}/delete', 'PrasaranaController@delete');

    Route::get('/statis/pemkec', 'PemkecController@index');
    Route::get('/statis/pemkec/{id}/viewdata', 'PemkecController@viewdata');
    Route::get('/statis/pemkec/add', 'PemkecController@add');
    Route::post('/statis/pemkec/create', 'PemkecController@create');
    Route::get('/statis/pemkec/{id}/edit', 'PemkecController@edit');
    Route::post('/statis/pemkec/{id}/update', 'PemkecController@update');
    Route::get('/statis/pemkec/{id}/delete', 'PemkecController@delete');

    Route::get('/statis/pengangkutan', 'PengangkutanController@index');
    Route::get('/statis/pengangkutan/{id}/viewdata', 'PengangkutanController@viewdata');
    Route::get('/statis/pengangkutan/add', 'PengangkutanController@add');
    Route::post('/statis/pengangkutan/create', 'PengangkutanController@create');
    Route::get('/statis/pengangkutan/{id}/edit', 'PengangkutanController@edit');
    Route::post('/statis/pengangkutan/{id}/update', 'PengangkutanController@update');
    Route::get('/statis/pengangkutan/{id}/delete', 'PengangkutanController@delete');

    Route::get('/statis/pjgjalan', 'PjgjalanController@index');
    Route::get('/statis/pjgjalan/{id}/viewdata', 'PjgjalanController@viewdata');
    Route::get('/statis/pjgjalan/add', 'PjgjalanController@add');
    Route::post('/statis/pjgjalan/create', 'PjgjalanController@create');
    Route::get('/statis/pjgjalan/{id}/edit', 'PjgjalanController@edit');
    Route::post('/statis/pjgjalan/{id}/update', 'PjgjalanController@update');
    Route::get('/statis/pjgjalan/{id}/delete', 'PjgjalanController@delete');

    Route::get('/statis/perekonomian', 'PerekonomianController@index');
    Route::get('/statis/perekonomian/{id}/viewdata', 'PerekonomianController@viewdata');
    Route::get('/statis/perekonomian/add', 'PerekonomianController@add');
    Route::post('/statis/perekonomian/create', 'PerekonomianController@create');
    Route::get('/statis/perekonomian/{id}/edit', 'PerekonomianController@edit');
    Route::post('/statis/perekonomian/{id}/update', 'PerekonomianController@update');
    Route::get('/statis/perekonomian/{id}/delete', 'PerekonomianController@delete');

    Route::get('/statis/jumlahusaha', 'JumlahusahaController@index');
    Route::get('/statis/jumlahusaha/{id}/viewdata', 'JumlahusahaController@viewdata');
    Route::get('/statis/jumlahusaha/add', 'JumlahusahaController@add');
    Route::post('/statis/jumlahusaha/create', 'JumlahusahaController@create');
    Route::get('/statis/jumlahusaha/{id}/edit', 'JumlahusahaController@edit');
    Route::post('/statis/jumlahusaha/{id}/update', 'JumlahusahaController@update');
    Route::get('/statis/jumlahusaha/{id}/delete', 'JumlahusahaController@delete');

    Route::get('/statis/saranasosbud', 'SaranasosbudController@index');
    Route::get('/statis/saranasosbud/{id}/viewdata', 'SaranasosbudController@viewdata');
    Route::get('/statis/saranasosbud/add', 'SaranasosbudController@add');
    Route::post('/statis/saranasosbud/create', 'SaranasosbudController@create');
    Route::get('/statis/saranasosbud/{id}/edit', 'SaranasosbudController@edit');
    Route::post('/statis/saranasosbud/{id}/update', 'SaranasosbudController@update');
    Route::get('/statis/saranasosbud/{id}/delete', 'SaranasosbudController@delete');


    Route::get('/dinamis/pemkecamatan', 'PemkecamatanController@index');
    Route::get('/dinamis/pemkecamatan/{id}/viewdata', 'PemkecamatanController@viewdata');
    Route::get('/dinamis/pemkecamatan/add', 'PemkecamatanController@add');
    Route::post('/dinamis/pemkecamatan/create', 'PemkecamatanController@create');
    Route::get('/dinamis/pemkecamatan/{id}/edit', 'PemkecamatanController@edit');
    Route::post('/dinamis/pemkecamatan/{id}/update', 'PemkecamatanController@update');
    Route::get('/dinamis/pemkecamatan/{id}/delete', 'PemkecamatanController@delete');

    Route::get('/dinamis/kependudukan', 'KependudukanController@index');
    Route::get('/dinamis/kependudukan/{id}/viewdata', 'KependudukanController@viewdata');
    Route::get('/dinamis/kependudukan/add', 'KependudukanController@add');
    Route::post('/dinamis/kependudukan/create', 'KependudukanController@create');
    Route::get('/dinamis/kependudukan/{id}/edit', 'KependudukanController@edit');
    Route::post('/dinamis/kependudukan/{id}/update', 'KependudukanController@update');
    Route::get('/dinamis/kependudukan/{id}/delete', 'KependudukanController@delete');

    Route::get('/dinamis/keagrariaan', 'KeagrariaanController@index');
    Route::get('/dinamis/keagrariaan/{id}/viewdata', 'KeagrariaanController@viewdata');
    Route::get('/dinamis/keagrariaan/add', 'KeagrariaanController@add');
    Route::post('/dinamis/keagrariaan/create', 'KeagrariaanController@create');
    Route::get('/dinamis/keagrariaan/{id}/edit', 'KeagrariaanController@edit');
    Route::post('/dinamis/keagrariaan/{id}/update', 'KeagrariaanController@update');
    Route::get('/dinamis/keagrariaan/{id}/delete', 'KeagrariaanController@delete');

    Route::get('/dinamis/tanaman', 'TanamanController@index');
    Route::get('/dinamis/tanaman/{id}/viewdata', 'TanamanController@viewdata');
    Route::get('/dinamis/tanaman/add', 'TanamanController@add');
    Route::post('/dinamis/tanaman/create', 'TanamanController@create');
    Route::get('/dinamis/tanaman/{id}/edit', 'TanamanController@edit');
    Route::post('/dinamis/tanaman/{id}/update', 'TanamanController@update');
    Route::get('/dinamis/tanaman/{id}/delete', 'TanamanController@delete');

    Route::get('/dinamis/pangan', 'PanganController@index');
    Route::get('/dinamis/pangan/{id}/viewdata', 'PanganController@viewdata');
    Route::get('/dinamis/pangan/add', 'PanganController@add');
    Route::post('/dinamis/pangan/create', 'PanganController@create');
    Route::get('/dinamis/pangan/{id}/edit', 'PanganController@edit');
    Route::post('/dinamis/pangan/{id}/update', 'PanganController@update');
    Route::get('/dinamis/pangan/{id}/delete', 'PanganController@delete');

    Route::get('/dinamis/perikanan', 'PerikananController@index');
    Route::get('/dinamis/perikanan/{id}/viewdata', 'PerikananController@viewdata');
    Route::get('/dinamis/perikanan/add', 'PerikananController@add');
    Route::post('/dinamis/perikanan/create', 'PerikananController@create');
    Route::get('/dinamis/perikanan/{id}/edit', 'PerikananController@edit');
    Route::post('/dinamis/perikanan/{id}/update', 'PerikananController@update');
    Route::get('/dinamis/perikanan/{id}/delete', 'PerikananController@delete');

    Route::get('/dinamis/transportasi', 'TransportasiController@index');
    Route::get('/dinamis/transportasi/{id}/viewdata', 'TransportasiController@viewdata');
    Route::get('/dinamis/transportasi/add', 'TransportasiController@add');
    Route::post('/dinamis/transportasi/create', 'TransportasiController@create');
    Route::get('/dinamis/transportasi/{id}/edit', 'TransportasiController@edit');
    Route::post('/dinamis/transportasi/{id}/update', 'TransportasiController@update');
    Route::get('/dinamis/transportasi/{id}/delete', 'TransportasiController@delete');

    Route::get('/dinamis/polkam', 'PolkamController@index');
    Route::get('/dinamis/polkam/{id}/viewdata', 'PolkamController@viewdata');
    Route::get('/dinamis/polkam/add', 'PolkamController@add');
    Route::post('/dinamis/polkam/create', 'PolkamController@create');
    Route::get('/dinamis/polkam/{id}/edit', 'PolkamController@edit');
    Route::post('/dinamis/polkam/{id}/update', 'PolkamController@update');
    Route::get('/dinamis/polkam/{id}/delete', 'PolkamController@delete');
});

//