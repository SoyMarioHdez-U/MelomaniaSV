<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <link rel="stylesheet" href="http://localhost/melomania/MelomaniaSV/CSS/style.css">

</head>
<body>
    
    <table>
        <tr class="header">
            <td colspan="4" align="left"><a href="/HTML/index.html"><img src="/Img/Logo grande.png" height="50px"></a></td>
            <td colspan="3"><a class="urlUsr" href="/HTML/iniciarsesion.html">Iniciar Sesión</a></td>
            
            <td class="urlUsr"><a class="urlUsr" href="/HTML/registro.html">Registrarse</a></td>
            <td class="urlUsr">Carrito </td>
        </tr>
        <tr class="menu">
            <td><a class="urlIni" href="/HTML/index.html">Inicio</a></td>
            <td><a class="urlIni" href="/HTML/tienda.html">Tienda</a></td>
            <td><a class="urlIni" href="/HTML/cursos.html">Cursos</a></td>
            <td><a class="urlIni">Contactos</a></td>
            <td colspan="6"></td>
            
        </tr>

    </table>

    <h1 class="titles">Registro de Usuario</h1>
    <form action="procesar_registro.php" method="POST">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido" required></td>
            </tr>
            <tr>
                <td>Correo Electrónico:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Confirmar Contraseña:</td>
                <td><input type="password" name="confirmar_password" required></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento:</td>
                <td><input type="date" name="fecha_nacimiento" required></td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Registrarse">
                </td>
            </tr>
        </table>
    </form>
    <p></p>

    <table>
        
        <tr class="footer">
            <td colspan="10">
                <p></p>
                <p></p>
                <img src="/Img/Logo grande.png" height="50px"><br>
                <img src="https://toppng.com/uploads/thumbnail/iconos-facebook-icono-de-facebook-twitter-png-y-psd-iconos-redes-sociales-11562849003jm0njbtfm3.png" height="50px"><br>
                <p>© 2023 Melomanía. Universidad Católica de El Salvador.</p>
            </td>
        </tr>

        
    </table>

    
</body>
</html>