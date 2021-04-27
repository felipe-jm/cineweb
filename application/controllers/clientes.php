<?php

require_once APP . 'models/cliente.php';

class Clientes
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/clientes
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/clientes/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/clientes/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/clientes/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action clientes/criarCliente
   */
  public function criarCliente()
  {
    // Se tiver dados no POST cria nova cidade
    if (isset($_POST['criarCliente'])) {
      Cidade::add($_POST['nome']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'clientes/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/clientes/editar/:id
   * @param int $cidade_id
   */
  public function editar($cidade_id)
  {
    if (isset($cidade_id)) {
      // load cidade
      $cidade = Cidade::get($cidade_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/clientes/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'clientes/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action clientes/editarCliente
   * 
   */
  public function editarCliente()
  {
    // Se tiver dados no POST cria nova cidade
    if (isset($_POST['editarCliente'])) {
      Cidade::update($_POST['nome'], $_POST['unidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'clientes/index');
  }
}
