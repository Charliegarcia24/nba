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
echo "<ul class='menuUl2'><img class ='logoMenu' src=".AVATARES . trim($avatar)." />";
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
<h1>NORMAN POWELL </h1><img class="logoToronto" src="<?=ROOT . DT . IMAGENES . "logoEquipo.png"?>"/>
</head>
<body>
<p>ESCOLTA/ALERO | 24 | TORONTO RAPTORS</p>
<div>
<div>
<img src="<?=ROOT . DT . IMAGENES . "norman-powell.jpg"?>"/></div>
<div>
<ul>
<li><strong>Altura:</strong><span>1,93m</span></li>
<li><strong>Peso:</strong><span>98 kg</span></li>
<li><strong>Edad:</strong><span>25 años</span></li>
<li><strong>Nacido el:</strong><span>25/05/1993 en San Diego (California)</span></li>
</div>
</ul>
<div>
<ul>
<li><strong>Nombre Completo:</strong><span>Norman WC Powell</span></li>
<li><strong>Nacionalidad:</strong><span>Estados Unidos</span></li>
<li><strong>Formado en:</strong><span>UCLA</span></li>
<li><strong>Draft:</strong><span>2015 / Posicion 46º</span></li>
</div>
</ul>
</div>
<p><strong>TRAYECTORIA NBA</strong></p>
<span>Temporadas:</span><span>3</span>
<br />
<span>Playoffs:</span><span>3</span>
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
<td>15,2</td>
<td>5,5</td>
<td>1,7</td>
<td>1,3</td>
<td>40</td>
<td>28</td>
<td>82</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>16,2</td>
<td>6,6</td>
<td>2,0</td>
<td>1,1</td>
<td>43</td>
<td>32</td>
<td>80</td>
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
<td>6,7</td>
<td>2,0</td>
<td>0,3</td>
<td>0,3</td>
<td>29</td>
<td>14</td>
<td>75</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>14,3</td>
<td>5,6</td>
<td>1,7</td>
<td>0,7</td>
<td>40</td>
<td>34</td>
<td>83</td>
</tr>
</table>
<?php
?>
</body>
</html>