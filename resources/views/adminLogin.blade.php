<html>
<head> 
	

	<title>Login Template</title> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 
	 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</head> 
<body>
<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
		<div class="panel panel-info" > 
			<div class="panel-heading"> 
				<h4>Admin Login</h4>
			</div> 
			<div class="panel-body panel-pad"> 
				<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
					<form id="loginform" class="form-horizontal" role="form">
						<div class="input-group margT25"> 
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span> 
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email"> 
						</div> 
							<div class="input-group margT25"> 
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
								<input id="login-password" type="password" class="form-control" name="password" placeholder="password"> 
							</div> 
						<div class="input-group"> 
							<div class="checkbox"> 
								<label> 
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
								</label> 
							</div> 
						</div> 
						<div class="input-group"> 
							<div class="input-group"> 
								<label> 
												<input name="_token" hidden value="{!! csrf_token() !!}" />

									<input id="check_adminLogin" type="button" name="check_adminLogin" value="Submit"> 
								</label> 
							</div> 
						</div> 
					</form> 
				</div> 
			</div> 
		</div> 
		
</div> 
</body> 
</html>