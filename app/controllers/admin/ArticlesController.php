<?php namespace App\Controllers\Admin;

use App\Models\Article;

class ArticlesController extends \BaseController {

	/**
	 * Instance of article model
	 * @var Article
	 */
	protected $article;

	/**
	 * Inject article model
	 * @param Article $article
	 */
	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function index()
	{
		return \View::make('admin.articles.index')->with('articles', $this->article->all());
	}

	public function show($id)
	{
		return \View::make('admin.articles.show')->with('article', $this->article->find($id));
	}

	public function create()
	{
		return 'Create';
	}

	public function store()
	{
		return 'Store';
	}

	public function edit($id)
	{
		return 'Edit';
	}

	public function update($id)
	{
		return 'Update';
	}

	public function destroy($id)
	{
		return 'Destroy';
	}

}

