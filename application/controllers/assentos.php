<?php

require_once APP . 'models/assento.php';

class Assentos
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/assentos
   */
  public function index()
  {
    $assentos = Assento::all();

    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/assentos/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/assentos/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/assentos/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarAssento
   * Este método é executado ao realizar o submit de um formulário com a action assentos/criarAssento
   */
  public function criarAssento()
  {
    // Se tiver dados no POST cria novo assento
    if (isset($_POST['criarAssento'])) {
      $disponivel = isset($_POST['disponivel']) ? 1 : 0;
      Assento::add($_POST['numero'], $_POST['unidade_id'], $_POST['cliente_id'], $_POST['sessao_id'], $disponivel);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'assentos/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/assentos/editar/:id
   * @param int $assento_id
   */
  public function editar($assento_id)
  {
    if (isset($assento_id)) {
      // load assento
      $assento = Assento::get($assento_id);
      $unidade_id = $assento->unidade_id;
      $cliente_id = $assento->cliente_id;
      $sessao_id = $assento->sessao_id;

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/assentos/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'assentos/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action assentos/editarAssento
   * 
   */
  public function editarAssento()
  {
    // Se tiver dados no POST cria novo assento
    if (isset($_POST['editarAssento'])) {
      $disponivel = isset($_POST['disponivel']) ? 1 : 0;
      Assento::update($_POST['numero'], $_POST['unidade_id'], $_POST['cliente_id'], $_POST['assento_id'], $disponivel);
    }

    // redireciona após criação
    // header('location: ' . URL_WITH_INDEX_FILE . 'assentos/index');
  }

  /**
   * ACTION: deletarAssento
   * Este método é executado ao realizar o submit de um formulário com a action assentos/deletarAssento
   * 
   */
  public function deletarAssento($assento_id)
  {
    if (isset($assento_id)) {
      Assento::delete($assento_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'assentos/index');
  }
}
