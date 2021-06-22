<?php
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $consulta = new sql_class();
    $resultado_corr = $consulta-> ConsultaCorreo();
?>
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
        <select name="para" id="para">
        <option value="todos">Todos</option>
        <?php while($display = $resultado_corr->fetch_assoc()){ ?>
            <option value="<?php echo $display['clienteCorreo'];?>"><?php echo $display['clienteCorreo'];?></option>
        <?php } ?>
        </select>
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