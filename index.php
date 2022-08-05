<?php
ob_start();
$API_KEY = "5407040118:AAEC11d9cKWGXgW-tS5TpSfNIu6NXV7mVng"; //token 
define('API_KEY', $API_KEY);
if(!is_file("webhook.txt")){
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']); 
file_put_contents("webhook.txt","yes");
}
function bot($method ,$datas=[]){
$wash = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$wash";
$wash = file_get_contents($url);
return json_decode($wash);}
include_once "response.php";
include_once "interface.php";
?>
