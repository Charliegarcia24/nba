<?php
return array (
    "routes" => array (
        "/"  => array (
            "route" => "/",
            "page" => "inicio.php"
        ),

        "Hola" => array (
            "route" => "/equipo",
            "page" => "equipo.php"
        ),

        "Adiós" => array (
            "route" => "/jugadores",
            "page" => "jugadores.php"
        ),

        "Login" => array (
            "route" => "/login",
            "page" => "login.php"
        ),

        "Comprobar" => array (
            "route" => "/comprobarLogin",
            "page" => "compruebaLogin.php"
        ),
        "Logout" => array (
            "route" => "/logout",
            "page" => "logout.php"
        ),

        "Preferencias" => array (
            "route" => "/preferencias",
            "page" => "cambioAvatar.php"
        ),

        "Adiós2" => array (
            "route" => "/jugadores/:idjugador",
            "page" => "jugadores.php"
        ),
       
	    ),
    "error" => "error.php"
);
?>