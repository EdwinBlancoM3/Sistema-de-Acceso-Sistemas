<?
include 'include.php';
session_start();
if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
    }
    $aguardar=[
	'username'=>$_POST['username'],
	'password'=>$_POST['password'],
	'isadmin'=>$_POST['isadmin']
	];
	if($_POST['id']!=''){
		$aguardar['_id']=new mongoid($_POST['id']);
	}
	$m->G5DTA->usuarios->save($aguardar);
	header("Location: usuarios.php")
	
?>
