<?
include 'include.php';
session_start();
if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
    }
?>
<html lang="en" class="ie_11_scroll">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="hhhwidth=device-width, initial-scale=1">
        <title>Listado de Placas</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/tablestyle.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="favicon.png" />
        
    </head>
    <body>
    	<form method="post">
    		<button type="submit" class="btn btn-primary" 
    		onclick = "this.form.action = 'newP.php'; this.form.submit()">Agregar otra Placa</button>
    		<button type="submit" class="btn btn-danger" 
    		onclick = "this.form.action = 'inicio.php'; this.form.submit()">Regresar</button>
    	</form>
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Placa</th>
    				<th>Estado</th>
    				<th>Propietario</th>
    				<th>Matricula</th>
    				<th>Marca</th>
    				<th>Modelo</th>
    				<th>Color</th>
    				<th>QR</th>
    				<th>Opciones</th>
    				<th></th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    			foreach ($m->G5DTA->placas->find() as $placa){
				?>
				<tr>
					<td><?=$placa['placa']?></td>
					<td><?=$placa['estado']?></td>
					<td><?=$placa['propietario']?></td>
					<td><?=$placa['Matricula']?></td>
					<td><?=$placa['marca']?></td>
					<td><?=$placa['modelo']?></td>
					<td><?=$placa['color']?></td>
					<td><a href=<?='generarQR.php?placa='.$placa['placa']?>>Generar QR</a></td>
					<td><a href=<?='editarP.php?id='.$placa['_id']?>>Editar</a></td>
					<td><a href=<?='deleteP.php?placa='.$placa['placa']?>>Eliminar</a></td>
				</tr>
				<?php
    			}
    			?>
    		</tbody>
    	</table>
    </body>
</html>
