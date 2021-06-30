<?php
$servername = "localhost";
$database = "inventario";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

<html>
  <head>
    <title>Formulario en php (Básico)</title>
  </head>
  <body>
    <form action="procesar.php" method="post">
      <select name="idproducto">
        <?php
        $consulta = "SELECT * FROM producto";
        $resultado = $conn->query($consulta);
        
        while ($fila = $resultado->fetch_row()) {
          echo "<option value='".$fila[0]."'>".$fila[1]."</option>";
      }
  
        ?>
        </select><br>
  
      <label for="idName">lote</label><input id="idName" name="lote" type="text"/><br>
      <label for="idfecha">fecha de vencimineto</label><input id="idfecha" name="fecha_vencimineto" type="text"/><br>
     <label for="idcantidad">cantidad</label> <input id="idcantidad" name="cantidad" type="text"/><br>
     <label for="idprecio">precio</label> <input id="idprecio" name="precio" type="text"/><br>
      <input type="submit" value="Envar">
    </form>
  </body>
</html>