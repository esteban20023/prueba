<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>ACCESS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <img src="Views/imagenes/logo3.png" alt="">
                    <div class="card-content">
                        <form action="Contrels/login-admin.php" method="post">
                        <label for="">Numero de documento:</label><br>
                        <input type="text" name="Identificacion" id="Identificacion"><br> 
                         <label for="">Password:</label><br>
                         <input type="password" name="Password" id="Password" ><br>
                         <label for="">Seleccione el rol:</label><br>
                         <select name="Rol" id=""><br>
                            <option value="1">Cliente</option>
                            <option value="2">Administrador</option>
                         </select><br>
                         <button type="submit">Ingresar</button><br>
                         <a href="">¿Olvidaste tu contraseña?</a><br>
                         <a href="#">Resgistarme</a>
                         </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>