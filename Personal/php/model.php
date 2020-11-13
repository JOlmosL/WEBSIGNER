<?php


function conectar() {
    $conexion_bd = mysqli_connect("localhost","root","","gigis_db");
    
    if ($conexion_bd == NULL) {
        die("No se pudo conectar a la base de datos");
    }
    
    $conexion_bd->set_charset("utf8");
    
    return $conexion_bd;
}

function desconectar($conexion_bd) {
    mysqli_close($conexion_bd);
}

//para las opciones 
function select($name, $tabla, $id="id", $nombre="nombre") {
    $resultado = '<select id="'.$name.'"  name="'.$name.'" class="browser-default">';
    $resultado .= '<option value="" disabled selected>Selecciona un '.$tabla.'</option>';
    $conexion_bd = conectar();
    
    $consulta = 'SELECT '.$id.', '.$nombre.' FROM '.$tabla.' ORDER BY '.$nombre.' ASC';
    $resultados_consulta = $conexion_bd->query($consulta);  
    
    while ($row = mysqli_fetch_array($resultados_consulta, MYSQLI_BOTH)) {
        
        $resultado .= '<option value="'.$row[$id].'">'.$row[$nombre].'</option>';
    }
    
    mysqli_free_result($resultados_consulta); //Liberar la memoria
    
    $resultado .= '</select><label>'.$tabla.'</label>';
    
    desconectar($conexion_bd);
    return $resultado;
}

function tabla_personal( $criterio= "" ) {
    
    $consulta = 'SELECT P.IdPersonal as IdPersonal, P.NombrePersonal as NombrePersonal, P.TelefonoPersonal as TelefonoPersonal, P.CorreoPersonal as CorreoPersonal, DATE_FORMAT(P.FechaInicioLaboral,"%d/%m/%Y") as FechaInicioLaboral, DATE_FORMAT(P.FechaFinLaboral,"%d/%m/%Y") as FechaFinLaboral';
    $consulta .= ' FROM Personal P ';
 //   $consulta .= 'WHERE  t.Id = acusa.acusador_id AND s.Id = acusa.acusado_id';
    if($criterio != ""){
        $consulta .= 'WHERE  NombrePersonal LIKE "%'.$criterio.'%" OR TelefonoPersonal lIKE "%'.$criterio.'%" OR CorreoPersonal lIKE "%'.$criterio.'%" ';

    }
    $consulta .= ' ORDER BY NombrePersonal ASC';
    
    $conexion_bd = conectar();
    $resultados_consulta = $conexion_bd->query($consulta);  
 //   var_dump($consulta);
    $resultado = '<table id="personal" class="table table-hover table-condensed table-bordered">';
    $resultado .= '<thead class="bg-warning"><tr><th>Nombre completo</th><th>Teléfono</th><th>Correo electrónico</th><th>Inicio de colaboración</th><th>Fin de colaboración</th><th>Documentos</th><th>Editar</th><tr></thead>';
    
    while ($row = mysqli_fetch_array($resultados_consulta, MYSQLI_ASSOC)) { 
        //$resultado .= '<td>'.$row["IdPersonal"].'</td>';
        $resultado .= '<td>'.$row["NombrePersonal"].'</td>';
        $resultado .= '<td>'.$row["TelefonoPersonal"].'</td>';
        $resultado .= '<td>'.$row["CorreoPersonal"].'</td>';
        $resultado .= '<td>'.$row["FechaInicioLaboral"].'</td>';
        $resultado .= '<td>'.$row["FechaFinLaboral"].'</td>';
        $resultado .= '<td><a href="subirArchivos.php?id='.$row["IdPersonal"].'">Documentos</a></td>';
       /*$resultado .= '<td><a href= "'.$row["ContratoPersonal"].'" target= "_blank">Contrato</a></td>';
        $resultado .= '<td><a href= "'.$row["INEPersonal"].'" target= "_blank">INE</a></td>';
        $resultado .= '<td><a href= "'.$row["DomicilioPersonal"].'" target= "_blank">Domicilio</a></td>';
        $resultado .= '<td> <a href= "'.$row["RespaldoPersonal"].'" target= "_blank">Respaldo</a></td>';*/
     
        $resultado .= '<td>'. '<a class="btn btn-secondary" href="editarPersonal.php?id='.$row["IdPersonal"].'"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>'.'</td>';

        $resultado .= '</tr>';
    }
    
    mysqli_free_result($resultados_consulta); //Liberar la memoria
    
    $resultado .= '</table>';
    
    desconectar($conexion_bd);
    return $resultado;
}


function get_personal($id){
    $consulta = 'SELECT P.IdPersonal as IdPersonal, P.NombrePersonal as NombrePersonal, P.TelefonoPersonal as TelefonoPersonal, P.CorreoPersonal as CorreoPersonal, DATE_FORMAT(P.FechaInicioLaboral,"%d/%m/%Y") as FechaInicioLaboral, DATE_FORMAT(P.FechaFinLaboral,"%d/%m/%Y") as FechaFinLaboral';
    $consulta .= ' FROM Personal P ';
 //   $consulta .= 'WHERE  t.Id = acusa.acusador_id AND s.Id = acusa.acusado_id';
  
    $consulta .= 'WHERE  P.IdPersonal ='.$id.'';

    

    
    $conexion_bd = conectar();
    $resultados_consulta = $conexion_bd->query($consulta);  
        
    $persona = mysqli_fetch_array($resultados_consulta, MYSQLI_ASSOC); 
   
    mysqli_free_result($resultados_consulta); //Liberar la memoria
    
    
    desconectar($conexion_bd);
    return $persona;



}




function insertar_personal($nombre, $telefono, $correo,  $fechai,  $fechaf) {
     
    $conexion_bd = conectar();
    // INSERT INTO `personal` (`IdPersonal`, `NombrePersonal`, `TelefonoPersonal`, `CorreoPersonal`, `Privilegio`, `FechaInicioLaboral`, `Contrato`, `Respaldo`) VALUES (NULL, 'Sebas', '9678523', 'seba@hotmail.com', '3', '12/10/20', NULL, NULL); `FechaInicioLaboral`, `FechaFinLaboral` , ?, ?  , $_POST['fechaicolab'], $_POST['fechafcolab']$fechaicolab, $fechafcolab
    $consulta = "INSERT INTO `personal` (`NombrePersonal`, `TelefonoPersonal`, `CorreoPersonal`,`FechaInicioLaboral`, `FechaFinLaboral`) VALUES (?, ? , ?, ?, ?)";
    
    if(!($statement = $conexion_bd->prepare($consulta))) {
        die("Error(".$conexion_bd->errno."): ".$conexion_bd->error);
    }
    
    if(!($statement->bind_param("sssss",$nombre, $telefono, $correo,  $fechai,  $fechaf))) {
        die("Error de vinculación(".$statement->errno."): ".$statement->error);
    }
    
    if(!$statement->execute()) {
        die("Error en ejecución de la consulta(".$statement->errno."): ".$statement->error);
    }
    
    desconectar($conexion_bd);
}

//insertar_personal('Pikachu', '9678103', 'poke@hotmail.com', '11/11/20', '12/11/21');

function eliminar_personal($id ) {
     
    $conexion_bd = conectar();
    
    $consulta = "DELETE FROM `personal` WHERE IdPersonal = ?";
    
    if(!($statement = $conexion_bd->prepare($consulta))) {
        die("Error(".$conexion_bd->errno."): ".$conexion_bd->error);
    }
    
    if(!($statement->bind_param("s",$id))) {
        die("Error de vinculación(".$statement->errno."): ".$statement->error);
    }
    
    if(!$statement->execute()) {
        die("Error en ejecución de la consulta(".$statement->errno."): ".$statement->error);
    }
    
    desconectar($conexion_bd);
}

//eliminar_personal('7');
//UPDATE `personal` SET `NombrePersonal` = 'Pol', `TelefonoPersonal` = '9678593', `CorreoPersonal` = 'pol@hotmail.com', `FechaInicioLaboral` = '2018-10-20', `FechaFinLaboral` = '2022-10-20' WHERE `personal`.`IdPersonal` = 4;


function actualizar_personal($id, $nombre, $telefono, $correo, $fechai, $fechaf ) {
     
    $conexion_bd = conectar();
    
    $consulta = "UPDATE `personal` SET `NombrePersonal` = ?, `TelefonoPersonal` = ?, `CorreoPersonal` = ?, `FechaInicioLaboral` = ?, `FechaFinLaboral`= ? WHERE IdPersonal = ?";
    
    if(!($statement = $conexion_bd->prepare($consulta))) {
        die("Error(".$conexion_bd->errno."): ".$conexion_bd->error);
    }
    
    if(!($statement->bind_param("ssssss",  $nombre, $telefono, $correo, $fechai, $fechaf, $id,))) {
        die("Error de vinculación(".$statement->errno."): ".$statement->error);
    }
    
    if(!$statement->execute()) {
        die("Error en ejecución de la consulta(".$statement->errno."): ".$statement->error);
    }
    
    desconectar($conexion_bd);
}

//actualizar_personal('10','CMLL','9678103', 'poke@hotmail.com', '11/11/20', '12/11/21');




function tabla_archivo( $criterio= "" ) {
    
    $consulta = 'SELECT P.IdPersonal as IdPersonal, P.NombrePersonal as NombrePersonal, P.TelefonoPersonal as TelefonoPersonal, P.CorreoPersonal as CorreoPersonal, DATE_FORMAT(P.FechaInicioLaboral,"%d/%m/%Y") as FechaInicioLaboral, DATE_FORMAT(P.FechaFinLaboral,"%d/%m/%Y") as FechaFinLaboral, P.ContratoPersonal as ContratoPersonal, P.INEPersonal as INEPersonal, P.DomicilioPersonal as DomicilioPersonal, P.RespaldoPersonal as RespaldoPersonal';
    $consulta .= ' FROM Personal P ';
 //   $consulta .= 'WHERE  t.Id = acusa.acusador_id AND s.Id = acusa.acusado_id';
    if($criterio != ""){
        $consulta .= 'WHERE  NombrePersonal LIKE "%'.$criterio.'%" OR TelefonoPersonal lIKE "%'.$criterio.'%" OR CorreoPersonal lIKE "%'.$criterio.'%" ';

    }
    $consulta .= ' ORDER BY NombrePersonal ASC';
    
    $conexion_bd = conectar();
    $resultados_consulta = $conexion_bd->query($consulta);  
 //   var_dump($consulta);
    $resultado = '<table id="personal" class="table table-hover table-condensed table-bordered">';
    $resultado .= '<thead class="bg-warning"><tr><th>Referencia del Archivo</th><th>Nombre del archivo</th><th>Subido</th><th>Descargar</th><tr></thead>';
    
    while ($row = mysqli_fetch_array($resultados_consulta, MYSQLI_ASSOC)) { 
        //$resultado .= '<td>'.$row["IdPersonal"].'</td>';
        $resultado .= '<td>'.$row["NombrePersonal"].'</td>';
        $resultado .= '<td>'.$row["TelefonoPersonal"].'</td>';
        $resultado .= '<td>'.$row["CorreoPersonal"].'</td>';
        $resultado .= '<td>'.$row["FechaInicioLaboral"].'</td>';
        $resultado .= '<td>'.$row["FechaFinLaboral"].'</td>';
        $resultado .= '<td>'. '<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg>'.'</td>';

        $resultado .= '</tr>';
    }
    
    mysqli_free_result($resultados_consulta); //Liberar la memoria
    
    $resultado .= '</table>';
    
    desconectar($conexion_bd);
    return $resultado;
}
//acusa(5,6);
//echo tabla_personal();
?>