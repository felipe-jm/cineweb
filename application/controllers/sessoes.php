<?php

require_once APP . 'models/sessao.php';

class Sessoes
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/sessoes
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/sessoes/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/sessoes/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/sessoes/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action sessoes/criarSessao
   */
  public function criarSessao()
  {
    // Se tiver dados no POST cria nova sessao
    if (isset($_POST['criarSessao'])) {
      Sessao::add($_POST['nome'], $_POST['unidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'sessoes/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/sessoes/editar/:id
   * @param int $sessao_id
   */
  public function editar($sessao_id)
  {
    if (isset($sessao_id)) {
      // load sessao
      $sessao = Sessao::get($sessao_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/sessoes/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'sessoes/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action sessoes/editarSessao
   * 
   */
  public function editarSessao()
  {
    // Se tiver dados no POST cria nova sessao
    if (isset($_POST['editarSessao'])) {
      Sessao::update($_POST['nome'], $_POST['unidade_id'], $_POST['sessao_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'sessoes/index');
  }
}
