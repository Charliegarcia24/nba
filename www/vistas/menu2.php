<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<?php
$contenido = $_COOKIE['cookieProyecto'];
var_dump($contenido);
var_dump($avatar);
$avatar = $_SESSION['imagen'];
if($contenido == true){
   echo  "<div>";
echo "<ul class='menuUl'>";
echo "<li class ='menuLi'><img class ='logoMenu'src='ROOT . DT . IMAGENES . 'logoEquipo.png''/></li>";
echo "<li class='menuLi'><a href='/'>Inicio</a></li>";
echo "<li class='menuLi'><a href='/equipo'>Equipo</a></li>";
echo "<li class='menuLi'><a href='/jugadores'>Jugadores</a></li>";
echo "</ul>";
echo "<div>";
echo "<ul class='menuUl'><img class = 'logoMenu' src='ROOT . AVATARES . DT . trim($avatar)'/></ul>";
echo "<li class='menuLi'><a href='/preferencias'>Preferencias</li>";
echo "<li class='menuLi'><a href='/'>Log out</li>";
echo "</div>";
} else {
    print <<<HERE
    <div>
<ul class="menuUl">
<li class ="menuLi"><img class ='logoMenu'src='ROOT . DT . IMAGENES . 'logoEquipo.png''/></li>
<li class="menuLi"><a href="/">Inicio</a></li>
<li class="menuLi"><a href="/equipo">Equipo</a></li>
<li class="menuLi"><a href="/jugadores">Jugadores</a></li>
<li class="menuLi2"><a href="/login">Login</a></li>
</ul>
</div>
HERE;
}
?>