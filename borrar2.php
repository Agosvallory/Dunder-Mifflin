<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM publicaciones WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: inicio.html");
?>

