<?php
session_start();
require_once 'funciones_bd.php';
require_once 'funciones.php';
    $db = conectaBd();  
    $id = $_SESSION['id'];

    $consulta = "DELETE FROM software 
    WHERE id= :id";
    
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":id" => $id))) {
            $url = "listado_software.php";
            header('Location:'.$url);
    } else {
        print "<p>Error ao borrar.</p>\n";
    }

    $db = null;
    
?>