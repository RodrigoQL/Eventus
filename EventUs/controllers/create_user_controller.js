$(document).ready(function() {

	$('#submit').click(function(){

		$.post("../models/insert_user.php",
		{
			username: $("#username").val(),
            password: $("#password").val(),
            name: $("#name").val(),
            lastname: $("#lastname").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
        },
        function(data, status){
            window.location.href = "login.php";
		});
	})
});