<?php

require_once APP . 'models/comida.php';

class Comidas
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/comidas
   */
  public function index()
  {
    $comidas = Comida::all();

    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/comidas/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/comidas/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/comidas/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarComida
   * Este método é executado ao realizar o submit de um formulário com a action comidas/criarComida
   */
  public function criarComida()
  {
    // Se tiver dados no POST cria nova comida
    if (isset($_POST['criarComida'])) {
      Comida::add($_POST['nome'], $_POST['unidade_id'], $_POST['peso'], $_POST['preco']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'comidas/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/comidas/editar/:id
   * @param int $comida_id
   */
  public function editar($comida_id)
  {
    if (isset($comida_id)) {
      // load comida
      $comida = Comida::get($comida_id);
      $unidade_id = $comida->unidade_id;

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/comidas/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'comidas/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action comidas/editarComida
   * 
   */
  public function editarComida()
  {
    // Se tiver dados no POST cria nova comida
    if (isset($_POST['editarComida'])) {
      Comida::update($_POST['nome'], $_POST['unidade_id'], $_POST['comida_id'], $_POST['peso'], $_POST['preco']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'comidas/index');
  }

  /**
   * ACTION: deletarComidas
   * Este método é executado ao realizar o submit de um formulário com a action comidas/deletarComidas
   * 
   */
  public function deletarComidas($comida_id)
  {
    if (isset($comida_id)) {
      Comida::delete($comida_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'comidas/index');
  }
}
