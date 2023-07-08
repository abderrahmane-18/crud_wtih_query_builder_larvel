<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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


Route::controller(PostController::class)->group(
    function(){
        Route::get('posts/create','hello')->name('posts.create');
      //  Route::get('posts','create')->name('posts.create');
    //method 1   // Route::post('posts/insert','insert');
    /*method 1 */    Route::post('posts/insert','insert')->name('posts.insert');
                      Route::get('/','show')->name('posts_show');
                      Route::get('posts/edit/{id}','edit')->name('posts.edit');  
                     Route::post('posts/update/{id}','update')->name('posts.update'); 
                 //   Route::put('posts/update/{id}','update')->name('posts.update');   
                 Route::get('posts/delete/{id}','delete')->name('posts.delete'); 
                 Route::get('posts/felete/truncate','deletesTruncate')->name('posts.felete.truncate'); 
                 Route::get('posts/felete/all','feleteAll')->name('posts.felete.all'); 
    });