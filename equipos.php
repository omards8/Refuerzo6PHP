<?php
    $conector = new mysqli("localhost", "root", "", "Liga");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    else {
      $resultado = $conector->query("SELECT * FROM equipo");
    }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <table>
        <tr>
          <td>Equipos</td>
        </tr>
      </table>
      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<br>";
        echo "<td>".$equipo['id_equipo']."</td>";
        echo "<br>";
        echo "<td>".$equipo['ciudad']."</td>";
        echo "<br>";
        echo "<td>".$equipo['puntos']."</td>";
        echo "<br>";
        echo "<tr>";
      }
      ?>
  </body>
</html>
