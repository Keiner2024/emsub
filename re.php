<?php

include("conf.php");


$rol=$_POST['rol'];
$n=$_POST['n'];
$e=$_POST['email'];
$cc=$_POST['cc'];
$ide=$_POST['ide'];
$clave=$_POST['clave'];
$s=$_POST['s'];
$f=$_POST['f'];
$ni=$_POST['ni'];
$de=$_POST['de'];



$fo=$_POST['fo'];

$stm=mysqli_query($mysqli,"SELECT * FROM user WHERE rol='$rol'");
$c=mysqli_num_rows($stm);
if($c){header("Location:login.php?r=1");}else{

$sql="INSERT INTO user (rol,n,email,cc,ide,clave,s,f,ni,de) values('".$rol."','".$n."','".$e."','".$cc."','".$ide."','".$clave."','".$s."','".$f."','".$ni."','".$de."')";

$res=mysqli_query($mysqli,$sql);


if ($res){
    
    
   header("location:login.php?c=1");


}else {
    
    echo"tiene que llenar todos los campos ";
    

}
}





?>