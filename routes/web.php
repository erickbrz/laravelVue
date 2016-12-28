<?php



Route::get('/user', function (){
    \Illuminate\Support\Facades\Auth::loginUsingId(2);
});

Route::get('/', function () {
       return view('welcome');
});



Route::get('/home', function (){
    return redirect()->route('admin.home');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function (){

        Auth::routes();
        Route::group(['middleware' => 'can:access-admin'], function (){
            Route::get('/home', 'HomeController@index')->name('home');
        });

});
