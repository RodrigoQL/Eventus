<?php
	include("resources/data/UserDataProvider.php");
	include("resources/helpers/UserHelpers.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crear Usuario</title>
</head>
<?php
	$username = "";
	$password = "";
	$name = "";
	$lastname = "";
	$phone = "";
	$email = "";
	if($_POST['send']){
		$username= $_POST['username'];
		$password= $_POST['password'];
		$name= $_POST['name'];
		$lastname= $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$result = CreateUser($username, $password, $name, $lastname, $email, $phone, 1);
		if ($result){
			$resultText = "Usuario Creado";
			$name = "";
			$lastname = "";
			$username = "";
			$password = "";
			$phone = "";
			$email = "";
		}
	}
?>

<body>
	<h1>Crear Usuario</h1>

	<div class="altas">
		<form class="report" action="CreateUser.php" method="post" id="reportForm">
			Nombre: <input type="text" name="name" value="<?php echo $name; ?>"><?php echo $nameValidation; ?><br>
			Apellido(s): <input type="text" name="lastname" value="<?php echo $lastname; ?>"><?php echo $lastnameValidation; ?><br>
			Usuario: <input type="text" name="username" value="<?php echo $username; ?>"><?php echo $userValidation; ?><br>
			Contraseña: <input type="password" name="password" value="<?php echo $password; ?>"><?php echo $passwordValidation; ?><br>
			Teléfono: <input type="text" name="phone" value="<?php echo $phone; ?>"><?php echo $phoneValidation; ?><br>
			Correo: <input type="text" name="email" value="<?php echo $email; ?>"><?php echo $emailValidation; ?><br>
			<input type="submit" name="send" value="Alta">
		</form>
	</div>
	<div class="resultado">
		<p>
			<?php echo $resultText;?>
		</p>
	</div>
	
	
</body>
</html>