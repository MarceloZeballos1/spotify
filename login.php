<?php
include("conexion.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conexion, $_POST['nombre_usuario']);
    $password = mysqli_real_escape_string($conexion, $_POST['clave']);

    $sql = "SELECT * FROM login WHERE nombre_usuario = '$username'";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($row && password_verify($password, $row['clave'])) {
            header("Location: spotify/welcome.php");
            echo "Redirigiendo a welcome.php..."; // Agregar para depurar
            exit();
        } else {
            echo '<script>
                alert("Login erróneo. Usuario o contraseña inválidos");
                window.location.href = "index.php";
            </script>';
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz Similar a Spotify</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #191414; /* Color de fondo oscuro de Spotify */
    color: #fff; /* Texto blanco */
}

header {
    padding: 20px;
    background-color: #121212; /* Color de fondo de la barra de navegación */
    text-align: center;
}

header h1 {
    margin: 0;
}

main {
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

section {
    background-color: #212121; /* Color de fondo de las secciones */
    padding: 20px;
    margin: 0 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

h2 {
    margin-top: 0;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: none;
    background-color: #333; /* Color de fondo de los campos de entrada */
    color: #fff;
}

button.btn {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #1db954; /* Color del botón de Spotify */
    color: #fff;
    cursor: pointer;
}

button.btn:hover {
    background-color: #1ed760; /* Color del botón al pasar el ratón */
}

    </style>
</head>
<body>
    <header>
        
        <h1>Sistemas de Información II</h1>
    </header>
    <main>
        <section id="addSongForm">
            <h2>Agregar Nueva Canción</h2>
            <form action="add_song.php" method="POST">
                <div class="form-group">
                    <label for="songTitle">Título de la Canción:</label>
                    <input type="text" id="songTitle" name="songTitle" required>
                </div>
                <div class="form-group">
                    <label for="artist">Artista:</label>
                    <input type="text" id="artist" name="artist" required>
                </div>
                
                <button type="submit" class="btn">Agregar Canción</button>
            </form>
        </section>
        <section id="addPlaylistForm">
            <h2>Crear Nueva Lista de Reproducción</h2>
            <form action="create_playlist.php" method="POST">
                <div class="form-group">
                    <label for="playlistName">Nombre de la Lista de Reproducción:</label>
                    <input type="text" id="playlistName" name="playlistName" required>
                </div>
            
                <button type="submit" class="btn">Crear Lista de Reproducción</button>
            </form>
        </section>
    </main>
</body>
</html>



