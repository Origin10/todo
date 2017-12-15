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
	return view('welcome');
});	

Route::get('votes', function(){
	$name = '勇者鬥惡龍';
	$num = 8;
	$url = '<b>http://</b>google.com.tw';
	//return view('pages.baha',['name'=>$name , 'num' => $num]);
	//return view('pages.baha',compact('name','num2'));
	return view('pages.baha')->with(['name'=>$name , 'num' => $num , 'url' => $url]);
});

Route::get('/hello',function(){
	return 'Hello,Zack!';
});

Route::any('sayHi',function(){
	$my_name = "Nigel";
	return "hi~".$my_name;
});

Route::get('posts/{id?}','HomeController@showPost');
//越寬鬆的條件越下面

Route::get('users/{id}','HomeController@index')
->name('users.index');

Route::get('testName',function(){
	dd(routes('users.index',['id'=>1]));
});

// <a href="<?php echo route('users.index,['id'=>1]);? >">

Route::get('baha',function(){
	return redirect("http://www.gamer.com.tw");
});

Route::get('redirect',function(){
	return redirect(url('hello'));
});

Route::group([],function(){
	Route::get('hello', function () {
		return 'Hello';
	});
	Route::get('world', function () {
		return 'World';
	});
});

//middleware可以寫驗證
Route::group(['prefix'=>'users'],function(){
	Route::get('/', function () {
 	//處理路徑 /users
	});//prefix前綴詞
	Route::get('show', function () {
 	//處理路徑 /users/show
	});
});