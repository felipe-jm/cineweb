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
   * ACTION: criarCliente
   * Este método é executado ao realizar o submit de um formulário com a action clientes/criarCliente
   */
  public function criarCliente()
  {
    // Se tiver dados no POST cria novo cliente
    if (isset($_POST['criarCliente'])) {
      Cliente::add($_POST['nome'], $_POST['unidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'clientes/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/clientes/editar/:id
   * @param int $cliente_id
   */
  public function editar($cliente_id)
  {
    if (isset($cliente_id)) {
      // load cliente
      $cliente = Cliente::get($cliente_id);

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
    // Se tiver dados no POST cria novo cliente
    if (isset($_POST['editarCliente'])) {
      Cliente::update($_POST['nome'], $_POST['unidade_id'], $_POST['cliente_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'clientes/index');
  }

  /**
   * ACTION: deletarCliente
   * Este método é executado ao realizar o submit de um formulário com a action clientes/deletarCliente
   * 
   */
  public function deletarCliente($cliente_id)
  {
    if (isset($cliente_id)) {
      Cliente::delete($cliente_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'clientes/index');
  }
}
