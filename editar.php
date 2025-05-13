<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM publicaciones WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2>Editar publicación</h2>
<form action="actualizar.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required><br><br>
  <textarea name="contenido" required><?php echo $row['contenido']; ?></textarea><br><br>
  <button type="submit">Actualizar</button>
</form>

