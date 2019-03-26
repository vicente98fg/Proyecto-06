<?php

$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: (".$conector->connect_errno.")" . $conector->connect_error;
} else {
    $consulta="INSERT INTO usuarios (id, nombre, apellidos, edad, curso, puntuacion) VALUES ('1', 'prueba', 'pruebas', '11', '1', '0')";
    //echo $consulta;
    $consulta="SELECT * FROM usuarios WHERE id=1";
    $resultado = $conector->query($consulta);
}

?>

<!DOCTYPE html>
<link rel="stylesheet" href="proyecto6.css"/>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    
    <ul>
        <li><a class="active" href="proyecto6.php">Indice</a></li>
        <li><a href="proyecto6lista.php">Listado Jugadores</a></li>
    </ul>

    <script src="proyecto6.js">
    </script>

    <div id=titulo>MicroRobots</div>

    <form action="">

        <?php
        foreach ($resultado as $usuarios) {
            echo "<p style='text-align: center'><b>Jugador: </b>".$usuarios['nombre']." ".$usuarios['apellidos']."</p>";
            echo "<p style='text-align: center'><b>Puntuación Max: </b>".$usuarios['puntuacion']."</p>";
        }

        ?>

        <p style="text-align: center">Siguiente fila:
        <input id= "sig" type="text"></p>
        <p style="text-align: center">Siguiente columna:
        <input id= "sig2" type="text"></p>
        <p style="text-align: center"><input type="submit" type="button" value="Comprobar movimiento" onClick="comprobarMovimiento();"></p>
        <p style="text-align: center">Movimientos realizados:
        <input id= "mov" type="movimientos" value=""></p>
        <p style="text-align: center">Número de movimientos:
        <input type="nummov" value=""></p>
        <p style="text-align: center"><input id="reiniciar" type="button" value="Reiniciar tablero" onClick="window.location.reload()"></p>
        
    </form>
    
    
</body>
</html>