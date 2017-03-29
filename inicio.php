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
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="favicon.png" />
    </head>
    <body>
    	<section id="templatemo_contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <header class="template_header">
                            <h1 class="text-center"><span>...</span> Bienvenido <span>...</span></h1>
                        </header>
                    </div>
                </div>
                <form role="form" method="post">
                    <div class="form-horizontal row">
                    	<div class="col-sm-7">
                            <input type=image src="images/usuarios.png" width="300" height="300" 
                            onclick = "this.form.action = 'usuarios.php'; this.form.submit()">
                        </div>
                        <div class="col-sm-2">
                            <input type=image src="images/placa.png" width="300" height="200" 
                            onclick = "this.form.action = 'placas.php'; this.form.submit()">
                        </div>
                    </div>
                    <div class="container">
                    	<button type="submit" class="btn btn-danger " 
    					onclick = "this.form.action = 'logout.php'; this.form.submit()">Salir</button>
                    </div>
                </form>
    </body>
</html>
