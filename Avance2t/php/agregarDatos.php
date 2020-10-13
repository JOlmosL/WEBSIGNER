<?php 
    require_once "conection.php"
    $n=$POST_['NombrePersonal'];
    $t=$POST_['TelefonoPersonal'];
    $c=$POST_['CorreoPersonal'];
    $p=$POST_['Privilegio'];
    $f=$POST_['FechaInicioLaboral'];

    $sql= "INSERT into personal(NombrePersonal, TelefonoPersonal, CorreoPersonal, Privilegio, FechaInicioLaboral)
                                values('$n','$t','$c','$p','$f')";

    echo $result=mysqli_query($conexion,$sql);


 ?>