$(document).ready(function() {

	$('#submit').click(function(){

		$.post("../models/update_categoria.php",
		{
      id: $("#id").val(),
      name: $("#name").val(),
      description: $("#description").val(),
    },
    function(data, status){
      window.location.href = "categorias_negocios.php";
		});
	})
});