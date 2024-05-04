<?php
include("conf.php");
$id=$_POST["id"];
$rutaEnServidor='img';
$rutaTemporal=$_FILES['fo']['tmp_name'];
$nombreImagen=$_FILES['fo']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;


$sql1 = "UPDATE user SET fo='$rutaDestino' WHERE id=$id ";


if (mysqli_query($mysqli, $sql1)) {
     
move_uploaded_file($rutaTemporal,$rutaDestino);



  header("Location:inicio.php");
} else {
    echo "Error updating record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
?>