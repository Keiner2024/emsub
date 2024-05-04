
<?php
session_start();

$id=$_GET["id"];
$nom=$_GET["paciente"];
$us=$_SESSION['username'];

if($us !=""){
  
?>
<html>
    <head>
               <link rel="icon" type="image/x-icon" href="co.png">
        <style>
        *{padding:0;margin:0;font-family:sans-serif;}
        #nav{
            width:100%;
                
            background-color:blue;
            height:37px;
            color:white;
            font-size:1.2em;
        }
                         <?php
             
                include('conf.php');
                $st2=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$us'");
                $ro2=mysqli_fetch_array($st2);
                    $n4=$ro2["fo"];
                    $idos=$ro2["id"];
                 
                        
                        
                  ?>
        #f{
            width:200px;
            height:200px;
            
            background-color:blue;
            background-image:url('<?php echo $n4; ?>');
            background-size:contain;
            background-position:center;
            background-repeat:no-repeat;
            border-radius:50%;
        }
        #seccion{
            width:100%
            height:300px;
            
            
        }
         #con{
            width:100%
            height:400px;
            padding:20px;
            
        }
        #cu{
            text-align:left;
            width:42%;
            padding:10px;
            border:solid 1px black;
            display:inline-block;
        }
        #cont{
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
      #ag1{
        display:none;
        background-color:rgba(0,0,0,0.10);
        width:100%;
        height:100%;
        position:fixed;
        z-index:10;
    }
        #w1{
            margin-top:10%;
            text-align:left;
            width:70%;
            padding:10px;
            border:solid 1px black;
            display:inline-block;
            background-color:white;
        }
        #b{
            width:70px;
            height:70px;
            border-radius:50%;
            display:inline-block;
        }
        #overlay{
            width:100%;
            height:100%;
            position:fixed;
            background-color:rgba(0,0,0,0.20);
            display:<?php if($_GET['c']>0||$_GET['confirm']>0){echo "block";}else{echo"none";}?>;
            z-index:10;
        }
        #ema{
            width:30%;
          
            background-color:white;
            color:black;
            font-family:sans-serif;
            padding:10px;
        }
        #ema input{
            width:90%;
            height:37px;
        }
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
      #qr{
            width:100%;
            height:100%;
            position:fixed;
            background-color:rgba(0,0,0,0.20);
            display:none;
            z-index:10000;
        }
        
        </style>
        
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
            $confirm=$_GET["c"];
            ?>
            <div id="overlay">
                <button onclick="claveoff()" style="float:right;color:white;padding:10px;background-color:red;order:0;">X</button>
                <br><br><br><br>
                <center>
                <div id="ema">
                    <?php 
                    if($_GET['confirm']>0){echo"<h2>Haz cambiado tu contrase&ntilde;a</h2>";}
                    ?>
                    <?php if($_GET["c"]=="2"){echo"<h2>las claves no concuerdan</h2> ";}else ?>
                    <form action="selp.php" method="post">
                        <input type="text" placeholder="Escribe la clave actual" name="clave">
                        <input type="hidden" name="id" value="<?php echo $idos;?>"> 
                        <input type="submit" style="color:white; font-family:sans-serif; background-color:blue;" value="verificar clave">
                    </form>                    
                    <?php
                    if($_GET["c"]=="1"){
                        echo"<h2>Actualizar tu clave</h2>";
                    echo"<form action='updp.php' method='post'>";
                    echo"<input type='hidden' value='$idos' name='id'>";
                        echo"<input type='password' placeholder='nueva clave' name='clave1'><br>";
                        echo"<input type='password' placeholder='vuelve a escribir la nueva clave' name='clave'>";
                        echo"<br>";
                        echo"<input type='submit' style='color:white;font-family:sans-serif;background-color:green;' value='cambiar contrase&ntilde;a'>";
                echo" </form>";
                    }
                    ?>
                    
                    </div>
                    </center>
                </div>
                 <?php
             
                include('conf.php');
                $st=mysqli_query($mysqli,"SELECT * FROM user WHERE email='".$_SESSION['username']."'");
                if($ro=mysqli_fetch_array($st)){
                    $n=$ro["n"];
                     $email=$ro["email"];
                      $ide=$ro["ide"];
                       $cc=$ro["cc"];
                       $c=$ro["clave"];
                       $s=$ro["s"];
                        $f=$ro["f"];
                        $ni=$ro["ni"];
                        $de=$ro["de"];
                        $ido=$ro["id"];
                        
                        
                  
                
                ?>
                <?php
                
                
                ?>
                    <script>
                        function qr1(){
                            var q=document.getElementById("qr");
                            q=document.getElementById("qr").style.display="none";
                        }
                           </script> 
                <div id="qr"> <button style="color:white;font-size:2em;background-color:red;float:right;" onclick="qr1()">X</button><br>
                    <br><br><br>
                    <center>
                        <?php
                         include('phpqrcode/phpqrcode/qrlib.php');

// URL of the web page you want to encode in the QR code

$url = "https://www.emsub.org/boleto.php?id=$ido";

// Generate the QR code and save it as a PNG image
QRcode::png($url, 'img/qrcode.png', QR_ECLEVEL_L, 4);

// Output the image in the HTML
echo '<img src="img/qrcode.png" alt="QR Code">';
                        
                        ?>
                        </center>
                    </div>
                <div id="ag1">
                    <center>
                        <script>
                        function qr(){
                            var q=document.getElementById("qr");
                            q=document.getElementById("qr").style.display="block";
                        }
                           </script> 
                         
                <div id="w1">
                    
                     <button style="color:white;font-size:2em;background-color:red;float:right;" onclick="sol()">X</button><br>
                 <?php
                 
                            include("conf.php");
                              $sto=mysqli_query($mysqli,"SELECT * FROM user WHERE id='$ido'");
              if($roo=mysqli_fetch_array($sto)){ 
                    $roli=$roo["rol"];
                       $edi=$roo["id"];
                     
              
                     $stou=mysqli_query($mysqli,"SELECT * FROM lista WHERE nt='$edi'");
              $roolr=mysqli_fetch_array($stou);
                    $rolilr=$roolr["rol"];
                       $edilr=$roolr["idc"];
                        $notilr=$roolr["nt"];
                        
                      
                        
               if($notilr){
                   
                        $stol=mysqli_query($mysqli,"SELECT * FROM aut WHERE nt='Aprobar' AND idc='$notilr' LIMIT 5");
              $rool=mysqli_num_rows($stol);
                    $rolil=$rool["rol"];
                       $edil=$rool["idc"];
                        $notil=$rool["nt"];
                   
         
                            
                         while($rool=mysqli_fetch_array($stol)){   
                            echo '<div id="b" style="background-color:green;"></div>';
                            
             
                         }

            $stos=mysqli_query($mysqli,"SELECT * FROM aut WHERE nt='Aprobar' AND idc='$notilr'");
              $roos=mysqli_num_rows($stos);
                    $rolis=$roos["rol"];
                       $edis=$roos["idc"];
                        $notis=$roos["nt"];
                   
          
                           
               
              if($roos>4){
                  echo $rool;
                  echo "Permiso aproado"; echo "<a href='boleto.php?id=$ido'><button style='background-color:green;color:white;padding:10px;'>ver boleto de salida</button></a> o ver <button onclick='qr()' style='background-color:black;color:white;padding:10px;'>QR</button> ";
                  
                 
                  
              }
               if($roos<5){echo "Permiso rechazado";}
                           
                          
               } 
                
               if($notilr){
            
                              
                        $stolu=mysqli_query($mysqli,"SELECT * FROM aut WHERE nt='Rechazar' AND idc='$notilr' LIMIT 5");
              $roolu=mysqli_num_rows($stolu);
                    $rolilu=$roolu["rol"];
                       $edilu=$roolu["idc"];
                        $notilu=$roolu["nt"];
                   
         
                          if($roos>4){echo"";} else{  while($roolu=mysqli_fetch_array($stolu)){   
                            echo '<div id="b" style="background-color:red;"></div>';
                            
             
                         }
                              
                          }  
                       

            $stosu=mysqli_query($mysqli,"SELECT * FROM aut WHERE nt='Rechazar' AND idc='$notilr'");
              $roosu=mysqli_num_rows($stosu);
                    $rolisu=$roosu["rol"];
                       $edisu=$roosu["idc"];
                        $notisu=$roosu["nt"];
                   
          
                           
               
              if($roosu>4){
             
                  
                  echo"Rechazado";
              }
               } 
             }
             ?>
                     
                    
                     <!--<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https%3A%2F%2Fwww.emsub.com%2Fboleto.php&choe=UTF-8" />-->
                     
                     </div></center>
                </div>
               
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
              <script>
             function so(){
                 var so=document.getElementById("ag1");
                 so=document.getElementById("ag1").style.display="block";
             }
             </script>
               <script>
             function sol(){
                 var sol=document.getElementById("ag1");
                 sol=document.getElementById("ag1").style.display="none";
             }
             </script>
             <button style="color:white;font-size:2em;background-color:red;float:right;" onclick="abc()">X</button>
        <br>
             <center>
             <div id="cont">
                 <div style="width:90%;height:50px;background-color:green;color:white;font-family:sans-serif;font-size:2em;"><center>Boleta de salida</center></div>
                 <form action="inse.php" method="post">
                     
                            <label style="font-family:'Courier new', monospace; font-size:1.7em;">Diligenciar salida </label>
                            <?php
                            include("conf.php");
                              $st1=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$us'");
                $ro1=mysqli_fetch_array($st1);
                    $rol=$ro1["rol"];
                       $ed=$ro1["id"];
                
                            ?>
                            <input type="hidden" name="nt" value="<?php echo $ed;?>">
                               <input type="hidden" name="rol" value="<?php echo $rol;?>">
                     <input type="text" name="n" placeholder="Nombre">
                            <input type="text" name="i" placeholder="No identificacion">
                                   <input type="text" name="d" placeholder="Destino">      
                                   <input type="text" name="m" placeholder="Motivo">   
                                   <input type="text" name="t" placeholder="Telefono"><br><br>
                                   <input type="submit" value="Registrar permiso" style="background-color:green;color:white;padding:10px;border:none;">
                                   
                     </form>
                 </div>
                 </center>
                </div>
            <div id="nav">
                  <a href="logout.php">
                    <button style="color:white;background-color:red;border:none;padding:10px;float:right;">X</button></a>
             
                </div>
           
                <center>
                    <div id="f">
                        <form method="post" enctype="multipart/form-data" action="fot.php">
                            
                            <input type="hidden" name="id" value="<?php echo $ed;?>">
                            <input name="fo" accept="image/*" capture="camera"  type="file" placeholder="fecha">
                            <input type="submit" value="subir foto">
                            </form>
                        </div>
                        <br>
                        <center>
                        <h2><?php echo $n;?></h2><br>
                        <h3><?php echo $cc;?></h3>
                        </center>
                    </center>
                    <div id="seccion">
                        <br><br>
                        <button onclick="ab()" style="color:white; margin-left:10%;margin-top:-100px;width:100px;float:left;background-color:blue;padding:10px;border:none;">Diligenciar salida</button>
                        <?php 
                        include("conf.php");
                        $stmn=mysqli_query($mysqli,"SELECT * FROM user WHERE email='".$_SESSION['username']."' ");
                        while($ros=mysqli_fetch_array($stmn)){
                            
                            
                        
                        ?>
                        <!--<a href="boleto.php">-->
                        <button onclick="so()" style="color:white; margin-right:10%;margin-top:-100px;width:100px;float:right;background-color:blue;padding:10px;border:none;">ver solicitud</button><br>
                        <!--</a>-->
                        <br>
           
<br>                        </div>
                        <br>
                        <center>
                            <div id="cu" style="border:none;">Informaci&oacute;n b&aacute;sica</div>
                             <div id="cu" style="border:none;">Informaci&oacute;n adicional</div>
                        <div id="cu">
                            <br>
                           <strong> Nombre: <?php echo $n;?> </strong><br>
                            <hr style="width:97%;">
                            <br>
                           <strong>   Direccion: <?php echo $email;?></strong><br>
                            <hr style="width:97%;">
                            <br>
                              <strong>Id de estudiante:<?php echo $ide;?></strong><br>
                            <hr style="width:97%;">
                            <br>
                            <script>
                            function clave(){
                                var cla=document.getElementById("overlay");
                                  cla=document.getElementById("overlay").style.display="block";
                            }
                            </script>
                              <script>
                            function claveoff(){
                                var cla=document.getElementById("overlay");
                                  cla=document.getElementById("overlay").style.display="none";
                            }
                            </script>
                              <strong>Contrase&ntilde;a:<?php echo $c;?><p style="text-decoracion:underline;" onclick="clave()">Cambiar clave </p></strong><br>
                            <hr style="width:97%;">
                            </div> 
                            <div id="cu">
                                 <br>
                           <strong> Sexo: <?php echo $s;?></strong><br>
                            <hr style="width:97%;">
                            <br>
                           <strong>   Fecha  de nacimiento:<?php echo $f;?></strong><br>
                            <hr style="width:97%;">
                            <br>
                              <strong>Nivel de educacion:<?php echo $ni;?></strong><br>
                            <hr style="width:97%;">
                            <br>
                              <strong>Destino:<?php echo $de;?></strong><br><br><br>
                            <hr style="width:97%;">
                            </div>
                            </center>
                             <?php   } ?>
                            <?php }?>
                            
            </body>
    </html>
        <?php }else{header("Location:index.php");}?>
        