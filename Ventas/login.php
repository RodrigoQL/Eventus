<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div align="center">
    <h1>Login</h1>
    <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Finspirationseek.com%2Fwp-content%2Fuploads%2F2016%2F02%2FCute-Dog-White-Pictures.jpg&f=1" height="200px">
    <form id="app-login" action="process.php">
        <fieldset>
        <legend>Login Details</legend>
        <div>
            <label for="user-name">Username:</label>
            <input name="user-name" type="email" placeholder="Your username is your email address" required autofocus>
         </div>
        <div>
            <label for="password">Password:</label>
            <input name="password" type="password" placeholder="6 digits, a combination of numbers and letters" required>
        </div>
        <div>
            <input class="btn btn-default" name="login" type="submit" value="Login">
        </div>
        </fieldset>
    </form>
</div>
</body>
</html>