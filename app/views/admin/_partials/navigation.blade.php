@if (Sentry::check())
	<ul class="nav">
		<li><a href="{{ URL::route('admin.pages.index') }}"><i class="icon-book"></i> Pages</a></li>
		<li><a href="{{ URL::route('admin.articles.index') }}"><i class="icon-edit"></i> Articles</a></li>
		<li><a href="{{ URL::route('admin.logout') }}"><i class="icon-lock"></i> Logout</a></li>
	</ul>
@endif
