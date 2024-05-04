<?php
include("conf.php");
$id=$_POST["id"];
$clave=$_POST["clave"];

$stm=mysqli_query($mysqli,"SELECT clave FROM user WHERE id='$id'");
$row=mysqli_fetch_array($stm);
$c=$row["clave"];
    if($c==$clave){
        header("Location:inicio.php?c=1");
    }else{header("Location:inicio.php?c=2");}

?>