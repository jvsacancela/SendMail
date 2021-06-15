<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIAR CORREO | PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="contenedor">
<form action="enviarCorreo.php" method="post">
    <!---<div>
        <label for=""> De: </label>
        <input type="text" name="de">
    </div>
-->
    <div>
        <label for="">Para:</label>
        <input type="text" name="para">
    </div>

    <div>
    <label for="">Asunto: </label>
    <input type="text" name="asunto">
    </div>

    <div>
        <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
    </div>
    
    <input id="btn_enviar" type="submit" value="Enviar">
    </form>
</div>
  
</body>
</html>