<!DOCTYPE html>
<html lang="en">
     <title> @yield('title')</title>
	<head>
	
		@include('layouts.head')
		@include('layouts.bootstrap')
	
	</head>
	
	<body>
 
		@include('layouts.header')
  
		<div class="container">
			
			
			@yield('content')


		</div> <!-- kraj .container -->


    
	</body>
</html>