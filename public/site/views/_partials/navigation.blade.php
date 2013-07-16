<nav id="nav">
	<ul>
		<li class="{{ (Route::is('home')) ? 'active' : null }}"><a href="{{ route('home') }}">Home</a></li>
		<li class="{{ (Route::is('page') and Request::segment(1) == 'about-us') ? 'active' : null }}"><a href="{{ route('page', 'about-us') }}">About us</a></li>
		<li class="{{ (Route::is('article.list') or Route::is('article')) ? 'active' : null }}"><a href="{{ route('article.list') }}">Blog</a></li>
		<li class="{{ (Route::is('page') and Request::segment(1) == 'contact') ? 'active' : null }}"><a href="{{ route('page', 'contact') }}">Contact</a></li>
	</ul>
</nav>
