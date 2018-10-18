<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<?php
$contenido = $_COOKIE['cookieProyecto'];
$avatar = $_SESSION['imagen'];
if($contenido == true){
   echo  "<div>";
echo "<ul class='menuUl'>";
echo "<li class ='menuLi'><img class ='logoMenu' src='../imagenes/logoEquipo.png'/></li>";
echo "<li class='menuLi'><a href='/'>Inicio</a></li>";
echo "<li class='menuLi'><a href='/equipo'>Equipo</a></li>";
echo "<li class='menuLi'><a href='/jugadores'>Jugadores</a></li>";
echo "</ul>";
echo "<div>";
echo "<ul class='menuUl2'><img class ='logoMenu' src=".AVATARES . trim($avatar)." />";
echo "<li class='menuLi'><a href='/preferencias'>Preferencias</a></li>";
echo "<li class='menuLi'><a href='/logout'>Log out</a></li>";
echo "</ul>";
echo "</div>";
} else {
    print <<<HERE
    <div>
<ul class='menuUl'>
<li class ='menuLi'><img class ='logoMenu'src="ROOT . DT . IMAGENES . logoEquipo.png"/></li>
<li class='menuLi'><a href='/'>Inicio</a></li>
<li class='menuLi'><a href='/equipo'>Equipo</a></li>
<li class='menuLi'><a href='/jugadores'>Jugadores</a></li>
<li class='menuLi2'><a href='/login'>Login</a></li>
</ul>
</div>
HERE;
}
?>
<?php
$avatar = $_SESSION['imagen'];
$dir_subida = "/home/carlos/www/proyecto/avatares/";
$cortado = substr($avatar,0,-1);
$fichero_subido = $dir_subida . $cortado;
if(move_uploaded_file($_FILES['fichero_usuario']['tmp_name'],$fichero_subido)) {
    echo "El fichero es valido y se subio con exito";
} else{
    echo "El fichero no ha podido subirse";
}
?>
<form action="/preferencias" method="post" enctype="multipart/form-data">
<input name="fichero_usuario" type="file" />
<input type="submit" value="enviar fichero"/>