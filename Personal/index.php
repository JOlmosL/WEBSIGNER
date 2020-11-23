<?php 

  require_once("php/model.php");


  session_start();
  limpiar_entradas();
  

  include("_header.html");
  include("../Navbar/_headernavbar.html");
  include("../Navbar/_navbar.html");
  include("_container.html"); 
  if ($_SESSION['eliminado']==true){
    include("_mensaje_de_usuario_eliminado.html");
  }
  if ($_SESSION['actualizado']==true){
    include("_mensaje_de_usuario_actualizado.html");
  }
  include("_modal_registrar.html");
  include("_boton_registrar.html");
  include("_barra_de_busqueda.html");

  include("_tabla_personal.html");

  include("_endcontainer.html");
  include("_footer.html");
  $_SESSION['eliminado']=false; 
  $_SESSION['actualizado']=false;


 ?>