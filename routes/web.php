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
//frontend site..........................
Route::get('/','HomeController@index');



//Routes des societes par catégorie ici........................
Route::get('/societe_par_categorie/{id_categorie}','HomeController@afficher_societe_par_categorie');
Route::get('/societe_par_produit/{id_produit}','HomeController@afficher_societe_par_produit');
Route::get('/view_societe/{id_societe}','HomeController@details_societe_par_id');



//Routes de l'admin......................
Route::get('/admin', 'AdminController@index');
Route::get('/deconnexion','SuperAdminController@deconnexion');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');


// Routes des categories......................
Route::get('/add-categorie','CategorieController@index');
Route::get('/all-categorie','CategorieController@all_categorie');
Route::post('/save-categorie','CategorieController@save_categorie');
Route::get('/edit-categorie/{id_categorie}','CategorieController@edit_categorie');
Route::post('/update-categorie/{id_categorie}','CategorieController@update_categorie');
Route::get('/delete-categorie/{id_categorie}','CategorieController@delete_categorie');
Route::get('/categorie_inactive/{id_categorie}','CategorieController@categorie_inactive');
Route::get('/categorie_active/{id_categorie}','CategorieController@categorie_active');


// Routes des societes (ou entreprises) sont ici......................
Route::get('/add-societe','SocieteController@index');
Route::post('/save-societe','SocieteController@save_societe');
Route::get('/all-societe','SocieteController@all_societe');
Route::get('/delete-societe/{id_societe}','SocieteController@delete_societe');
Route::get('/edit-societe/{id_societe}','SocieteController@edit_societe');
Route::post('/update-societe/{id_societe}','SocieteController@update_societe');
Route::get('/societe_inactive/{id_societe}','SocieteController@societe_inactive');
Route::get('/societe_active/{id_societe}','SocieteController@societe_active');
//Route::get('/delete_video_societe/{id_societe}','SocieteController@delete_video_societe');


// Routes des produits ou des marques sont ici......................
Route::get('/add-produit','ProduitController@index');
Route::post('/save-produit','ProduitController@save_produit');
Route::get('/all-produit','ProduitController@all_produit');
Route::get('/delete-produit/{id_produit}','ProduitController@delete_produit');
Route::get('/edit-produit/{id_produit}','ProduitController@edit_produit');
Route::post('/update-produit/{id_produit}','ProduitController@update_produit');
Route::get('/produit_inactive/{id_produit}','ProduitController@produit_inactive');
Route::get('/produit_active/{id_produit}','ProduitController@produit_active');


// Routes des sliders sont ici......................
Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::get('/slider_inactive/{id_slider}','SliderController@slider_inactive');
Route::get('/slider_active/{id_slider}','SliderController@slider_active');
Route::get('/edit-slider/{id_slider}','SliderController@edit_slider');
Route::post('/update-slider/{id_slider}','SliderController@update_slider');
Route::get('/delete-slider/{id_slider}','SliderController@delete_slider');