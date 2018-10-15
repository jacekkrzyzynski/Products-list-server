<?php

Route::group(['prefix' => 'api', 'middleware' => 'api'], function() {

  Route::get('/', 'jacek80\bmserver\ProductsController@index');
  Route::post('/update', 'jacek80\bmserver\ProductsController@update');
  Route::post('/new', 'jacek80\bmserver\ProductsController@store');
  Route::post('/delete', 'jacek80\bmserver\ProductsController@destroy');
  
  Route::fallback(function() {
      return 'Error!';
  });

});

?>