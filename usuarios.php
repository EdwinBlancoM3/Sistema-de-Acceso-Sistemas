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
        <title>Inicio</title>
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
    		onclick = "this.form.action = 'newUser.php'; this.form.submit()">Crear Nuevo Usuario</button>
    		<button type="submit" class="btn btn-danger" 
    		onclick = "this.form.action = 'inicio.php'; this.form.submit()">Regresar</button>
    	</form>
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Usuario</th>
    				<th>Admin</th>
    				<th>Opciones</th>
    				<th></th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    			foreach ($m->G5DTA->usuarios->find() as $usuario){
				?>
				<tr>
					<td><?=$usuario['username']?></td>
					<td><input type="checkbox" name="isadmin" <?if($usuario['isadmin']==on){echo 'checked';}?> disabled></td>
					<td><a href=<?='editarU.php?id='.$usuario['_id']?>>Editar</a></td>
					<td><a href=<?='deleteU.php?uName='.$usuario['username']?>>Eliminar</a></td>
				</tr>
				<?php
    			}
    			?>
    		</tbody>
    	</table>
    </body>
</html>
