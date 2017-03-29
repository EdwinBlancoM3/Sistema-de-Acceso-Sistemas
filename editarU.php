<?
include 'include.php';
session_start();
if (!isset($_SESSION['username'])) 
    {
        header("Location: login.php");
    }
$id=$_GET['id'];
$usuario=$m->G5DTA->usuarios->findOne([
	'_id'=>new MongoId($id)
	]);
?>
<html lang="en" class="ie_11_scroll">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="hhhwidth=device-width, initial-scale=1">
        <title>Agregar Nuevo Usuario</title>
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
                            <h1 class="text-center"><span>...</span> Editar Usuario <span>...</span></h1>
                        </header>
                    </div>
                </div>
                <form role="form" action="insertU.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" value="<?=$usuario['username']?>" name="username" class="form-control" id="contact-name" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="password" value="<?=$usuario['password']?>" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="input-group-addon"></div>
                            Admin<input type="checkbox" name="isadmin" value="on" class="form-control"
                            <?
                            if($usuario['isadmin']==on)
                            {echo "checked";}
                            ?>
                            >
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6 col-xs-offset-6">
                            <button type="submit" class="form-control">Guardar Cambios</button>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                </form>
                <h1><?php echo isset($error) ? utf8_decode($error) : '' ; ?></h1>
            </div>
        </section>
        <!-- require plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <!-- template mo config script -->
        <script src="js/templatemo_scripts.js"></script>
   	</body>
</html>
