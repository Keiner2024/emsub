<?php

include("conf.php");





$n=$_POST['idc'];
$i=$_POST['nt'];
$mo=$_POST['mo'];
$rol=$_POST['rol'];




$sql="INSERT INTO aut (idc,nt,rol,mo) values('".$n."','".$i."','".$rol."','".$mo."')";
$res=mysqli_query($mysqli,$sql);


if ($res){
    
    
   header("location:lista.php?d=1");


}else {
    
    echo"tiene que llenar todos los campos ";
    

}





?>