<?php namespace App\Controllers\Admin;

use App\Models\Page;

class PagesController extends \BaseController {

	/**
	 * Instance of article model
	 * @var Article
	 */
	protected $page;

	/**
	 * Inject page model
	 * @param Page $page
	 */
	public function __construct(Page $page)
	{
		$this->page = $page;
	}

	public function index()
	{
		return \View::make('admin.pages.index')->with('pages', $this->page->all());
	}

	public function show($id)
	{
		return \View::make('admin.pages.show')->with('page', $this->page->find($id));
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

