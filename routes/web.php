<?php

use Illuminate\Support\Facades\Route;

Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');


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
// Route::middleware([])->group(function(){
//     Route::prefix('admin')->group(function(){

//         Route::namespace('Admin')->group(function(){
//             Route::name('admin.')->group(function(){
//                 Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
//                 Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
//                 Route::get('/produdos', 'TesteController@teste')->name('products');
//                 Route::get('/', 'TesteController@teste')->name('home');
//             });

//         });

//     });
// });

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin'
], function(){
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    Route::get('/produdos', 'TesteController@teste')->name('products');
    Route::get('/', 'TesteController@teste')->name('home');
});




Route::any('/categorias/{flag}/{teste}', function($flag, $teste){
    return "Produtos da categoria {$flag} {$teste}";
});
Route::any('/any', function(){
    return 'Any';
});
Route::match(['get', 'post'], '/match', function(){
    return 'Match';
});


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
