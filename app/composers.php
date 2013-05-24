<?php

View::composer('admin._layouts.*', function($view)
{
	if (Sentry::check()) $view->with('navigation', View::make('admin._partials.navigation'));
	else                 $view->with('navigation', null);
});
