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
    //\Artisan::call('config:cache');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    return view('auth.login');
});

/*Route::get('/terms/condition', function () {
	$page = App\Page::find(1);

    return view('clef.termandcondition')->with('page',$page);
});

Route::get('/aboutus', function () {
	$page = App\Page::find(2);

    return view('clef.aboutus')->with('page',$page);
});

Route::get('/privacy/policy', function () {
	$page = App\Page::find(3);

    return view('clef.privacypolicy')->with('page',$page);
});

Route::get('/howitworks', function () {
	$page = App\Page::find(4);

    return view('clef.howitworks')->with('page',$page);
});

Route::get('/FAQ', function () {
	$page = App\Page::find(5);

    return view('clef.faq')->with('page',$page);
});*/


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
// Route::get('admin/setting', 'SettingController@setting')->name('setting');
// Route::post('admin/update/setting', 'SettingController@updateSetting')->name('updateSetting');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
