<?php
  include "./databaseconexion.php";
  $producto = $_POST['idproducto'];
  $fecha = $_POST['fecha_vencimineto'];
  $lote = $_POST['lote'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];
  $query="INSERT INTO `inventario_producto` (`id`, `producto_id`, `lote`, `fecha_vencimiento`, `cantidad`, `precio`)  VALUES (NULL, '{$_POST[idproducto]}', '{$_POST[lote]}', '{$_POST[fecha_vencimineto]}', '{$_POST[cantidad]}', '{$_POST[precio]}')";
  if (($result = mysqli_query($conn, $query)) === false) {
    die(mysqli_error($conn));
}

  echo $fecha;

 
?>

