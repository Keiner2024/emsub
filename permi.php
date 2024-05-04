<?php

include("conf.php");



$dia=$_POST['dia'];
$mes=$_POST['mes'];
$an=$_POST['an'];
$ho=$_POST['ho'];
$di=$_POST['di'];
$me=$_POST['me'];
$ano=$_POST['ano'];
$hor=$_POST['hor'];

$id=$_POST['id'];


$t=$_POST['t'];

$sql1 = "UPDATE lista SET dia='$dia', mes='$mes', an='$an',ho='$ho', di='$di', me='$me', ano='$ano', hor='$hor' WHERE nt=$id ";


if (mysqli_query($mysqli, $sql1)) {
     



  header("Location:lista.php");
} else {
    echo "Error updating record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);




?>