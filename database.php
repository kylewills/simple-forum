<?php 

$host = "localhost";
$user = "kaloolom_kyle";
$pass = "JETKwills";
$db_name = "kaloolom_forum";

$connection = new mysqli($host,$user,$pass,$db_name);
    
function formatDate($date){
    
    return date('d-m-Y   G:i a', strtotime($date));
    
}  

?>
