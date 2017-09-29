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
use Illuminate\Http\Request;
 Route::resource('home','HomeController');
 Route::get('details/{slug}',['as' => 'home.details','uses' => 'HomeController@details']);

Auth::routes();

// Route::get('/home', 'HomeController@index');

//  Route::get('/login',['as' => 'login','uses' => 'LoginController@login']);
//  Route::get('/register',['as' => 'register','uses' => 'LoginController@register']);
//  Route::post('/register',['as' => 'register.post','uses' => 'LoginController@PostRegister']);
//  Route::post('/logout',['as' => 'logout','uses' => 'LoginController@logout']);
// Route::post('login',['as'	=>	'cus.postLogin','uses'	=>	'LoginController@postLogin']);

// Route::group(['middleware'=>'auth'],function(){
// 	Route::get('profile','DashboardController@profile');
// 	Route::get('dashboard','DashboardController@index')->name('dashboard');
// });
Route::get('profile','DashboardController@profile');
Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('addcomment/{slug}','BlogController@addcomment')->name('comment');
Route::put('/edit/{slug}',function(Request $request ,$id){
	$data = $request->all();
	App\Comments::find($data['id'])->update([
			'comments' => $data['comment'],
		]);
	return Response::json($data);
});
Route::delete('/delete/{slug}',function(Request $request ,$id){
	$data = $request->all();
	App\Comments::destroy($data['id']);
	return Response::json($data);
});

Route::post('/blog/store','BlogController@ajaxStore')->name('blog.ajax.store');
Route::resource('blog','BlogController');


Auth::routes();

Route::get('/home', 'HomeController@index');

