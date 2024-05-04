
<?php
session_start();

$id=$_GET["id"];
$nom=$_GET["paciente"];
$us=$_SESSION['username'];
if($us !=""){
?>
<html>
    <head>
               <link rel="icon" type="image/x-icon" href="assets/co.png">
        <style>
        #content{
            border:solid 1px black;
            width:90%;
         
            font-family:sans-serif;
            font-size:1.1em;
        }
        #content img{
            width:10%;
            display:inline-block;
            float:left;
        } 
          #content p{
           
            display:inline-block;
            text-align:left;
            margin-left:0px;
            float:left;
        } 
        #wrap{
            text-align:left;
            border:solid 1px black;
            width:93%;
            
            padding:10px;
            
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
    
    #col{
        width:40%;
        display:inline-block;
        
    }
        </style>
        
        </head>
        <body>
                 <!--<div id="load"></div>-->
        <script>
        
const myTimeout = setTimeout(myGreeting, 9000);

function myGreeting() {
  document.getElementById("load").style.display = "none"
}


</script>
            <?php
            
              include('conf.php');
                $st=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$us'");
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
                        
                    include("conf.php");
                  $sl1=mysqli_query($mysqli,"SELECT * FROM lista WHERE nt='$ido'");
              $rs1=mysqli_fetch_array($sl1);
                    $per1=$rs1["nt"];
                       $mo=$rs1["m"];
                          $dl=$rs1["d"];
                           $te=$rs1["t"];
                          $no=$rs1["n"];
                          
                          $dia=$rs1["dia"];
                       $mes=$rs1["mes"];
                          $an=$rs1["an"];
                           $ho=$rs1["ho"];
                          $di=$rs1["di"];
                          $me=$rs1["me"];
                       $ano=$rs1["ano"];
                          $hor=$rs1["hor"];
                         
                          
              
                ?>  <center><div id="content">
                <span><img src="assets/logoe.jpg"></span><span><p>MINISTERIO DE DEFENSA<br>COMANDO GENERAL FUERZAS MILITARES <br>EJERCITO NACIONAL<br>ESCUELA MILITAR DE SUBOFICIALES <br> "SARGENTO INOCENCIO CHINCA"</p></span> <br><br> <br><br> <br><br><br> 
                <center>
                <div id="wrap">
                    El COMANDO DE LA UNIDAD AUTORIZA AL:<input type="text" readonly value="<?php echo $n;?>"> IDENTIFICADO CON C.C<input type="text" readonly value="<?php echo $cc;?>"> PARA SALIR DESDE EL DIA <input style="width:37px;" type="text" readonly value="<?php echo $dia;?>">  MES<input style="width:37px;" type="text" readonly value="<?php echo $mes;?>"> A&Ntilde;O <input  style="width:37px;" type="text" readonly value="<?php echo $an;?>">  A LAS <input style="width:60px;" type="text" readonly value="<?php echo $ho;?>"> HORAS. HASTA EL DIA <input style="width:37px;" type="text" readonly value="<?php echo $di;?>"> MES <input type="text" readonly value="<?php echo $me;?>" style="width:37px;"> A&Ntilde;O <input style="width:37px;" type="text" readonly value="<?php echo $ano;?>"> A LAS  <input style="width:60px;" type="text" readonly value="<?php echo $hor;?>"> HORAS 
                    <br><br>
                 
                <?php
              
  echo "DESTINO:<input type='text'readonly value='$dl'><br>";
                echo "MOTIVO:<input type='text'readonly value='$mo'><br>";
                 echo "TELS:<input type='text'readonly value='$te'><br>";
                   echo "NOMBRE DE CONTACTO:<input type='text'readonly value='$no'>TELEFONO DE CONTACTO:<input type='text'readonly value='$te'><br>";
                   echo"<center><br><br><br>";
                echo'<div id="col">';
                include("conf.php");
                $sl=mysqli_query($mysqli,"SELECT * FROM aut WHERE idc='$ido'  LIMIT 3");
                while($rs=mysqli_fetch_array($sl)){
                    $per=$rs["rol"];
                      $pero=$rs["nt"];
                      
                    if($pero=="Aprobar"){
                    echo "<button style='font-family:sans-serif;font-size:1.5em;background-color:green;color:white;padding:10px;border:none;'>Aprobado</button><br><br>";
                }else{echo"";}
                
                     if($pero=="Rechazar" && $rs["Aprobar"]>3){
                    echo "<button style='font-family:sans-serif;font-size:1.5em;background-color:red;color:white;padding:10px;border:none;'>Rechazado</button><br><br>";
                }else{echo"";}
                    
                
                   
                }
                ?> 
                </div>
                <?php
                       echo'<div id="col">';
                include("conf.php");
                $sl1=mysqli_query($mysqli,"SELECT * FROM aut WHERE idc='$ido' ORDER BY id DESC LIMIT 2 ");
                while($rs1=mysqli_fetch_array($sl1)){
                    $per1=$rs1["rol"];
                      $pero1=$rs1["nt"];
                      
                    if($pero1=="Aprobar"){
                    echo "<button style='font-family:sans-serif;font-size:1.5em;background-color:green;color:white;padding:10px;border:none;'>Aprobado</button><br><br>";
                }else{echo"";}
                $rsl=mysqli_num_rows($sl1);
                
                     if($pero1=="Rechazar"){
                    echo "<button style='font-family:sans-serif;font-size:1.5em;background-color:red;color:white;padding:10px;border:none;'>Rechazado</button><br><br>";
                }else{echo"";}
                
                
                   
                }
                ?> 
                </div>
                </center>
                </div>
                <?php }?>
                    </center>
         
                     <button onclick="window.print()" style="float:right;color:white;background-color:green;padding:10px;border:none;">IMPRESI&Oacute;N</button>
                </div></center>
            
            </body>
    
    
    </html>
       <?php }else{header("Location:index.php");}?>