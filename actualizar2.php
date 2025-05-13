<?php
include 'db.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$sql = "UPDATE publicaciones SET titulo='$titulo', contenido='$contenido' WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: inicio.html");
?>
