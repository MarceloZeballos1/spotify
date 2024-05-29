<?php include("conexion.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #121212; /* Dark background */
            color: #fff;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #form {
            background-color: #1e1e1e; /* Slightly lighter dark background */
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        img{
            width: 200px;
        }
        h1 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input[type="text"],
        input[type="password"] {
            background-color: #2c2c2c; /* Darker input background */
            border: none;
            color: #fff;
            padding: 0.75rem;
            border-radius: 4px;
            width: 100%;
            margin-bottom: 1rem;
        }
        input[type="submit"] {
            background-color: #1db954; /* Spotify green */
            border: none;
            padding: 0.75rem 1.5rem;
            margin-top: 1rem;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #1ed760;
        }
    </style>
</head>
<body>
    <div id="form">
        <img src="images/spotify.png" alt="logo">
        <h1>Bienvenido</h1>
        <form name="form" action="login.php" method="POST">
            <label for="nombre_usuario">Username:</label>
            <input type="text" id="password" name="nombre_usuario">

            <label for="clave">Password:</label>
            <input type="password" id="username" name="clave">

            <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>
</body>
</html>
