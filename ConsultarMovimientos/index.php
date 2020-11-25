<?php 
  require_once("php/model.php");

  session_start();
  limpiar_entradas();

  include("_header.html");
  include("../Navbar/_headernavbar.html");
  include("../Navbar/_navbar.html");
  include("_container.html");
  include("_modal_registrar.html");
  include("_boton_registrar.html");

  include("_tabla_personal.html");
  include("TProductos.php");
  include("_endcontainer.html");
  include("_footer.html"); 
 ?>