<?php 

        $de = "javiersacancela@gmail.com";
        $para = $_POST['para'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        mail($para, $asunto, $mensaje, $de);
        echo "Se envio c:";

?>