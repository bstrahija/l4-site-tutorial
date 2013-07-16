<?php

// Home page
Route::get('/', array('as' => 'home', function()
{
	return View::make('site::index')->with('entry', Page::where('slug', 'welcome')->first());
}));

// Article list
Route::get('blog', array('as' => 'article.list', function()
{
	return View::make('site::articles')->with('entries', Article::orderBy('created_at', 'desc')->get());
}));

// Single article
Route::get('blog/{slug}', array('as' => 'article', function($slug)
{
	$article = Article::where('slug', $slug)->first();

	if ( ! $article) App::abort(404, 'Article not found');

	return View::make('site::article')->with('entry', $article);
}));

// Single page
Route::get('{slug}', array('as' => 'page', function($slug)
{
	$page = Page::where('slug', $slug)->first();

	if ( ! $page) App::abort(404, 'Page not found');

	return View::make('site::page')->with('entry', $page);

}))->where('slug', '^((?!admin).)*$');

// 404 Page
App::missing(function($exception)
{
	return Response::view('site::404', array(), 404);
});


