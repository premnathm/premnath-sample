<?php
Route::get('/sample',function(){
    return 'sample';
});

$nameSpace = 'Premnath\Sample\HTTP\Controllers';
Route::group(['namespace'=>$nameSpace],function(){
    Route::get('sample1','SampleController@index');
});

