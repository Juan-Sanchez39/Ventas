<?php
    $us=$_POST['user'];
    $con=$_POST['pass'];

    if ($us == "Juan" && $con == "123") {
        echo '<script lenguage="javascript">';
        echo 'alert("Usuario y Contraseña Correcta")
        window.location="page1.php"
        </script>';
    }else{
        echo '<script lenguage="javascript">';
        echo 'alert("Usuario y Contraseña Incorrecta")
        window.location="index.php"
        </script>';
    }
?>