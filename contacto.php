<?php
    $destino = "itzjosue99@gmail.com";
    $nombre = $_POST["nombres"];
    $apellido = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];

    $contenido = "Nombre: ".$nombre."\napellido: ".$apellido."\ncorreo: ".$correo."\ncelular: ".$celular;
    mail($destino,"Contacto",$contenido);

?>