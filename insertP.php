<?
include 'include.php';
session_start();
if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
    }
    $aguardar=[
	'placa'=>$_POST['Placa'],
	'estado'=>$_POST['Estado'],
	'propietario'=>$_POST['Propietario'],
	'marca'=>$_POST['Marca'],
	'modelo'=>$_POST['Modelo'],
	'color'=>$_POST['Color'],
	'Matricula'=>$_POST['Matricula']
	];
	if($_POST['id']!=''){
		$aguardar['_id']=new mongoid($_POST['id']);
	}
	$m->G5DTA->placas->save($aguardar);
	header("Location: placas.php")
	
?>
