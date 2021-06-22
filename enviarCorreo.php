<?php 
/*
        $de = "unreal.javierdev@gmail.com";
        $para = $_POST['para'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        mail($para, $asunto, $mensaje, $de);
        echo "Se envio c:";
*/

require_once 'config/conexion.php';
require_once 'config/sql_class.php';
$consulta = new sql_class();
$resultado_corr = $consulta-> ConsultaCorreo();

$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(($_POST['para']) == 'todos'){
        while($display = $resultado_corr->fetch_assoc()){
                $display['clienteCorreo'];
                $correos = implode($display);
                mail($correos, $asunto, $mensaje);
        }
}else{
        $para = $_POST['para'];
        mail($para, $asunto, $mensaje);
}

header('Location: inde.php')
?>