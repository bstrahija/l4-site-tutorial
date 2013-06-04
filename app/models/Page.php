<?php namespace App\Models;

class Page extends \Eloquent {

	protected $table = 'pages';

	public function author()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

}

