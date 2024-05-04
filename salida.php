
<?php
session_start();

$id=$_GET["id"];
$nom=$_GET["paciente"];
$us=$_SESSION['username'];

?>
<html>
    <head>
               <link rel="icon" type="image/x-icon" href="co.png">
        <style>
        #content{
            border:solid 1px black;
            width:90%;
            height:80%;
            font-family:sans-serif;
            font-size:1.1em;
        }
        #content img{
            width:10%;
            display:inline-block;
        } 
          #content p{
           
            display:inline-block;
        } 
        #wrap{
            text-align:left;
            border:solid 1px black;
            width:93%;
            height:62%;
            padding:10px;
            
        }
       
        </style>
        
        </head>
        <body>
            <?php
            
              include('conf.php');
                $st=mysqli_query($mysqli,"SELECT * FROM user WHERE id='$id'");
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
                  $sl1=mysqli_query($mysqli,"SELECT * FROM lista WHERE nt='$id'");
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
                         
                          
                
                ?><div id="content">
                <span><img src="logoe.jpg"></span><span><p>MINISTERIO DE DEFENSA<br>COMANDO GENERAL FUERZAS MILITARES <br>EJERCITO NACIONAL<br>ESCUELA MILITAR DE SUBOFICIALES <br> "SARGENTO INOCENCIO CHINCA"</p></span>
                <center>
                <div id="wrap">
                    El COMANDO DE LA UNIDAD AUTORIZA AL:<input type="text" readonly value="<?php echo $n;?>"> IDENTIFICADO CON C.C<input type="text" readonly value="<?php echo $cc;?>"> PARA SALIR DESDE EL DIA <input style="width:37px;" type="text" readonly value="<?php echo $dia;?>">  MES<input style="width:37px;" type="text" readonly value="<?php echo $mes;?>"> A&Ntilde;O <input  style="width:37px;" type="text" readonly value="<?php echo $an;?>">  A LAS <input style="width:60px;" type="text" readonly value="<?php echo $ho;?>"> HORAS. HASTA EL DIA <input style="width:37px;" type="text" readonly value="<?php echo $di;?>"> MES <input type="text" readonly value="<?php echo $me;?>" style="width:37px;"> A&Ntilde;O <input style="width:37px;" type="text" readonly value="<?php echo $ano;?>"> A LAS  <input style="width:60px;" type="text" readonly value="<?php echo $hor;?>"> HORAS 
                    <br><br>
                    
                <?php
              
  echo "DESTINO:<input type='text'readonly value='$dl'><br>";
                echo "MOTIVO:<input type='text'readonly value='$mo'><br>";
                 echo "TELS:<input type='text'readonly value='$te'><br>";
                   echo "NOMBRE DE CONTACTO:<input type='text'readonly value='$no'>TELEFONO DE CONTACTO:<input type='text'readonly value='$te'><br>";
                
                include("conf.php");
                $sl=mysqli_query($mysqli,"SELECT * FROM aut WHERE idc='$id'");
                while($rs=mysqli_fetch_array($sl)){
                    $per=$rs["rol"];
                      $pero=$rs["nt"];
                      
                    if($pero=="Aprobar"){
                    echo "<button style='font-family:sans-serif;font-size:1.5em;background-color:green;color:white;padding:10px;border:none;'>Aprobado</button><br>";
                }else{echo"";}
                     if($pero=="Rechazar"){
                    echo "<button style='font-family:sans-serif;font-size:1.5em;background-color:red;color:white;padding:10px;border:none;'>Rechazado</button><br>";
                }else{echo"";}
                    
                
                   
                }
                ?>    
                </div>
                <?php }?>
                    </center>
                     <button onclick="window.print()" style="float:right;color:white;background-color:green;padding:10px;border:none;">IMPRESI&Oacute;N</button>
                </div>
            
            </body>
    
    
    </html>
