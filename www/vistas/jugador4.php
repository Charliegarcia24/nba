<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
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
echo "<li class='menuLi'><a href='/jugadores/1'>Serge Ibaka</a></li>";
echo "<li class='menuLi'><a href='/jugadores/2'>Kyle Lowry</a></li>";
echo "<li class='menuLi'><a href='/jugadores/3'>Norman Powell</a></li>";
echo "<li class='menuLi'><a href='/jugadores/4'>Cj Miles</a></li>";
echo "</ul>";
echo "<div>";
echo "<ul class='menuUl2'><img class ='logoMenu' src=".AVATARES. trim($avatar)." />";
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
<h1>CJ MILES </h1><img class="logoToronto" src="<?=ROOT . DT . IMAGENES . "logoEquipo.png"?>"/>
</head>
<body>
<p>ALERO | 0 | TORONTO RAPTORS</p>
<div>
<div>
<img src="<?=ROOT . DT . IMAGENES . "cj-miles.jpg"?>"/></div>
<div>
<ul>
<li><strong>Altura:</strong><span>1,98m</span></li>
<li><strong>Peso:</strong><span>105 kg</span></li>
<li><strong>Edad:</strong><span>31 años</span></li>
<li><strong>Nacido el:</strong><span>18/04/1987 Dallas (Texas)</span></li>
</div>
</ul>
<div>
<ul>
<li><strong>Nombre Completo:</strong><span>Calve Andre Miles Jr.</span></li>
<li><strong>Nacionalidad:</strong><span>Estados Unidos</span></li>
<li><strong>Formado en:</strong><span>Skyline HS (TX)</span></li>
<li><strong>Draft:</strong><span>2005 / Posicion 34º</span></li>
</div>
</ul>
</div>
<p><strong>TRAYECTORIA NBA</strong></p>
<span>Temporadas:</span><span>13</span>
<br />
<span>Playoffs:</span><span>7</span>
<br />
<span>Finales:</span><span>0</span>
<br />
<span>Titulos:</span><span>0</span>
<br />
<br />
<br />
<br />
<table>
  <tr>
    <th>PROMEDIOS EN TEMPORADA REGULAR</th>
  </tr>

  <tr>
	<th></th>
	<th>MJ</th>
	<th>PTS</th>
	<th>RB</th>
	<th>AS</th>
	<th>TC</th>
	<th>T3</th>
	<th>TL</th>
  </tr>

<tr>
<td><strong>2017-18</strong></td>
<td>19,1</td>
<td>10,0</td>
<td>2,2</td>
<td>0,8</td>
<td>38</td>
<td>36</td>
<td>84</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>20,7</td>
<td>9,8</td>
<td>2,4</td>
<td>1,1</td>
<td>41</td>
<td>36</td>
<td>81</td>
</tr>
</table>
<br />
<br />
<br />
<br />
<table>
  <tr>
    <th>PROMEDIOS EN PLAYOFFS</th>
  </tr>

  <tr>
	<th></th>
	<th>MJ</th>
	<th>PTS</th>
	<th>RB</th>
	<th>AS</th>
	<th>TC</th>
	<th>T3</th>
	<th>TL</th>
  </tr>
<tr>
<td><strong>2018PO</strong></td>
<td>22,7</td>
<td>9,6</td>
<td>2,4</td>
<td>0,8</td>
<td>45</td>
<td>42</td>
<td>81</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>18,8</td>
<td>7,3</td>
<td>2,1</td>
<td>1,0</td>
<td>41</td>
<td>31</td>
<td>85</td>
</tr>
</table>
<?php
?>

</body>
</html>