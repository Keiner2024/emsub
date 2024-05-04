<?php



include("conf.php");

if(isset($_POST['email'])&& !empty($_POST['email'])&& isset($_POST['clave'])&&!empty($_POST['clave']))
{
 $em=$_POST['email'];
$r=$_POST["rol"];
$sel=mysqli_query($mysqli,"SELECT email,clave,rol FROM user WHERE email='$_POST[email]'");

$sesion=mysqli_fetch_array($sel);

$r1=$sesion["rol"];
$mival1=$_POST['email'];
  $mival1= str_replace("\r\n", "<br>", $mival1);

$mival1= str_replace("{","", $mival1);
$mival1= str_replace("}","", $mival1);
$mival1= str_replace("+", "", $mival1);
$mival1= str_replace("*", "", $mival1);
$mival1= str_replace("<", "", $mival1);
$mival1= str_replace(">", "", $mival1);
$mival1= str_replace("&","", $mival1);
$mival1= str_replace("[","", $mival1);
$mival1= str_replace("]", "",$mival1);
$mival1= str_replace("(", "", $mival1);
$mival1= str_replace(")", "", $mival1);
$mival1= str_replace("/", "",$mival1);
$mival=$_POST['clave'];
  $mival= str_replace("\r\n", "<br>", $mival);

$mival= str_replace("{","", $mival);
$mival= str_replace("}","", $mival);
$mival= str_replace("+", "", $mival);
$mival= str_replace("*", "", $mival);
$mival= str_replace("<", "", $mival);
$mival= str_replace(">", "", $mival);
$mival= str_replace("&","", $mival);
$mival= str_replace("[","", $mival);
$mival= str_replace("]", "",$mival);
$mival= str_replace("(", "", $mival);
$mival= str_replace(")", "", $mival);
$mival= str_replace("/", "",$mival);
 

if($_POST['clave']==$sesion['clave'])
{
session_start();    
$_SESSION['username']=$_POST['email'];



if($r==$r1){
   if($r1=="a"){
          header("Location:inicio.php");
   }
   
    if($r1=="j"){
          header("Location:lista.php");
   }
    if($r1=="cc"){
          header("Location:lista.php");
   }
   
    if($r1=="c"){
          header("Location:lista.php");
   }
   
    if($r1=="cb"){
          header("Location:lista.php");
   }
   
    if($r1=="s"){
          header("Location:lista.php");
   }
     if($r1=="ad"){
          header("Location:admin.php");
   }
   
   
   

   


   
   
}else{header("Location:login.php");}









}else{
header("location:login.php?p=1");
}

}else{
header("location:login.php?p=2");

mysqli_close($mysql);

}

?>