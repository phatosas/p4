<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','P4')
    </title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">
	<link href="/css/p4.css" rel="stylesheet">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <img
        src='http://mnmhotshots.com/Images/epo%20blue%20heads%20logo%20(1).png'
        style='width:300px'
        alt='P4 Logo'>
    </header>
	
	<nav>
		<ul>
			<li><a href='/employees'>View all employees</a></li>
			<li><a href='/employees/create'>Add a new employee</a></li>
		</ul>
    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
		@if(Session::get('flash_message') != null))
			<div class='flash_message'>{{ Session::get('flash_message') }}</div>
		@endif
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>