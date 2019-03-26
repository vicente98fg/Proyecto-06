<?php

$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: (".$conector->connect_errno.")" . $conector->connect_error;
} else {
    $consulta="SELECT * FROM usuarios";
    $resultado = $conector->query($consulta);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" media="screen" href="proyecto6.css" />
</head>
<body>
  
<ul>
  <li><a class="active" href="proyecto6.php">Indice</a></li>
  <li><a href="proyecto6lista.php">Listado Jugadores</a></li>
</ul>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>ID</b></td>
    <td><b>Nombre</b></td>
    <td><b>Apellidos</b></td>
    <td><b>Edad</b></td>
    <td><b>Curso</b></td>
    <td><b>Puntuación</b></td>
  </tr>

  <?php
    foreach ($resultado as $usuarios) {
      echo "<tr>";
      echo "<td>".$usuarios['id']."</td>";
      echo "<td>".$usuarios['nombre']."</td>";
      echo "<td>".$usuarios['apellidos']."</td>";
      echo "<td>".$usuarios['edad']."</td>";
      echo "<td>".$usuarios['curso']."</td>";
      echo "<td>".$usuarios['puntuacion']."</td>";
      echo "</tr>";
    }

  ?>

</table>


</body>
</html>