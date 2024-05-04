
<?php
session_start();

$id=$_GET["id"];
$nom=$_GET["paciente"];
$us=$_SESSION['username'];
if($us !=""){
?><html>
    <head>

       <link rel="icon" type="image/x-icon" href="assets/co.png">
<meta name="viewport" cotent="width=width-device,initial-scale=1.0">
        <style>
        *{padding:0;margin:0;}
        #he{
            width:100%;
            height:100%;
            background-image:url("em3.png");
             background-size:contain;
              background-repeat:no-repeat;
               background-position:center;
            
        }
        
 .slideshow { position:relative; width:100%; height:80%; margin-bottom:50px; word-wrap:break-word;}
.slideshow img { position:absolute; width:100%; height:100%; left:0; top:0; z-index:1;}
.slideshow p{ position:absolute; left:8%; z-index:2; font-family:sans-serif; color:white;font-size:4em; bottom:20%; }
@media(max-width:800px){
    
    .slideshow p{ position:absolute; left:8%; z-index:2; font-family:sans-serif; color:white;font-size:2.4em; bottom:20%; }
}
#foot{
    margin-top:120px;
    width:100%;
    height:600px;
    background-color:#6b9ad4;
    color:white;
}
#foot iframe{
    width:100%;
    height:279px;
    background-color:#6b9ad4;
    color:white;
}
#slide1{
    
    
    background-image:url("m1.png");
    background-size:contain;
    background-position:center;
    background-repeat:no-repeat;
    width:100%;
    height:100%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide2{
    
    
    background-image:url("m2.png");
    background-size:contain;
    background-position:center;
    background-repeat:no-repeat;
      width:100%;
   height:100%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide3{
    
    
    background-image:url("em3.png");
    background-size:contain;
    background-position:center;
    background-repeat:no-repeat;
      width:100%;
     height:100%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide4{
    
    
    background-image:url("em4.png");
    background-size:contain;
    background-position:center;
    background-repeat:no-repeat;
      width:100%;
  height:100%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide5{
    
    
    background-image:url("em5.png");
    background-size:contain;
    background-position:center;
    background-repeat:no-repeat;
      width:100%;
    height:100%;
    position:absolute;  left:0; top:0; z-index:1;
}
#nav{
    
    margin-top:20px;
    width:100%;
    height:100px;
    background-color:white;
    color:black;
    display:block;
    position:absolute;
    z-index:1;
    
}
#nav ul{
    width:40%;
    margin-left:60px;
    padding:20px;
    float:right;
    display:block;
    
}

@media(max-width:800px){
#nav ul{
    width:40%;
  
    padding:20px;
    float:right;
    display:block;
    
}    
}
@media(max-width:800px){
 #nav li{
    width:40%;
    margin-left:60px;
    padding:20px;
    float:right;
    display:none;
    
}   
}
    
    #nav li{
        padding:10px;
        display:inline-block;
    }  
    
@media(max-width:800px){
 #nav li{

    display:none;
    
}   
}
#cua {
        padding:10px;
        display:none;
    }  
    
@media(max-width:800px){
 #cua {

    display:block;
    
}   
}
 #lin {
       background-color:black;
      margin:10px;
       width:50px;
       height:6px;
       
        
    }
     #nav a{
       color:black;
        
    } 
         #nav img{
       margin-left:10px;
       margin-top:-40px;
       width:6%;
       height:100px;
       display:inline-block;
      float:left; 
        
    } 
    
       #p{
           font-family:sans-serif;
           font-size:1.7em;
            letter-spacing:6px;
           line-height:4px;
       }
       @media(max-width:800px){
            #p{
           font-family:sans-serif;
           font-size:1.3em;
            letter-spacing:6px;
           line-height:18px;
       }
       }
        #p2{
           font-family:sans-serif;
           font-size:1.1em;
            letter-spacing:3px;
           line-height:16px;
       }
       @media(max-width:800px){
            #p2{
           font-family:sans-serif;
           font-size:1em;
            letter-spacing:6px;
           line-height:23px;
       }
       }
        #p1{
           font-family:sans-serif;
           font-size:1em;
           letter-spacing:6px;
           line-height:4px;
       }
           *{padding:0;margin:0;}
    #cont{
        width:97%;
        display:block;
         padding:20px;
    margin-top:100px;
    }
     #contu{
        width:97%;
        display:block;
         padding:20px;
    margin-top:100px;
    }
    #cont form{
        width:90%;
      
          background-color:white;
    }
       #cont input{
        width:93%;
    height:35px;
      
    }
    #col{
        width:10%;
        margin:0px;
        display:inline-block;
        font-family:sans-serif;
        
        padding:12px;
    }
    #ag{
        display:none;
        background-color:rgba(0,0,0,0.10);
        width:100%;
        height:100%;
        position:fixed;
        z-index:10;
    }
     #re{
        display:none;
        background-color:rgba(0,0,0,0.10);
        width:100%;
        height:100%;
        position:fixed;
        z-index:10;
        top:0;
        left:-140px;
    }
    #res{
        margin-top:100px;
        width:50%;
        background-color:white;
        
    }
     #res textarea{
      width:90%;
      height:120px;
    }
    #per{display:none;background-color:rgba(0,0,0,0.17);position:fixed;z-index:1000;width:100%;height:100%;}
     #load{
        width:100%;
        height:100%;
        position:fixed;
        z-index:10000;
        display:block;
        background-color:white;
        background-image:url("assets/pre.gif");
        background-repeat:no-repeat;
        background-position:center;
        background-size:contain;
        top:0px;
        left:0px;
    }
        </style>
              
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        </head>


    
    <body>
         <div id="load"></div>
        <script>
        
const myTimeout = setTimeout(myGreeting, 9000);

function myGreeting() {
  document.getElementById("load").style.display = "none"
}


</script>
         <?php
    include("conf.php");
    $stn=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$us'");
    $ru=mysqli_fetch_array($stn);
    $roll=$ru["rol"];
    $ene=$ru["n"];
     $ema=$ru["email"];
      $ccl=$ru["cc"];
       $ider=$ru["id"];
        $cla=$ru["clave"];
         $ese=$ru["s"];
          $efe=$ru["f"];
           $nil=$ru["ni"];
            $des=$ru["de"];
            
    
    ?>
        <div id="per">
            <button onclick="pero()" style="background-color:red;color:white;padding:10px;border:none;">X</button>
            <br><br>
            <center>
            <div id="cont" style="font-family:'Courier New',monospace;width:60%;background-color:white;">
                <center><h2>Informacion de usuario</h2></center>
                <br>
                
               
                <form action="edipe.php" method="post">
                <input type="text" name="" value="<?php echo $roll;?>">  
                   <input type="text" name="" value="<?php echo $ene;?>">  
                      <input type="text" name="" value="<?php echo $ema;?>">  
                         <input type="text" name="" value="<?php echo $ccl;?>">  
                            <input type="text" name="" value="<?php echo $ider;?>">  
                               <input type="text" name="" value="<?php echo $cla;?>">  
                                  <input type="text" name="" value="<?php echo $ese;?>">  
                                     <input type="text" name="" value="<?php echo $efe;?>">  
                                        <input type="text" name="" value="<?php echo $nil;?>">
                                           <input type="text" name="" value="<?php echo $des?>">
                                           <input  type="submit" value="Enviar cambios" style="background-color:blue;color:white;">
                    </form>
                </div>
                </center>
            </div>
        <script>
      $(function () {
            $('.slideshow div').hide(); // hide all slides
                  $('.slideshow div:first-child').show(); // show first slide
                  setInterval(function () {
                        $('.slideshow div:first-child').fadeOut(500)
                              .next('div').fadeIn(1000)
                              .end().appendTo('.slideshow');
                  },
            3000); // slide duration
      });    
</script>        
<div id="nav">
   
<br><br><img src="assets/in.png">
<p id="p2">Plataforma de permisos y licencia para los alumnos de la escuela militar de suboficiales (Sargento Inocencio Chinca) </p>
<br>
<br>
<script>
function per(){
    var pe=document.getElementById("per");
    pe=document.getElementById("per").style.display="block";
    
}
</script>

<script>
function pero(){
    var per=document.getElementById("per");
    per=document.getElementById("per").style.display="none";
    
}
</script>
<p onclick="per()" style="background-color:black;color:white;padding:5px;font-family:'Courier New', monospace; font-size:1.3em;"><?php echo $ene;echo " ";if($roll=="cb"){echo "Comandante de battallon";}if($roll=="cc"){echo "Comandante de compa&ntilde;ia";}?>  <a href="logout.php" style="color:white;"> Salida</a><br></p> <br><br>

    <div id="cua">
        <div id="lin"></div>
        <div id="lin"></div>
        <div id="lin"></div>
        </div>

   
      
</div>

                
       <br><br>
                 <div id="ag">
             <script>
             function ab(){
                 var ab=document.getElementById("ag");
                 ab=document.getElementById("ag").style.display="block";
             }
             </script>
               <script>
             function abc(){
                 var abc=document.getElementById("ag");
                 abc=document.getElementById("ag").style.display="none";
             }
             </script>
             <button style="color:white;font-size:2em;background-color:red;float:right;" onclick="abc()">X</button>
        <br>
             <center>
             <div id="cont">
                 <div style="width:90%;height:50px;background-color:green;color:white;font-family:sans-serif;font-size:2em;"><center>Boleta de salida</center></div>
                 <form action="inse.php" method="post">
                     <input type="text" style="width:40px;" name="dia" placeholder="Dia">
                            <input type="text" name="mes" style="width:40px;"  placeholder="Mes">                  
                            <input type="text" style="width:40px;"  name="an" placeholder="A&ntilde;o"> 
                        <input type="text" style="width:40px;"  name="ho" placeholder="Hora "> <br>  
                        
                          <input type="text" style="width:40px;" name="di" placeholder="Dia">
                            <input type="text" name="me" style="width:40px;"  placeholder="Mes">                  
                            <input type="text" style="width:40px;"  name="ano" placeholder="A&ntilde;o"> 
                        <input type="text" style="width:40px;"  name="hor" placeholder="Hora "> <br>  
                            <label style="font-family:'Courier new', monospace; font-size:1.7em;">informaci&oacute;n diligenciada por el alumno </label>
                            
                     <input placeholder="Nombre " type="text" name="n" >
                            <input type="text" name="i" placeholder="No identificacion">
                                   <input type="text" name="d" placeholder="Destino">      
                                   <input type="text" name="m" placeholder="Motivo">   
                                   <input type="text" name="t" placeholder="Telefono"><br><br>
                                   <input type="submit" value="Registrar permiso" style="background-color:green;color:white;padding:10px;border:none;">
                                   
                     </form>
                 </div>
                 </center>
                </div>
                <br><br>
        <center>
            
        <div id="contu">
            <button style="float:left;color:white;background-color:blue;padding:10px;border:none;" onclick="ab()">Nuevo permiso</button>
             <button onclick="window.print()" style="float:right;color:white;background-color:green;padding:10px;border:none;">IMPRESI&Oacute;N</button>
 
           <br><br>
             <div id="col" style="width:11%;" >
               <strong> Estado</strong>
                </div>
            <div id="col" style="width:11%;" >
               <strong> Nombre</strong>
                </div>
                 <div id="col" style="width:11%;" >
               <strong>        No Identificacion</strong>
                </div>
                 <div id="col" style="width:11%;" >
                      <strong> Destino</strong>
                </div> <div id="col">
                  <strong>    Motivo</strong>
                </div> <div id="col" style="width:11%;" >
            <strong>          Telefono</strong>
           
           
                </div>
                 <div style="width:12%;" id="col">
                      <strong> Notificaciones</strong>
                </div>
                <hr style="width:100%; color:black;height:1px;">
                <br>
                <?php
                include("conf.php");
                $stm=mysqli_query($mysqli,"SELECT * FROM lista");
                while($row=mysqli_fetch_array($stm)){
                    $n=$row["n"];
                     $i=$row["i"];
                      $d=$row["d"];
                      $m=$row["m"];
                       $t=$row["t"];
                        $nt=$row["nt"];
                        $nt1=$row["nt"];
                         $dia=$row["dia"];
                       $mes=$row["mes"];
                          $an=$row["an"];
                           $ho=$row["ho"];
                          $di=$row["di"];
                          $me=$row["me"];
                       $ano=$row["ano"];
                          $hor=$row["hor"];
                            $id=$row["id"];
                            
                            echo'<div id="col">';
                            echo"<center>";
                             $st=mysqli_query($mysqli,"SELECT * FROM aut WHERE idc='$nt' ORDER BY id DESC");
                    if($r=mysqli_fetch_array($st)){
                        $nts=$r["nt"];
                        if($nts=="Rechazar"){
                            echo"<input type='submit' name='nt'  style='color:white; background-color:red; padding:10px;border:none;' value='Rechazado'>";
                            echo"<br>";   echo"<br>";   
                        }else{echo"";}
                      
                        if($nts=="Aprobar"){
                            echo"<a href='boleto.php?id=$nt'><input type='submit' name='nt'  style='display:inline-block;color:white; background-color:orange; padding:10px;border:none;' value='Aprobado'></a>";
                               echo"<br>";   echo"<br>";
                        }else{echo"";}
                        
                    }
                    echo "</center>";
                            echo'</div>';
                    echo' <div id="col">';
                    
                       echo"<button onclick='rey$nt()' style='width:40%;color:white; background-color:blue; padding:10px;border:none;' value='Rechazar'>Ver</button>";
                       echo"<style>#rey$nt{
        display:none;
        background-color:rgba(0,0,0,0.10);
        width:100%;
        height:100%;
        position:fixed;
        z-index:10;
        top:0;
        left:0px;
    }
    #resy$nt{
        margin-top:100px;
        width:50%;
        background-color:white;
        text-align:left;
    }
     #resy$nt input{
      width:90%;
      height:30px;
    }</style>";
    echo"   <script>
             function rey$nt(){
                 var ret=document.getElementById('rey$nt');
                 ret=document.getElementById('rey$nt').style.display='block';
             }
             </script>
               <script>
             function resy$nt(){
                 var rest=document.getElementById('rey$nt');
                 rest=document.getElementById('rey$nt').style.display='none';
             }
             </script>  ";
                       echo"<div id='rey$nt'>";
                        echo"<div id='resy$nt'>";
                        echo"<div style='color:white; background-color:green;width:97%;height:27px;padding:10px;text-align:left;'>Permiso en proceso</div>";
                        echo"<br><br>";
                         echo"<h4>Fecha reciente </h4>";
                         echo "salida:".$dia."/".$mes."/".$an."/".$ho."<br>LLegada".$di."/".$me."/".$ano."/".$hor;
                          echo"<br><br>";
                         
                 echo'<form action="permi.php" method="post">';
                                  echo"Confirmar fecha y hora de salida<br><r>";
                  echo'  Fecha de salida:<input type="text" style="width:40px;" name="dia" placeholder="Dia">
                            <input type="text" name="mes" style="width:40px;"  placeholder="Mes">                  
                            <input type="text" style="width:40px;"  name="an" placeholder="A&ntilde;o"> 
                        <input type="text" style="width:40px;"  name="ho" placeholder="Hora "> <br>  
                        
                          Fecha de entrada:<input type="text" style="width:40px;" name="di" placeholder="Dia">
                            <input type="text" name="me" style="width:40px;"  placeholder="Mes">                  
                            <input type="text" style="width:40px;"  name="ano" placeholder="A&ntilde;o"> 
                        <input type="text" style="width:40px;"  name="hor" placeholder="Hora "> <br> <br> <center> ';
                     echo "<input value='$nt'  type='hidden' name='id' >";        
                     echo "<input value='$n' readonly type='text' name='n' >";
                     echo "<input type='text' readonly name='i'value='$i'>";
                           echo "<input type='text' readonly name='d' value='$d'>";   
                                 echo "<input type='text' readonly name='m' value='$m'>";
                                   echo "<input type='text'name='t' readonly value='$t'><br><br>";
 echo "<input type='submit' value='Registrar permiso' style='width:30%;background-color:green;color:white;padding:10px;border:none;'>";
                   
                       
                     echo"</form>";
                      echo"<input onclick='resy$nt()' type='button' name='nt' style='display:inline-block;width:30%; padding:10px;border:none;' value='Cancelar'>";
                  echo"</center>";
               echo '</div>';
               echo '</div>';
                  echo "<p onclick='resy$nt()'>$n</p>";
               echo '</div>';
                  echo' <div id="col">';
                    
                  echo $i;
               echo '</div>';
                 echo' <div id="col">';
                    
                  echo $d;
               echo '</div>';
                 echo' <div id="col">';
                    
                  echo $m;
               echo '</div>';
                 echo' <div id="col">';
                    
                  echo $t;
               echo '</div>';
                 echo' <div style="width:150px;" id="col">';
                   
                 echo'<form action="notif.php" method="post">';
                                  echo"<center>";
                 echo"<input type='hidden' value='$nt' name='idc'>";
                    echo"<input type='hidden' value='$roll' name='rol'>";
          
                 
                    echo"<input type='submit' name='nt' style='display:inlie-block;float:right;color:white; background-color:green; padding:10px;border:none;' value='Aprobar'>";
                       
                          
                 
            
                   
                        echo"</center>";
                     echo"</form>";
                     
                       echo"<button onclick='re$nt()' style='diaplay:inline-block;float:left;color:white; background-color:red; padding:10px;border:none;' value='Rechazar'>rechazar</button>";
                       echo"<style>#re$nt{
        display:none;
        background-color:rgba(0,0,0,0.10);
        width:100%;
        height:100%;
        position:fixed;
        z-index:10;
        top:0;
        left:0px;
    }
    #res$nt{
        margin-top:100px;
        width:50%;
        background-color:white;
        text-align:left;
    }
     #res$nt textarea{
      width:90%;
      height:120px;
    }</style>";
    echo"   <script>
             function re$nt(){
                 var re=document.getElementById('re$nt');
                 re=document.getElementById('re$nt').style.display='block';
             }
             </script>
               <script>
             function res$nt(){
                 var res=document.getElementById('re$nt');
                 res=document.getElementById('re$nt').style.display='none';
             }
             </script>  ";
                       echo"<div id='re$nt'>";
                        echo"<div id='res$nt'>";
                        echo"<div style='color:white; background-color:red;width:97%;height:27px;padding:10px;text-align:left;'>Rechazar</div>";
                        echo"<br><br>";
                         echo"<h3>Motivo</h3>";
                          echo"<br><br>";
                 echo'<form action="notif.php" method="post">';
                                  echo"<center>";
                 echo"<input type='hidden' value='$nt' name='idc'>";
                    echo"<input type='hidden' value='$roll' name='rol'>";
          echo"<textarea name='mo' placeholder='Porque se le rechaza la peticion a este estudiante?'></textarea>";
                 
                    echo"<input type='submit' name='nt' style='display:inline-block;width:30%;color:white; background-color:red; padding:10px;border:none;' value='Rechazar'>";
                       
                          
                 
            
                   
                       
                     echo"</form>";
                      echo"<input onclick='res$nt()' type='button' name='nt' style='display:inline-block;width:30%; padding:10px;border:none;' value='Cancelar'>";
                  echo"</center>";
               echo '</div>';
               echo '</div>'; 
               echo '</div>';
               echo ' <hr style="width:100%; color:black;height:1px;">';
               
              
                }
                ?>
              
            </div>
            </center>
        </body>
    </html>
           <?php }else{header("Location:index.php");}?>