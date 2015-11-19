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
               <li><a href="RegistrarCliente">Registrar Cliente</a></li>
               <li><a href="RegistrarEmpresa">Registrar Empresa</a></li>
                <li><a href="#">Publicar un Producto</a></li>
            </ul>
        </div>
        <div class="contenedor">
            <form class="registro" method="POST" action="/subastaloDotCom/home/registrarProductoBD">
                <h2>
                    Publicar un Producto
                </h2>
                <input type="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
			
                <p>
                    <label>Nombre</label>
                    <input name="nombre" type="text" required />
                </p>
                <p>
                    <label>Código</label>
                    <input name="codigo" required />
                </p>
                <p>
                    <label>Precio</label>
                    <input name="precio" type="text" />
                </p>
				 <p>
                    <label>Fecha Final de Subasta</label>
                    <input name="fechaF" type="text" />
                </p>
				<p>
                    <label>Fecha Aproximada de entrega</label>
                    <input name="fechaE" type="text" />
                </p>
                <p>
                    <label>Descripción</label>
                    <input name="descri" type="text" />
                </p>
                	<input type="submit" class="bot" value="Registrar">
					<p>
                    <label>Politicas de Privacidad</label>
					</p>
            </form>
        </div>
    <footer>
        <p>Subastalo.Com Designed By Andrés Osorio</p>
    </footer>
    </body>
</html>