<?php
include("conf.php");
$c=$_POST["clave"];
$id=$_POST["id"];



$sql1 = "UPDATE user SET clave='$c' WHERE id=$id ";


if (mysqli_query($mysqli, $sql1)) {
     



  header("Location:inicio.php?confirm=1");
  
} else {
    echo "Error updating record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>