<!DOCTYPE html>
<html>
    <head>
        <title>Subastalo.Com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/stylee.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src="../js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="../js/validaciones.js" type="text/javascript"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script src="//ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>
    </head>
    <body>
        <div class="barraTitulo">
            <img class="imagen" src="../media/martillo.jpg" alt="" width="180" height="150"/>
            <h1>Subastalo.Com</h1>
            <form class="formulario" action="#" method="POST">
                    <input placeholder="Username" name="username" required/>
                    <input type="password" placeholder="Contraseña" name="pass" required/>
                    <input type="submit" value="Iniciar Sesión">
                    <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="menubar">
            <ul>
                <li><a href="index">Inicio</a></li>
               <li><a href="ComprarPujas">Comprar Pujas</a></li>
                <li><a href="#">Registrar Cliente</a></li>
                <li><a href="RegistrarEmpresa">Registrar Empresa</a></li>
                <li><a href="RegistrarProducto">Publicar un Producto</a></li>
            </ul>
        </div>
        <div class="contenedor">
            <form id="formCli" name="formCli" class="registro" method="POST" action="/subastaloDotCom/home/registrarUsuario">
                <h2>
                    Registro del Cliente
                </h2>
                <p>
                    <label>Nombre</label>
                    <input name="nombre" type="text" required />
                </p>
                <p>
                    <label>Apellido</label>
                    <input name="apellido" required />
                </p>
                <p>
                    <label>Identificacion</label>
                    <input name="cedula" type="text" />
                </p>
                <p>
                    <label>Dirección</label>
                    <input name="direccion" required>
                </p>
				<p>
                    <label>E-Mail</label>
                    <input name="correo" required>
                </p>
				<p>
                    <label>Telefono</label>
                    <input name="telefono" required>
                </p>
                <p>
                    <label>Contraseña</label>
                    <input name="contrasena" required>
                </p>
                	<input type="submit" class="bot" value="Registrar" id="bot">
            </form>
        </div>
    <footer>
        <p>Subastalo.Com Designed By Andrés Osorio</p>
    </footer>
    </body>
</html>