<html>
    <head>
        <link rel="icon" type="image/x-icon" href="co.png">
        <meta name="viewport" cotent="width=width-device,initial-scale=1.0">
        <style>
        *{padding:0;margin:0;}
        #he{
            width:100%;
            height:100%;
            background-image:url("assets/em3.png");
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
    
    

    width:100%;
    height:110%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide2{
    
    

      width:100%;
   height:110%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide3{
    
    

      width:100%;
     height:110%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide4{
    
    

      width:100%;
  height:110%;
    position:absolute;  left:0; top:0; z-index:1;
}
#slide5{
    
    
   
      width:100%;
    height:110%;
    position:absolute;  left:0; top:0; z-index:1;
}
#nav{
    margin-top:20px;
    width:100%;
    height:100px;
    background-color:white;
    color:black;
    display:block;
    
}
#nav ul{
    width:30%;
    margin-top:-50px;
    padding:20px;
    float:right;
    display:block;
    
}
#nav img{
    width:7%;
    height:110px;
    float:left;
    display:inline-block;
    margin-top:-30px;
    margin-left:50px;
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
     a{
       color:white;
        
     }
    
       #p{
           margin-left:170px;
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
        #p1{
             margin-left:170px;
           font-family:sans-serif;
           font-size:1em;
           letter-spacing:6px;
           line-height:4px;
       }
         #ag{
        display:block;
        background-color:rgb(42 94 193 / 41%);
        width:100%;
        height:100%;
        left:0px;
        position:absolute;
        z-index:10;
        top:120px;

    }
    #le{
     float: left;
    width: 50%;
    word-wrap: break-word;
    box-shadow: 1px 69px 60px 10px black;
    background-color: rgba(0,0,0,0.50);
    height:100%;
    }
    #ag p{
        color:white;
        font-family:impact;
        font-size:3em;
      
    }
    #header{
        width:100%;
        height:100%;
        background-image:url("assets/he2.jpg");
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        position:absolute;
        z-index:1;
    }
    #mens{
        width:80%;
        padding:10px;
        background-color:grey;
        color:#0707a1;
        font-family:sans-serif;
        font-size:1.2em;
        border-radius:15px; 
      text-align:left;
        
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
        <div id="ag">
            <div id="le">
                <br><br>
                <center>
                <p>                
Plataforma Web para la Gestión de Permisos y Licencias para los Alumnos de la Escuela Militar de Suboficiales 
"sargento Inocencio Chinca</p></p></center>
                 <br><br>
                 <center>
                <div id="mens">
                
                    
                    </div>
                    </center>
                    
                <br><br>
                <center>
              <a href="login.php">  <button style="background-color:#0707a1; color:white; border-radius:15px; padding:13px; margin-top:50px; font-size:1.8em;">INGRESAR</button></a>
                    </center>
                </div>
            
            
            
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
<div id="nav"><br><img src="assets/in.png"><p id="p">ESCUELA MILITAR DE SUBOFICIALES</p><br><p id="p1">SARGENTO INOCENCIO CHINCA </p>
<ul>
    <div id="cua">
        <div id="lin"></div>
        <div id="lin"></div>
        <div id="lin"></div>
        </div>
    <li>EMSUB</li>
       <li>CONT&Aacute;CTO</li>
          <li style="background-color:black;padding:10px;"><a href="login.php" style="text-decoration:none;color:white;">INGRESAR</a></li>
    </ul>
</div>


<div id="header">
    
    </div>
                  <div class="slideshow">
      <div id="slide1">
            <p class="quote"> </p><br><br>
                
            

      </div>
      <div id="slide2">
            <p class="quote"></p><br><br>
          

      </div>
      <div id="slide3">
            <p class="quote"> </p><br><br>
            
          
      </div>
       <div id="slide4">
            <p class="quote"></p><br><br>
                
            


      </div>
      <div id="slide5">
            <p class="quote"></p><br><br>
          

      </div>
     
      
                    </div>
       
   
    </body>
    </html>