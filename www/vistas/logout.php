<?php
if(isset($_COOKIE['cookieProyecto'])){
    unset($_COOKIE['cookieProyecto']);
    setcookie("cookieProyecto","sesion",time()+ -1,"/",".proyecto.test");
    header("Location: /");
}
?>