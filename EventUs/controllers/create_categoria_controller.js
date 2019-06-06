$(document).ready(function() {

	$('#submit').click(function(){

		$.post("../models/insert_categoria.php",
		{
      name: $("#name").val(),
      description: $("#description").val(),
    },
    function(data, status){
      window.location.href = "categorias_negocios.php";
		});
	})
});