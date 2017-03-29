<?
include 'include.php';
$placa=$_GET['placa'];
$placa=$m->G5DTA->placas->findOne([
	'placa'=>$placa
	]);
$alumno=$m->uadec->asistentes->findOne([
	'codigo'=>$placa['Matricula']]);
?>
<html lang="en" class="ie_11_scroll">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="hhhwidth=device-width, initial-scale=1">
        <title>Datos de Placa</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/tablestyle.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="favicon.png" />
        
    </head>
    <body>
    	<header class="template_header">
            <h1 class="text-center"><span>...</span> Datos Placa <span>...</span></h1>
        </header>
    	<div class= "table-responisve">
    	<table class="table table-striped">
  <tr>
    <th>Placa</th>
    <td><?=$placa['placa']?></td>
  </tr>
  <tr>
    <th>Estado</th>
    <td><?=$placa['estado']?></td>
  </tr>
  <tr>
  	<th>Propietario</th>
  	<td><?=$placa['propietario']?></td>
  </tr>
  <tr>
  	<th>Marca</th>
  	<td><?=$placa['marca']?></td>
  </tr>
  <tr>
  	<th>Modelo</th>
  	<td><?=$placa['modelo']?></td>
  </tr>
  <tr>
  	<th>Color</th>
  	<td><?=$placa['color']?></td>
  </tr>
  <tr>
  	<th>Matricula</th>
  	<td><?=$placa['Matricula']?></td>
  </tr>
  <tr>
  	<th>Alumno</th>
  	<td><?=$alumno['nombre']?></td>
  </tr>
  <tr>
  	<th>Plan</th>
  	<td><?=$alumno['plan']?></td>
  </tr>
  <tr>
  	<th>Estatus</th>
  	<td><?=$alumno['estatus']?></td>
  </tr>
</table>
</div>
    </body>
</html>
