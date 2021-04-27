<?php

require_once APP . 'models/funcionario.php';

class Funcionarios
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/funcionarios
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/funcionarios/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/funcionarios/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/funcionarios/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action funcionarios/criarFuncionario
   */
  public function criarFuncionario()
  {
    // Se tiver dados no POST cria nova funcionario
    if (isset($_POST['criarFuncionario'])) {
      Funcionario::add($_POST['nome'], $_POST['cpf'], $_POST['unidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'funcionarios/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/funcionarios/editar/:id
   * @param int $funcionario_id
   */
  public function editar($funcionario_id)
  {
    if (isset($funcionario_id)) {
      // load funcionario
      $funcionario = Funcionario::get($funcionario_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/funcionarios/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'funcionarios/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action funcionarios/editarFuncionario
   */
  public function editarFuncionario()
  {
    // Se tiver dados no POST cria nova funcionario
    if (isset($_POST['editarFuncionario'])) {
      Funcionario::update($_POST['nome'], $_POST['cpf'], $_POST['unidade_id'], $_POST['funcionario_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'funcionarios/index');
  }
}
