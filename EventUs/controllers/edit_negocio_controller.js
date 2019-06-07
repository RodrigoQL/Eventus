$(document).ready(function() {
	$('#submit').click(function(){
		$.post("../models/update_negocio.php",
		{
      id_negocio: $("#id_negocio").val(),
      id_location: $("#id_location").val(),
      name: $("#name").val(),
      description: $("#description").val(),
      logo: $("#logo").val(),
      categoria: $("#categoria").val(),
      latitud: $("#latitud").val(),
      longitud: $("#longitud").val(),
      colonia: $("#colonia").val(),
      calle: $("#calle").val(),
      numero: $("#numero").val(),
      step: $("#step").val()
    },
    function(data, status){
      window.location.href = "negocios.php";
		});
	})
});