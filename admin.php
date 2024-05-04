
<?php
session_start();

$id=$_GET["id"];
$nom=$_GET["paciente"];
$us=$_SESSION['username'];
if($us !=""){
?><html>
    <head>

       <link rel="icon" type="image/x-icon" href="co.png">
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
        word-wrap:break-word;
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
    
    #me{width:30%;height:120p;font-family:sans-serif;font-size:1.6em;color:white;background-color:green;position:fixed;z-index:1000;top:0;left:40%; animation-duration:4s; display:block;animation-name:fue;}
   #load{
        width:100%;
        height:100%;
        position:fixed;
        z-index:10000;
        display:block;
        background-color:white;
        background-image:url("pre.gif");
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
        <script>
        function ve(){
            var ve=document.getElementById('me');
            ve=document.getElementById('me').style.display="none";
        }
        </script>
        <?php
        if($_GET["c"]>0){echo "<div id='me'><button style='color:white;background-color:green;padding:10px;float:right;' onclick='ve()'>X</button>Se elimin&oacute; el usuario</div>";}
        ?>
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
                
                <hr style="width:100%; color:black;height:1px;">
                <br>
                <?php
                include("conf.php");
                $stm=mysqli_query($mysqli,"SELECT * FROM user");
                while($row=mysqli_fetch_array($stm)){
                   $n=$row["n"];
                     $email=$row["email"];
                      $ide=$row["ide"];
                       $cc=$row["cc"];
                       $c=$row["clave"];
                       $s=$row["s"];
                        $f=$row["f"];
                        $ni=$row["ni"];
                        $de=$row["de"];
                        $idol=$row["id"];
                         $rose=$row["rol"];
                        
                            echo'<div id="col">';
                            echo"<center>";
if($rose=="cc"){echo "Comandante de compañia";}
if($rose=="cb"){echo "Comandante de batallon";}
if($rose=="a"){echo "Alumno";}
if($rose=="ad"){echo "Administrador";}
if($rose=="j"){echo "Jefe";}
if($rose=="c"){echo "Cepse";}
if($rose=="s"){echo "Suboficial de servicio";}
                    echo "</center>";
                            echo'</div>';  
                            echo'<div id="col">';
                            echo"<center>";

                    echo "</center>";
                            echo'</div>';
                    echo' <div id="col">';
                  
                       
               echo '</div>';
               echo '</div>';
                  echo "<p onclick='resy$nt()'>$n</p>";
               echo '</div>';
                  echo' <div id="col">';
                  
                  echo $email;
               echo '</div>';
                 echo' <div id="col">';
                    
                  echo $ide;
               echo '</div>';
                 echo' <div id="col">';
                    
                  echo $cc;
               echo '</div>';
                 echo' <div id="col">';
                    
                  echo $c;
               echo '</div>';
                 echo' <div style="width:150px;" id="col">';
                   
             
                     
                       echo"<button onclick='re$idol()' style='diaplay:inline-block;float:left;color:white; background-color:red; padding:10px;border:none;' value='Rechazar'>ELIMINAR</button>";
                       echo"<style>#re$idol{
        display:none;
        background-color:rgba(0,0,0,0.10);
        width:100%;
        height:100%;
        position:fixed;
        z-index:10;
        top:0;
        left:0px;
    }
    #res$idol{
        margin-top:100px;
        width:50%;
        background-color:white;
        text-align:left;
    }
     #res$idol textarea{
      width:90%;
      height:120px;
    }</style>";
    echo"   <script>
             function re$idol(){
                 var re=document.getElementById('re$idol');
                 re=document.getElementById('re$idol').style.display='block';
             }
             </script>
               <script>
             function res$idol(){
                 var res=document.getElementById('re$idol');
                 res=document.getElementById('re$idol').style.display='none';
             }
             </script>  ";
                       echo"<div id='re$idol'>";
                        echo"<div id='res$idol'>";
                        echo"<div style='color:white; background-color:red;width:97%;height:27px;padding:10px;text-align:left;'>Eliminar usuario </div>";
                        echo"<br><br>";
                         echo"<h3>Motivo</h3>";
                          echo"<br><br>";
                 echo'<form action="del.php" method="post">';
                                  echo"<center>";
                 echo"<input type='hidden' value='$idol' name='id'>";
                    echo"<input type='hidden' value='$roll' name='rol'>";
          echo"<textarea name='mo' placeholder='Por qu&eacute; se elimina  a este usuario?'></textarea>";
                 
                    echo"<input type='submit' name='nt' style='display:inline-block;width:30%;color:white; background-color:red; padding:10px;border:none;' value='Eliminar'>";
                       
                          
                 
            
                   
                       
                     echo"</form>";
                      echo"<input onclick='res$idol()' type='button' name='nt' style='display:inline-block;width:30%; padding:10px;border:none;' value='Cancelar'>";
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