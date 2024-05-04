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
$rol=$_POST['rol'];
$nt=$_POST['nt'];
$n=$_POST['n'];
$i=$_POST['i'];
$d=$_POST['d'];
$m=$_POST['m'];



$t=$_POST['t'];



$sql="INSERT INTO lista (dia,mes,an,ho,di,me,ano,hor,n,i,d,m,t,nt) values('".$dia."','".$mes."','".$an."','".$ho."','".$di."','".$me."','".$ano."','".$hor."','".$n."','".$i."','".$d."','".$m."','".$t."','".$nt."')";
$res=mysqli_query($mysqli,$sql);


if ($res){
    
    if($rol="a"){   header("location:inicio.php?c=1");}else{
   header("location:lista.php?c=1");
}

}else {
    
    echo"tiene que llenar todos los campos ";
    

}





?>