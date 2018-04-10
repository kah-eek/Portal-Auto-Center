<!-- CRUD SOBRE  A EMPRESA -->
<?php

  $controller = $_GET["controller"];
  $modo = $_GET["modo"];

  //VERIFICA QUAL CONTROLLER SERÁ UTILIZADA
  switch ($controller)
  {
    case 'empresa'

    require_once("./controllers/SobreEmpresa_class.php");
    require_once("./model/cms_SobreEmpresa.php");

    switch ($modo) {
      case 'novo':
        $empresa_controller = new EmpresaController();

        $empresa_controller->novo();
        break;
      case 'editar'
    }
  }
 ?>
