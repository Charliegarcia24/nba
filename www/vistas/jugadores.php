<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<?php
if($params["idjugador"] == 1){
	include_once "jugador1.php";
} elseif($params["idjugador"] == 2){
	include_once "jugador2.php";
} elseif($params["idjugador"] == 3){
	include_once "jugador3.php";
} elseif($params["idjugador"] == 4){
	include_once "jugador4.php";
}
$contenido = $_COOKIE['cookieProyecto'];
$avatar = $_SESSION['imagen'];
if($contenido == true){
   echo  "<div>";
echo "<ul class='menuUl'>";
echo "<li class ='menuLi'><img class ='logoMenu' src='../imagenes/logoEquipo.png'/></li>";
echo "<li class='menuLi'><a href='/'>Inicio</a></li>";
echo "<li class='menuLi'><a href='/equipo'>Equipo</a></li>";
echo "<li class='menuLi'><a href='/jugadores'>Jugadores</a></li>";
echo "<li class='menuLi'><a href='/jugadores/1'>Serge Ibaka</a></li>";
echo "<li class='menuLi'><a href='/jugadores/2'>Kyle Lowry</a></li>";
echo "<li class='menuLi'><a href='/jugadores/3'>Norman Powell</a></li>";
echo "<li class='menuLi'><a href='/jugadores/4'>Cj Miles</a></li>";
echo "</ul>";
echo "<div>";
echo "<ul class='menuUl2'><img class ='logoMenu' src=".AVATARES.DT .trim($avatar)." />";
echo "<li class='menuLi'><a href='/preferencias'>Preferencias</a></li>";
echo "<li class='menuLi'><a href='/logout'>Log out</a></li>";
echo "</ul>";
echo "</div>";
} else {
    print <<<HERE
    <div>
<ul class='menuUl'>
<li class ='menuLi'><img class ='logoMenu'src='ROOT . DT . IMAGENES . 'logoEquipo.png''/></li>
<li class='menuLi'><a href='/'>Inicio</a></li>
<li class='menuLi'><a href='/equipo'>Equipo</a></li>
<li class='menuLi'><a href='/jugadores'>Jugadores</a></li>
<li class='menuLi2'><a href='/login'>Login</a></li>
</ul>
</div>
HERE;
}
?>
<body>
<img src="<?=ROOT . DT . IMAGENES . "raptors.png"?>"/><img class="imagenPlantilla"src="<?=ROOT . DT . IMAGENES . "toronto-raptors-t2.jpg"?>"/>
</body>
</html>