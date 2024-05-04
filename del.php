<?php
include("conf.php");

$id=$_POST["id"];
$rol=$_POST["rol"];
$mo=$_POST["mo"];

$stm=mysqli_query($mysqli,"INSERT INTO bajas (idc,rol,mo) VALUES('".$id."','".$rol."','".$mo."')");

if($stm){
    
$sql1 = "DELETE  FROM  user WHERE id=$id ";


if (mysqli_query($mysqli, $sql1)) {
 header("Location:admin.php?c=1");
}
}else{
    echo"";
}
?>