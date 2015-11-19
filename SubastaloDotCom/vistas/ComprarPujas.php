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
                <li><a href="#">Comprar Pujas</a></li>
                <li><a href="RegistrarCliente">Registrar Cliente</a></li>
                <li><a href="RegistrarEmpresa">Registrar Empresa</a></li>
                <li><a href="RegistrarProducto">Publicar un Producto</a></li>
            </ul>
        </div>
        <div class="contenedor">
            <form class="registro">
                <h2>
                    Comprar Pujas
                </h2>
                <p>
                    <label>Cantidad</label>
                    <input class="inputCantidad" name="cantidad" type="text" required />
                </p>
                <p>
                    <label>Costo</label>
                    <input class="inputCosto" name="costo" required />
                </p>
                <p>
                    <label>Metodo de Pago</label>
                    <input class="inputMetodo" name="Metodopago" type="text" />
                </p>
                	<button>Comprar</button>
            </form>
        </div>
    <footer>
        <p>Subastalo.Com Designed By Andrés Osorio</p>
    </footer>
    </body>
</html>