<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
<link href="{{asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <body>
<div class="container">
  	<table style="margin:45px;padding: 10px">
	<tr><td><button class="btn btn-default" id="admin_login">
<a href="{{URL::route('go_admin')}}"><b>Admin Login</b></a></button>
		  </td></tr>
	<tr><td><button class="btn btn-default" id="accountant_login"><a href="{{URL::route('go_account')}}"><b>Accountant Login</b></a></button></td></tr>
</table>
</div>
</body>