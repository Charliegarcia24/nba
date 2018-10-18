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
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
<h1>HISTORIA SOBRE TORONTO RAPTORS    <img src="<?=ROOT . DT . IMAGENES . "logo2.png"?>"/> </h1>
</head>
<body>
<p>Los Toronto Raptors se fundaron el 30 de septiembre de 1993, cuando la NBA decidió ampliar 
las fronteras y permitir equipos canadienses. Se convirtió en la franquicia número 28 de la liga, 
siendo el primer equipo profesional de baloncesto de la ciudad de Toronto desde la desaparición 
de los Toronto Huskies en los años 40.</p>
<p>Un concurso a nivel nacional ayudó a elegir el nombre de la franquicia y el logo del equipo. 
Entre los 10 finalistas había una gran mayoría de nombres de animales, como los Beavers (castores), pero finalmente, 
influidos por la popularidad en aquellas fechas de la película Jurassic Park, se decidió por el apodo del extinto animal. 
El 15 de mayo de 1994, su primer mánager general, el exjugador Isiah Thomas, presentaba ante los medios el nombre y el logotipo. 
Los colores elegidos fueron el rojo, el morado, el negro y el plateado, 
elegidos como homenaje al inventor del baloncesto, el canadiense James Naismith. 
</p>
<p>
Como general manager, Thomas se rodeó de gente de confianza para los puestos de responsabilidad del equipo, 
ofreciéndole al entrenador asistente de los Detroit Pistons, Brendan Malone, el puesto de entrenador principal. 
El equipo se completó mediante un Draft de expansión en el cual los dos equipos nuevos podían elegir los descartes 
de equipos del resto de la liga. Una moneda al aire decidió que fuera Toronto quien eligiera primero, 
escogiendo a B. J. Armstrong, un especialista en tiros de 3 puntos. Este, sin embargo, 
rehusó jugar en Canadá, siendo traspasado a Golden State Warriors a cambio de Carlos Rogers y Victor Alexander. 
Thomas seleccionó también un buen grupo de veteranos de la liga, como Jerome Kersey,
Willie Anderson o su excompañero en los Pistons John "La Araña" Salley. 
</p>
<p>
Después vendría el Draft de la NBA de 1995, en el cual elegían en segunda posición, 
haciéndose con Damon Stoudamire, un base anotador de la Universidad de Arizona, 
alrededor del cual Thomas quiso construir la franquicia. Fueron muchos los aficionados que criticaron esta decisión, 
pero pronto tuvieron que callar. En su partido inaugural, Stoudamire hizo 10 puntos y dio 10 asistencias, 
para derrotar a los New Jersey Nets, y acabó la temporada siendo nombrado Rookie del Año, 
tras promediar 19 puntos y 9,3 asistencias por partido. El equipo acabó la temporada con un récord de 21-61, 
aunque pueden presumir de ser uno de los pocos equipos que batieron a los Chicago Bulls aquel año, 
que acabó esa temporada con el segundo mejor registro de la historia de la NBA, 
con 72 partidos ganados por tan solo 10 perdidos. 
</p>
<p>
La ubicación de los toronto se situa en Toronto, Ontario,Canadá
</p>
<p>
<b>Pabellones</b>    
</p>
<ul>
<li>Rogers Centre (1995-1999)</li>
<li>Scotiabank Arena (antes llamado Air Canada Centre) (1999-presente)</li>
</ul>
<p>
La asistencia a los partidos creció durante la temporada 1996-97, 
y el equipo mejoró su récord consiguiendo 9 victorias más que el año anterior.
En el Draft de 1997 seleccionaron en la segunda posición al pívot Marcus Camby. 
Al finalizar la temporada, Camby se hizo un hueco en el mejor quinteto de rookies del año, 
mientras Stoudamire continuó jugando bien, promediando 20,2 puntos y 8,8 asistencias por partido. 
Al igual que en la temporada anterior, los Raptors consiguieron victorias contra equipos que, a la postre, 
estarían en las rondas finales de los play-offs, como las logradas ante Chicago Bulls, los campeones, 
pero también ante los otros tres finalistas de Conferencia, Houston Rockets, Utah Jazz y Miami Heat. sin embargo, 
con los equipos en horas bajas las cosas eran muy distintas, como lo demuestran las tres derrotas sufridas ante Boston Celtics, 
que acabó el año con un récord de 15 victorias por 65 derrotas.
</p>
<p>
Durante el Draft de 1998 se produjo un movimiento decisivo para la franquicia. 
Traspasaron a Antawn Jamison, elegido en la cuarta posición, 
a Golden State Warriors, a cambio de Vince Carter, que había sido elegido quinto.
Para dar más credibilidad al equipo, traspasaron a Camby a New York Knicks a cambio del veterano y experimentado Charles Oakley,
que podía guiar a los jóvenes valores de la plantilla. Junto a Oakley llegó también Kevin Willis, 
otro ilustre veterano, que fortalecería la posición de pívot, 
mientras que las posiciones exteriores se cubrían rotando a Dee Brown, 
Alvin Williams y Doug Christie, aunque el equipo finalmente no logró entrar en los play-offs, 
con un porcentaje de victorias del 46 %,las perspectivas se tornaron optimistas,con la evolución del siempre imprevisible Carter, 
nombrado esa temporada Rookie del año, y con el futuro all star McGrady. 
</p>
<p>
En el Draft de 1999, creyendo que los Raptors tenían una significativa carencia de unos hombres altos que impusieran, 
el equipo traspasó su primera elección en el draft, Jonathan Bender, a cambio del veterano pívot de los 
Indiana Pacers Antonio Davis. La rotación de éste en los puestos cercanos al aro, junto a Oakley y Willis, 
combinada con la adquisición de madurez de los hombres de fuera como Carter o McGrady, 
hicieron que en el año 2000 alcanzaran por primera vez en la historia de la franquicia los play-offs, 
algo que ya había prometido Carter a sus seguidores la temporada anterior.​ 
Sin embargo pagaron la novatada, ya que fueron barridos en primera ronda por los New York Knicks por un contundente 3-0. 
A pesar de ello, y gracias también a que Vince Carter ganó el Concurso de mates en el All-Star Weekend de 2000, 
el público fue en aumento. Esa temporada fue también la primera que jugaron completa en el Air Canada Centre, 
después de que el SkyDome se les quedara pequeño. 
Al final de la temporada regular, consiguieron un balance de 45 victorias por 37 derrotas. 
</p>
<p>
Al comienzo de la temporada 2000-01 se hace efectivo el fichaje de Lenny Wilkens como entrenador, 
un hombre con treinta años de experiencia en los banquillos9​ y miembro del Basketball Hall of Fame. 
La plantilla se renueva también, comenzando con la contratación del veterano base Mark Jackson por cuatro temporadas. 
Sin embargo, debido al resurgir de Alvin Williams sobre todo en los momentos clave, 
Jackson es traspasado a los Knicks a mitad de temporada, para dar más minutos a Williams. 
Vince Carter pasaría a jugar de escolta en detrimento de Doug Christie, que sería traspasado a cambio de Corliss Williamson. 
Éste no tuvo una buena temporada, siendo traspasado posteriormente a cambio del buen defensor Jerome Williams. 
Aunque McGrady y Carter mostraron la misma progresión al mismo tiempo, 
la prensa y los aficionados pusieron toda su atención en este último, 
y como consecuencida de ello T-Mac fue finalmente traspasado a Orlando Magic al finalizar la temporada,
a cambio de una primera elección en el draft.
</p>
<p>
<b>Jugadores Destacados</b>    
</p>
<ul>
<li>Vince Carter (1998-2005)</li>
<li>Chris Bosh (2003-2010)</li>
<li>DeMar DeRozan (2009-2018)</li>
</ul>
<?php

?>
</body>
</html>