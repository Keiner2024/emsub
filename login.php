    <?php $aut=$_GET['authentication'];?>
      <?php $confirm=$_GET['confirm'];?>
       <?php $deny=$_GET['denied'];?>
<html>
    <head>
               <link rel="icon" type="image/x-icon" href="assets/co.png">
        <style>
         #ag{
        display:block;
        background-color:rgb(42 94 193 / 54%);
        width:100%;
        height:100%;
        left:0px;
        position:fixed;
        z-index:10;
        top:0px;
    }
        body{background-color:red; background-image:url("assets/he1.jpg");background-size:cover;background-repeat:no-repeat; background-position:center;}
         #los{
          padding:14px;
             width:30%;
            
            background-color:white;
            font-family:sans-serif;
            border-radius:16px;
            
        }
        #los input{
            width:78%;
            height:37px;
            display:block;
            float:right;
        }
         #los select{
            width:78%;
            height:37px;
            display:block;
            
        }
         #los option{
            width:78%;
            height:37px;
            display:block;
            
        }
         #los img{
            width:20%;
              background-color:white;
            float:left;
            display:inline-block;
            
        }
        #lo{
          padding:14px;
             width:30%;
            
            background-color:white;
            font-family:sans-serif;
            border-radius:16px;
            
        }
        #lo input{
            width:78%;
            height:37px;
            display:block;
            float:right;
        }
         #lo select{
            width:78%;
            height:37px;
            display:block;
            
        }
         #lo option{
            width:78%;
            height:37px;
            display:block;
            
        }
         #lo img{
            width:20%;
              background-color:white;
            float:left;
            display:inline-block;
            
        }
        #w{
            width:100%;
            height:100%;
            position:fixed;
            background-color:rgba(0,0,0,0.10);
            display:none;
            z-index:100;
        }
        #re{
              width:100%;
            height:100%;
            position:fixed;
            background-color:rgba(0,0,0,0.10);
            display:<?php if($aut>0){echo "block";}else{echo "none";}?>;
             z-index:100;
        }
          #confirm{
              width:100%;
            height:100%;
            position:fixed;
            background-color:rgba(0,0,0,0.10);
            display:<?php if($confirm>0){echo "block";}else{echo "none";}?>;
            z-index:100;
        }
        #deny{
              width:100%;
            height:100%;
            position:fixed;
            background-color:rgba(0,0,0,0.10);
            display:<?php if($deny>0){echo "block";}else{echo "none";}?>;
        }
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
            function den(){
                var cf=document.getElementById("deny");
                cf=document.getElementById("deny").style.display="none";
            }
            </script>
            <div id="deny">
                 <div id="los">
                     <center>
                         <h2>No seencontr&oacute; ningun correo <p onclick="den()">Cerrar</p></h2>
                         </center>
                     </div>
                </div>
            <script>
            function cf(){
                var cf=document.getElementById("confirm");
                cf=document.getElementById("confirm").style.display="none";
            }
            </script>
            <div id="confirm">
                 <div id="los">
                     <center>
                         <h2>Haz actualizado Tu contrase&ntilde;a<br> ahora puedes <p onclick="cf()">Iniciar sesi&oacute;n</p></h2>
                         </center>
                     </div>
                </div>
            <div id="re">
                <br><br>  <br><br><br><br>
                <center>
               <div id="los">
                <img src="assets/in.png">
                <h3>Formulario de recuperaci&oacute;n de contrase&ntilde;a</h3>
                <?php
                if($aut>0){echo "";}else{
                echo'<form method="post" action="recuperar.php">';
                    echo '<center>';
                    echo'<input name="email" placeholder="Escribe el e-mail con el que te registraste" type="text">';
                    
                    echo'<br><br><input type="submit" style="margin-top:15px;margin-left:5px; width:30%; background-color:green; color:white; padding:10px;" value="consultar email"></center>';
                    
                    echo'</form>';}
                    ?>
                    <?php
                
                    if($aut>0){
                    
                    echo'<form action="c.php" method="post">';
                    echo'<input type="password" name="clave" placeholder="Nueva contrase&ntilde;a">';
                    echo'<br>';
                    echo'<br>';
                    echo"<input type='hidden' name='id' value='$aut'>";
                      echo'<input type="password" name="clave" placeholder="Confirmar nueva contrase&ntilde;a">
                  <br><br>
                    <input type="submit" style="margin-top:20px;margin-left:5px; width:30%; background-color:green; color:white; padding:10px;" value="Enviar nueva contrase&ntilde;a">';
                    echo" </form>";
                    }
                    ?>
                    
                    
                     
                    
                    
                   
                    <button onclick="recup()" style="margin-top:;  height:37px; margin-right:70px; width:30%; background-color:green; color:white; padding:10px;" >Cancelar</button>
                    </div>
                    </center>
                    <br><br><br><br>
                    </div>
            <div id="w">
                    <center>
                        
            <div id="lo">
                <img src="in.png">
                <form method="post" action="re.php">
                    
                    <select name="rol">
                       
                          <option value="cc">Comandante compa&ntilde;ia</option>
                            <option value="cb">Comandante batallon</option> 
                            <option value="c">Cepse</option>
                            <option value="s">Suboficial servicio</option> 
                            <option value="j">Jefe de personal</option>
                         <option value="a">Alumno</option>
                             <option value="ad">Administrador</option>
                    </select>
                    
                    <input name="n" placeholder="Nombre completo" type="text">
                    
                     <input name="email" placeholder="E-mail" type="email">
                    <input name="cc" placeholder="C.C" type="text">
                      <input name="ide" placeholder="ID de estudienate" type="text">
                       <input name="clave" placeholder="Contrase&ntilde;a" type="text">
                        <input name="s" placeholder="sexo" type="text">
                         <input name="f" placeholder="Fecha de acimiento" type="text">
                          <input name="ni" placeholder="Nivelde estudio" type="text">
                    <input type="text" name="de" placeholder="Destino">
                  <br><br>
                    <input type="submit" style="margin-top:20px; width:30%; background-color:green; color:white; padding:10px;" value="Registrarse">
                    
                    
                    
                     
                    
                    
                    </form> <button onclick="b()" style="margin-top:20px;  height:37px; margin-right:70px; width:30%; background-color:green; color:white; padding:10px;" >Iniciar sesion</button>
                </div>
                </center>
                
            </div>
            <script>
            function a(){
                    var r=document.getElementById("w");
                 r=document.getElementById("w").style.display="block";
                 
            }
        
            </script>
              <script>
            function b(){
                    var e=document.getElementById("w");
                 e=document.getElementById("w").style.display="none";
                 
            }
        
            </script>
          
            <div id="ag">
                
                  <br><br><br><br>
            <center>
            <div id="lo">
                <img src="in.png">
                <form method="post" action="lo.php">
                      <select name="rol">
                       
                          <option value="cc">Comandante compa&ntilde;ia</option>
                            <option value="cb">Comandante batallon</option> 
                            <option value="c">Cepse</option>
                            <option value="s">Suboficial servicio</option> 
                            <option value="j">Jefe de personal</option>
                         <option value="a">Alumno</option>
                              <option value="ad">Administrador</option>
                    </select>
                    <input name="email" placeholder="Usuario" type="email">
                    <input type="password" name="clave" placeholder="Contrase&ntilde;a">
                  <br><p onclick="recu()" style="text-decoration:underline;">   <br>  <br>      Haz olvidado tu contrase&ntilde;a?</p><br>
                    <input type="submit" style="margin-top:20px;margin-left:5px; width:30%; background-color:green; color:white; padding:10px;" value="Iniciar sesi&oacute;n">
                    
                    
                    
                     
                    
                    
                    </form>
                    <script>
                    function recu(){
                        var re=document.getElementById("re");
                       re=document.getElementById("re").style.display="block";
                    }
                    </script>
                     <script>
                    function recup(){
                        var re=document.getElementById("re");
                       re=document.getElementById("re").style.display="none";
                    }
                    </script>
                    <button onclick="a()" style="margin-top:;  height:37px; margin-right:70px; width:30%; background-color:green; color:white; padding:10px;" >Registrarse</button>
                    
                </div>
                </center>
                </div>
            </body>
        </html>