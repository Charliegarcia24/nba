<html>
<head>
</head>
<body>
<?php
$logged =false;
session_start();
$userName = null;
$avatar = null;
function compruebaLogin(){
    $contenido = $_COOKIE["inicio"]; 
    $avatar = $_SESSION["imagen"];
}
compruebaLogin();
$matchesParams = array();
$routes = include "routes.php";
include "config.php";
$page = null;
$uri = trim($_SERVER["REQUEST_URI"],"/");

foreach($routes["routes"] as $currentRoute){
    $route = trim($currentRoute["route"],"/");
    $routerPattern = "#^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/','([a-zA-Z0-9\-\_]+)', preg_quote($route)) . "$#D";
    $matchesParams = array();
    if(preg_match_all($routerPattern, $uri, $matchesParams)){
        //var_dump($matchesParams);
        $keys = array();
        $params = array();
    
        array_shift($matchesParams);
    
        preg_match_all('/\\:([a-zA-Z0-9\_\-]+)/',$route,$keys);
    
        array_shift($keys);
    
        for($i = 0; $i < count($keys[0]); $i++){
            $params[$keys[0][$i]] = $matchesParams[$i][0];
        }
        $page = $currentRoute["page"];
    }
    /*if ($route == $uri){
        $page = $currentRoute["page"];
        break;
    }*/
}

if($page == null){
    include_once (VISTAS . $routes["error"]);  
}
include_once (VISTAS . $page); 
?>
</body>
</html>