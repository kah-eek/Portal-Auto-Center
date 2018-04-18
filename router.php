<!-- CRUD SOBRE  A EMPRESA -->
<?php

  $controller = $_GET["controller"];
  $modo = $_GET["modo"];

  //VERIFICA QUAL CONTROLLER SERÁ UTILIZADA
  switch ($controller)
  {
    case 'empresa'

    require_once("./controller/SobreEmpresa_class.php");
    require_once("./model/SobreEmpresaDAO.php");

    switch ($modo) {
      case 'novo':
        $empresa_controller = new EmpresaController();

        $empresa_controller->novo();
        break;
      case 'editar':
        $empresa_controller = new EmpresaController();

        $empresa_controller->editar();

        require_once("modal_cms_empresa.php");

        break;
      case 'excluir':
        $empresa_controller = new EmpresaController();

        $empresa_controller->excluir();

        break;
    }
  }
 ?>

 <!-- CRUD CADASTRO PARCEIRO -->
 <?php

  $controllers = $_GET["cont"];
  $modos = $_GET["mod"];

  //VERIFICA QUAL CONTROLLER SERÁ UTILIZADA
  switch($controllers)
  {
    case 'parceiro'

    require_once("./controller/Parceiro_class.php");
    require_once(".model/PerceiroDAO.php");

    switch ($modo){
      case 'novo':
      $parceiro_controller = new ParceiroController();

      $parceiro_controller->novo();
      break;
    case 'editar':
      $parceiro_controller = new ParceiroController();

      $parceiro_controller->editar;

      require_once("modal_cad_parceiro");

      break;
    case 'excluir':
    $parceiro_controller = new ParceiroController();

    $parceiro_controller->excluir();

    break;
    }
  }
  ?>
