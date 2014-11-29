@extends('layout')  
@section('title') Login @endsection  
@section('content')     
<div class="row">      
	<div class="col-xs-8 col-xs-offset-2">       
		<form class="form-signin" role="form" method="post">          
			<h2 class="form-signin-heading">Silahkan Login</h2>
			<?php if (Session::has('error')):?>
			<div class="alert alert-danger">           
				<button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>  
          <?php echo(Session::get('error')); ?>          
      </div>          
  <?php endif;?>
      <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>          
      <input type="password" name="password" class="form-control" placeholder="Password" required><br>          
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>        
  </form>      
</div>     
</div>  
@endsection  
