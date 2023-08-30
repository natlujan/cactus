<?php

    include '../../appCode/clsAcceso.php';

    $acceso = new Acceso();
    $result = $acceso->getUsuarios();
    foreach($result as $row)
    {
        echo $row["email"] .
        ' es el correo de: ' . 
        $row["nombre"] .
        ' '.
        $row["apellido"] . '<br>'; 
    }

?>