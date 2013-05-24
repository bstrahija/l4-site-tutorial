<?php namespace App\Services\Validators;

class ArticleValidator extends Validator {

	public static $rules = array(
		'title' => 'required',
		'body'  => 'required',
	);

}
