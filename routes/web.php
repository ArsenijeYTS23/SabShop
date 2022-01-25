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
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

Route::get('/email', function () {
//  $rrr='iiii';
Mail::to('arsaarsa71@yahoo.com')->send(new SendMail());
    // return new SendMail();
});
Route::get('/ses', function () {

  return view('contact');
});


Route::get('/list/{category?}/{subcategory?}/{subsubcategory?}', 'ListController@home');
Route::get('/akcija', 'ListController@akcija');
Route::get('/search', 'SearchController@home');
Route::post('store', 'FormController@store');
Route::post('porudzbina', 'PorudzbinaController@store');
Route::get('/product/{id?}', 'ProductController@home');
Route::get('/', 'HomePageController@home');
Route::get('/usluga/{id?}', 'UslugeController@index');
Route::get('/usluge', 'UslugeController@list');
Route::get('cart', 'CartController@home');
Route::get('dodaj', 'ProductController@dodaj');
Route::get('remove_from_cart/{k?}', 'CartController@remove_from_cart');


Route::get('uslovi_koriscenja', 'UsloviController@uslovi');
Route::get('kako_kupiti', 'UsloviController@kako_kupiti');
Route::get('nacini_placanja', 'UsloviController@nacini_placanja');
Route::get('politika_privatnosti', 'UsloviController@politika_privatnosti');
Route::get('povracaj_sredstava', 'UsloviController@povracaj_sredstava');
Route::get('pravo_na_odustajanje', 'UsloviController@pravo_na');
Route::get('reklamacije', 'UsloviController@reklamacije');
Route::get('zamena_velicine_i_zamena_artikla_za_drugi', 'UsloviController@zamena_velicine_i_zamena_artikla_za_drugi');

Auth::routes();
Route::get('/admin/list_admin/{category?}/{subcategory?}/{subsubcategory?}', 'AdminListController@home')->middleware('auth');
Route::get('/admin/edit_product/{product?}', 'AdminProductController@show')->middleware('auth');
Route::post('/admin/update', 'AdminProductController@update')->middleware('auth');
Route::get('/admin/erase_product/{product?}', 'AdminProductController@erase')->middleware('auth');
Route::get('/admin/kategorije', 'AdminCategorieController@show')->middleware('auth');
Route::post('/admin/update_cat', 'AdminCategorieController@update_cat')->middleware('auth');
Route::post('/admin/new_cat', 'AdminCategorieController@new_cat')->middleware('auth');
Route::get('/admin/subkategorije', 'AdminCategorieController@show_subcat')->middleware('auth');
Route::post('/admin/update_subcat', 'AdminCategorieController@update_subcat')->middleware('auth');
Route::post('/admin/new_subcat', 'AdminCategorieController@new_subcat')->middleware('auth');
Route::get('/admin/subsubkategorije', 'AdminCategorieController@show_subsubcat')->middleware('auth');
Route::post('/admin/update_subsubcat', 'AdminCategorieController@update_subsubcat')->middleware('auth');
Route::post('/admin/new_subsubcat', 'AdminCategorieController@new_subsubcat')->middleware('auth');
Route::get('/admin/porudzbine', 'PorudzbinaController@show')->middleware('auth');
Route::get('/admin/obrisi_porudzbinu/{porudzbina?}', 'PorudzbinaController@obrisi')->middleware('auth');
Route::get('/admin/arhiviraj_porudzbinu/{porudzbina?}', 'PorudzbinaController@arhiviraj')->middleware('auth');
Route::get('/admin/baneri', 'AdminBanerController@show')->middleware('auth');
Route::post('/admin/update_baner', 'AdminBanerController@update')->middleware('auth');
Route::post('/admin/add_baner_img', 'AdminBanerController@add_baner_img')->middleware('auth');
Route::get('/admin/delete_baner_img/{baner?}', 'AdminBanerController@delete_baner_img')->middleware('auth');
Route::get('/search_admin', 'SearchController@admin')->middleware('auth');
Route::get('/admin/home', 'HomeController@index')->name('home');
