<?
require_once 'phpqrcode.php';
$placa=$_GET['placa'];
QRcode::png("http://sistemas.nlared.com/alumnos/20165DTA/@edwinblancom3/Team1/lector.php?placa=$placa"); 
?>
