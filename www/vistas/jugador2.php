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
<h1>KYLE LOWRY </h1><img class="logoToronto" src="<?=ROOT . DT . IMAGENES . "logoEquipo.png"?>"/>
</head>
<body>
<p>BASE | 7 | TORONTO RAPTORS</p>
<div>
<div>
<img src="<?=ROOT . DT . IMAGENES . "kyle-lowry.jpg"?>"/></div>
<div>
<ul>
<li><strong>Altura:</strong><span>1,85m</span></li>
<li><strong>Peso:</strong><span>89 kg</span></li>
<li><strong>Edad:</strong><span>32 años</span></li>
<li><strong>Nacido el:</strong><span>25/03/1986 en Filadelfia (Pensilvania)</span></li>
</div>
</ul>
<div>
<ul>
<li><strong>Nombre Completo:</strong><span>Kyle Lowry</span></li>
<li><strong>Nacionalidad:</strong><span>Estados Unidos</span></li>
<li><strong>Formado en:</strong><span>Vilanova</span></li>
<li><strong>Draft:</strong><span>2006 / Posicion 24º</span></li>
</div>
</ul>
</div>
<p><strong>TRAYECTORIA NBA</strong></p>
<span>Temporadas:</span><span>12</span>
<br />
<span>Playoffs:</span><span>6</span>
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
<td>32,2</td>
<td>16,2</td>
<td>5,6</td>
<td>6,9</td>
<td>43</td>
<td>40</td>
<td>85</td>

</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>31,1</td>
<td>14,4</td>
<td>4,2</td>
<td>5,9</td>
<td>42</td>
<td>37</td>
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
<td>36,1</td>
<td>17,4</td>
<td>4,3</td>
<td>8,5</td>
<td>51</td>
<td>44</td>
<td>81</td>


</tr>
<tr>
<td><strong>Carrera</strong></td>
<td>33,6</td>
<td>15,3</td>
<td>4,1</td>
<td>5,4</td>
<td>41</td>
<td>34</td>
<td>79</td>
</tr>
</table>
</body>
<?php
?>
</html>