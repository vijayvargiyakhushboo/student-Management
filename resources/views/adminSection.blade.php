<html>
<head> 
	

	<title>Admin Section</title> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 
	 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</head> 
<body>
<div class="container">
  	<table style="margin:45px;padding: 10px">
		<tr><td><button class="btn btn-default" id="add_accountant">
		<a href="{{URL::route('add_account')}}"><b>Add Accountant</b></a></button>
		</td></tr>
	    <tr><td><button class="btn btn-default" id="view_accountant"><a href=""><b>View Accountant</b></a></button></td></tr>
	     <tr><td><button class="btn btn-default" id="go_logout"><a href=""><b>Logout</b></a></button></td></tr>
    </table>
</div>
</body> 
</html>