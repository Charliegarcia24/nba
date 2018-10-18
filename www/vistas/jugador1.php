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
<h1>SERGE IBAKA </h1><img class="logoToronto" src="<?=ROOT . DT . IMAGENES . "logoEquipo.png"?>"/>
</head>
<body>
<p>ALA-PÍVOT | 9 | TORONTO RAPTORS</p>
<div>
<div>
<img src="<?=ROOT . DT . IMAGENES . "serge-ibaka.jpg"?>"/>
</div>
<div>
<ul>
<li><strong>Altura:</strong><span>2,08m</span></li>
<li><strong>Peso:</strong><span>111 kg</span></li>
<li><strong>Edad:</strong><span>29 años</span></li>
<li><strong>Nacido el:</strong><span>18/09/1989 en Brazzaville</span></li>
</div>
</ul>
<div>
<ul>
<li><strong>Nombre Completo:</strong><span>Serge Jonas Ibaka Ngobila</span></li>
<li><strong>Nacionalidad:</strong><span>República del Congo</span></li>
<li><strong>Formado en:</strong><span>Rep.Congo</span></li>
<li><strong>Draft:</strong><span>2008 / Posicion 24º</span></li>
</div>
</ul>
</div>
<p><strong>TRAYECTORIA NBA</strong></p>
<span>Temporadas:</span><span>9</span>
<br />
<span>Playoffs:</span><span>8</span>
<br />
<span>Finales:</span><span>1</span>
<br />
<span>Titulos:</span><span>0</span>
<br />
<br />
<br />
<br />
<table>
  <tr>
    <th class="cabecera">PROMEDIOS EN TEMPORADA REGULAR</th>
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
<td>27,5</td>
<td>12,6</td>
<td>6,3</td>
<td>0,8</td>
<td>48</td>
<td>36</td>
<td>80</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>28,9</td>
<td>12,1</td>
<td>7,2</td>
<td>0,7</td>
<td>51</td>
<td>37</td>
<td>76</td>
</tr>
</table>
<br />
<br />
<br />
<br />
<table>
  <tr>
    <th class="cabecera">PROMEDIOS EN PLAYOFFS</th>
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
<td>26,0</td>
<td>8,7</td>
<td>5,9</td>
<td>1,1</td>
<td>42</td>
<td>38</td>
<td>82</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>30,5</td>
<td>11,0</td>
<td>6,6</td>
<td>0,7</td>
<td>50</td>
<td>39</td>
<td>78</td>
</tr>
</table>

<?php
?>
</body>
</html>