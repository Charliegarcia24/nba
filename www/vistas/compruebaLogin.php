<?php
$user = trim($_POST['nick']);
$password = $_POST['password'];
$hashedPassword =md5($password);
$archivo = fopen("ficheros/usuarios.txt","r+");
$lines = file("ficheros/usuarios.txt");
$tamanyo = sizeof($lines);
  for($i = 0; $i < $tamanyo;$i++){
    $usuarioTroceado = explode(";",$lines[$i]);
    for($j=0;$j < sizeof($usuarioTroceado);$j++){
    if($usuarioTroceado[$j]==$user && $usuarioTroceado[$j+1]==$hashedPassword){
      $imagen = $usuarioTroceado[$j+2];
      $i = $tamanyo;
      setcookie("cookieProyecto","sesion",time()+ (86400*7),"/",".proyecto.test");
      session_start();
      $_SESSION['imagen'] = $imagen;
      header("Location: http://proyecto.test");
    } else {
      echo "Has introducido un dato erroneo";
    }
  }
  }
 

?>