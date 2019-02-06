<?php
    $conector = new mysqli("localhost", "root", "", "Liga");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    else {
      $resultado = $conector->query("SELECT * FROM partido");
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
        <td>Partidos</td>
      </tr>
    </table>
      <?php
      foreach ($resultado as $partido) {

        echo "<td>".$partido['local']."</td>";
        echo "<br>";
        echo "<td>".$partido['id_partido']."</td>";
        echo "<br>";
        echo "<td>".$partido['visitante']."</td>";
        echo "<br>";
        echo "<td>".$partido['resultado']."</td>";
        echo "<br>";
        echo "<td>".$partido['fecha']."</td>";
        echo "<br>";
        echo "<td>".$partido['arbitro']."</td>";
        echo "<br>";


      }
      ?>
  </body>
</html>
