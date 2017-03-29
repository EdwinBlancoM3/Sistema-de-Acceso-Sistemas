<?
include 'include.php';
session_start();
if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
    }
	$placa=$_GET['placa'];
	$m->G5DTA->placas->remove(['placa'=>$placa]);
	header("Location: placas.php")
	
?>
