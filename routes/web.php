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

Route::any('',array('uses'=>'HomeController@index'));
Route::any('landing',array('uses'=>'HomeController@landing'));
Route::any('privacy',array('uses'=>'HomeController@privacy'));
Route::any('privacy_app',array('uses'=>'HomeController@privacy_app'));

Route::any('admin/login',array('uses'=>'AdminController@login'));

Route::any('admin/index',array('uses'=>'AdminController@index'));
Route::any('superadmin/index',array('uses'=>'SuperAdminController@index'));
Route::any('host/index',array('uses'=>'HostController@index'));
Route::any('cliente/index',array('uses'=>'ClienteController@index'));


Route::any('admin/preferenze',array('uses'=>'AdminController@preferenze'));
Route::any('admin/viaggi',array('uses'=>'AdminController@viaggi'));
Route::any('admin/dettaglio_viaggio/{id}',array('uses'=>'AdminController@dettaglio_viaggio'));
Route::any('admin/filtri_viaggio',array('uses'=>'AdminController@filtri_viaggio'));
Route::any('admin/consigli',array('uses'=>'AdminController@consigli'));
Route::any('admin/tutorial/{id_tipologia}',array('uses'=>'AdminController@tutorial'));


Route::any('admin/eventi',array('uses'=>'AdminController@eventi'));
Route::any('admin/eventi/{tipologia}',array('uses'=>'AdminController@eventi'));
Route::any('admin/logout',array('uses'=>'AdminController@logout'));

Route::any('admin/ajax/modifica_evento/{id}',array('uses'=>'AjaxController@modifica_evento'));

Route::any('admin/ajax/delete_consiglio/{id}',array('uses'=>'AjaxAdminController@delete_consiglio'));
Route::any('admin/ajax/aggiungi_consiglio',array('uses'=>'AjaxAdminController@aggiungi_consiglio'));
Route::any('admin/ajax/aggiungi_group_consiglio',array('uses'=>'AjaxAdminController@aggiungi_group_consiglio'));



Route::any('admin/ajax/delete_oggetto/{id}',array('uses'=>'AjaxAdminController@delete_oggetto'));
Route::any('admin/ajax/aggiungi_oggetto/{id}/{content}',array('uses'=>'AjaxAdminController@aggiungi_oggetto'));
Route::any('admin/ajax/update_oggetto/{id}/{content}',array('uses'=>'AjaxAdminController@update_oggetto'));
Route::any('admin/ajax/aggiungi_preferenza/{type}/{title}',array('uses'=>'AjaxAdminController@aggiungi_preferenza'));


Route::any('admin/ajax/delete_oggetto_viaggio/{id}',array('uses'=>'AjaxAdminController@delete_oggetto_viaggio'));
Route::any('admin/ajax/aggiungi_oggetto_viaggio/{id}/{content}',array('uses'=>'AjaxAdminController@aggiungi_oggetto_viaggio'));
Route::any('admin/ajax/update_oggetto_viaggio/{id}/{content}',array('uses'=>'AjaxAdminController@update_oggetto_viaggio'));
Route::any('admin/ajax/aggiungi_filtri_viaggio/{type}/{title}',array('uses'=>'AjaxAdminController@aggiungi_filtri_viaggio'));


Route::any('admin/ajax/aggiungi_viaggio/{localita}/{descrizione}/{andata}/{ritorno}/{partenza}/{arrivo}/{max_partecipanti}',array('uses'=>'AjaxAdminController@aggiungi_viaggio'));
Route::any('admin/ajax/delete_viaggio/{id}',array('uses'=>'AjaxAdminController@delete_viaggio'));


Route::any('admin/ajax/delete_descrizione_tutorial/{id}',array('uses'=>'AjaxAdminController@delete_descrizione_tutorial'));
Route::any('admin/ajax/delete_img_tutorial/{id}',array('uses'=>'AjaxAdminController@delete_img_tutorial'));
Route::any('admin/ajax/delete_tutorial/{id}',array('uses'=>'AjaxAdminController@delete_tutorial'));

Route::any('admin/ajax/delete_road/{id}',array('uses'=>'AjaxAdminController@delete_road'));
Route::any('admin/ajax/update_road/{id}/{content}/{data_inizio}/{data_fine}/{id_tipo_roadmap}/{indirizzo}',array('uses'=>'AjaxAdminController@update_road'));

Route::any('admin/ajax/elimina_partecipante/{id_utente}/{id_viaggio}',array('uses'=>'AjaxAdminController@elimina_partecipante'));
Route::any('admin/ajax/search_partecipante/{like}',array('uses'=>'AjaxAdminController@search_partecipante'));


Route::any('api2/login',array('uses'=>'ApiController@login'));
Route::any('api2/fast_login',array('uses'=>'ApiController@fast_login'));

Route::any('api/registra',array('uses'=>'ApiController@registra'));
Route::any('api/viaggio',array('uses'=>'ApiController@viaggio'));
Route::any('api/viaggio_roadmap',array('uses'=>'ApiController@viaggio_roadmap'));
Route::any('api/viaggi_disponibili',array('uses'=>'ApiController@viaggi_disponibili'));
Route::any('api/cronologia_viaggi',array('uses'=>'ApiController@cronologia_viaggi'));
Route::any('api/hide_notifica',array('uses'=>'ApiController@hide_notifica'));
Route::any('api/follow',array('uses'=>'ApiController@follow'));
Route::any('api/tutorial',array('uses'=>'ApiController@tutorial'));
Route::any('api/preferenze',array('uses'=>'ApiController@preferenze'));
Route::any('api/get_explorer_filter_bydesc/{filter}',array('uses'=>'ApiController@get_explorer_filter_bydesc'));

Route::any('api/registra2',array('uses'=>'ApiController@registra2'));
Route::any('api/is_online/{token}',array('uses'=>'ApiController@is_online'));
Route::any('api/token',array('uses'=>'ApiController@token'));
