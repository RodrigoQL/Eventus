$(document).ready(function() {

	$('#submit').click(function(){

		$.post("../models/submit_login.php",
		{
			username: $("#username").val(),
			password: $("#password").val()
        },
        function(data, status){
            var typeId = parseInt(data);
            if (typeId) {
                if (typeId == 1) {
                    window.location.href = "admin.php";
                } else if (typeId == 2) {
                    window.location.href = "business_manage.php";
                } else if (typeId == 3){
                    window.location.href = "user.php";
                }
            } else {
                $("#alert").text("Credenciales Incorrectas");
            }
		});
	})
});