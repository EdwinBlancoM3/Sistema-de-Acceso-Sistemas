<?
include 'include.php';
session_start();
if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
    }
	$username=$_GET['uName'];
	$m->G5DTA->usuarios->remove(['username'=>$username]);
	header("Location: usuarios.php")
	
?>
