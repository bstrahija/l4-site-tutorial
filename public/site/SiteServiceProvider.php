<?php namespace App\Site;

class SiteServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function boot()
	{
		$this->package('app/site', 'site', public_path() . '/site');
	}

	public function register()
	{
		require public_path() . '/site/routes.php';
	}

}
