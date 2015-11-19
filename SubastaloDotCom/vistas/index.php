<!DOCTYPE html>
<html>
    <head>
        <title>Subastalo.Com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="../css/stylee.css" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src="../js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="../js/validaciones.js" type="text/javascript"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    </head>
    <body>
        <div class="barraTitulo">
            <img class="imagen" src="../media/martillo.jpg" alt="" width="180" height="150"/>
            <h1>Subastalo.Com</h1>
            <?php
	if(!isset($_COOKIE["chsm"])){
	?>
<div class="formulario">
	<form id="formL" method="POST" action="/subastaloDotCom/home/login">
		<label>Usuario (correo):</label>
		<input name="usuario" type="text" class="text">

		<label>Contraseña:</label>
		<input name="contraseña" type="pass" class="text">

		<input type="submit" class="bot" value="Entrar">
	</form>	
</div>
	<?php
	}else{
		?>
		<a href="/subastaloDotCom/home/logout">Cerrar Sesion</a>
		<?php }
		?>
        </div>
        <div class="menubar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="ComprarPujas">Comprar Pujas</a></li>
                <li><a href="RegistrarCliente">Registrar Cliente</a></li>
                <li><a href="RegistrarEmpresa">Registrar Empresa</a></li>
                <li><a href="RegistrarProducto">Publicar un Producto</a></li>
            </ul>
        </div>
        <div class="contenedor">
            <div class="producto">
                <img src="../media/iphone6.jpg" alt="" width="170" height="170"/>
                <h3>Iphone 6</h3>
                <h4>$1'300.000</h4>
                <input type="submit" value="Pujar"/>
            </div>
            <div class="producto">
                <img src="../media/galaxys6.jpg" alt="" width="170" height="170"/>
                <h3>Samsung Galaxy S6</h3>
                <h4>$1'300.000</h4>
                <input type="submit" value="Pujar"/>
            </div>
            <div class="producto">
                <img src="../media/xperiaz5.jpg" alt="" width="170" height="170"/>
                <h3>Sony Xperia Z5</h3>
                <h4>$1'300.000</h4>
                <input type="submit" value="Pujar"/>
            </div>
            <div class="producto">
                <img src="../media/xboxone.png" alt="" width="170" height="170"/>
                <h3>Xbox One</h3>
                <h4>$1'000.000</h4>
                <input type="submit" value="Pujar"/>
            </div>
            <div class="producto">
                <img src="../media/play4.jpg" alt="" width="170" height="170"/>
                <h3>Play Station 4</h3>
                <h4>$1'000.000</h4>
                <input type="submit" value="Pujar"/>
            </div>
            <div class="producto">
                <img src="../media/beats.jpg" alt="" width="170" height="170"/>
                <h3>Beats</h3>
                <h4>$300.000</h4>
                <input type="submit" value="Pujar"/>
            </div>
        </div>
    <footer>
        <p>Subastalo.Com Designed By Andrés Osorio</p>
    </footer>
    </body>
</html>
