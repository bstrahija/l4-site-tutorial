<nav>
	<ul>
		<li><a href="{{ URL::route('home') }}">Home</a></li>
		<li><a href="{{ URL::route('page', 'about-us') }}">About us</a></li>
		<li><a href="{{ URL::route('article.list') }}">Blog</a></li>
		<li><a href="{{ URL::route('page', 'contact') }}">Contact</a></li>
	</ul>
</nav>
