<?php

Route::get('/', array('as' => 'home', function() {
	return View::make('site::index');
}));
