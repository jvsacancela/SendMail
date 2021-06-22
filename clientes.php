<?php 
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $consulta = new sql_class();
    $resultado_cli = $consulta -> ConsultaCliente();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="styles/tabla.css">
    <link rel="stylesheet" href="styles/navs.css">
    <link rel="stylesheet" href="styles/general.css">
</head>
<body>
    <div id="barraBotones">
    <input id="boton" type="button" value="Nuevo Cliente">
    <a id="boton" href="">Nuevo cliente</a>
    </div>

    <table id="tablaClientes">
        <thead>
            <th>CEDULA</th>
            <th>NOMBRE Y APELLIDO</th>
            <th>CONTACTO</th>
            <th>CORREO</th>
        </thead>

        <tbody>
            <?php while ($display = $resultado_cli->fetch_assoc()){?>
                <tr>
                    <td> <?php echo $display['clienteCedula']; ?>  </td>
                    <td> <?php echo $display['clienteNombre'];?><?php  echo " " . $display['clienteApellido']; ?>  </td>
                    <td> <?php echo $display['clienteTelefono']; ?>  </td>
                    <td> <?php echo $display['clienteCorreo']; ?>  </td>
            <?php }?>
                </tr>
        </tbody>    
    </table>

</body>
</html>