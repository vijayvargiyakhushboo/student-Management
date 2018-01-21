$(document).ready(function() {
$("#check_adminLogin").click(function(){
var usr_name = $("#login-username").val();
var password = $("#login-password").val();
var token=$('input[name=_token]').val();
        $.ajax({
				url:"check/Login",
				type:"POST",
				data:{'usr_name':usr_name,'password':password,'_token':token},
				success :function(data)	{
					if(data== 500){
                       alert("Enter right user name and password.");
					}
				},
				error: function() {
					//loaderHide();
					alert('Error...');
				}
		    });
        });
});