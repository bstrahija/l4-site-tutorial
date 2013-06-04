<?php namespace App\Models;

class Article extends \Eloquent {

	protected $table = 'articles';

	public function author()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

}

