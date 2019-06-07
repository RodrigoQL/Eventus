$(document).ready(function() {

	$('#submit').click(function(){

		$.post("../models/insert_paquete.php",
		{
      negocio: $("#negocio").val(),
      name: $("#name").val(),
      description: $("#description").val(),
      price: $("#price").val(),
      imagen: $("#imagen").val()
    },
    function(data, status){
      window.location.href = "paquetes.php";
		});
	})
});