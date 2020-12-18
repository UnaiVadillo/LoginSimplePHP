<?php

include "datos.php";

session_start();


if (isset($_POST["usuario"])&& isset($_POST["pass"])){
    comprobarLogin($_POST["usuario"], $_POST["pass"], $usuarios);
}
function comprobarLogin($usuario, $pass, $usuarios){
    if (array_key_exists($usuario, $usuarios)){
        if ($usuarios[$usuario]["pass"]==$pass){
            $_SESSION["usuarioLog"]= $usuario;
            header("Location: pagina.php");
        }
    }
}

require_once ("login_view.php");
