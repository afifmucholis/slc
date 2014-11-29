<!DOCTYPE html> <html> 
<head>   
	<meta charset="utf-8">   
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<title>@yield('title')</title>   
	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	@yield('style')
</head> 
<body>   
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">     
		<div class="container">     
			<a class="navbar-brand" href="{{URL::to('index')}}">SIS Learning Center</a> 
			<ul class="nav navbar-nav navbar-right">            
				<li>         
					<a href="{{URL::to('about')}}">About</a>       
				</li>       
				<li>         
					<a href="{{URL::to('login')}}">Login</a>       
				</li>     
			</ul>     
		</div>   
	</nav>   
	<div class="container" style="min-height: 520px;">   
		<div class="col-xs-offset-2 col-xs-8" id="content">     
			<div class="jumbotron text-center" style="background: none; margin-top:50px;">         
				   @yield('content')
				</div>   
			</div>   
		</div>  
				<div class="panel panel-default">       
					<div class="container">         
						<div class="panel-footer">         &copy; SLC 2014         
						</div>       
					</div>   
				</div> 
			</body> 
			</html>  