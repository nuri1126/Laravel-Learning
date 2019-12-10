<!DOCTYPE html>
<html>
    <head>
<!--@yield('title', 'default')-->
        <title>@yield('title', 'laracast')</title>

    </head>
    <body>
    	<!--register a section for a content-->
    	@yield('content')
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </body>
</html>
