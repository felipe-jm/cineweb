<?php

require_once APP . 'models/promocao.php';

class Promocoes
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/promocoes
   */
  public function index()
  {
    $promocoes = Promocao::all();

    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/promocoes/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/promocoes/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/promocoes/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarPromocao
   * Este método é executado ao realizar o submit de um formulário com a action promocoes/criarPromocao
   */
  public function criarPromocao()
  {
    // Se tiver dados no POST cria nova promocao
    if (isset($_POST['criarPromocao'])) {
      Promocao::add($_POST['nome'], $_POST['data_fim'], $_POST['unidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'promocoes/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/promocoes/editar/:id
   * @param int $promocao_id
   */
  public function editar($promocao_id)
  {
    if (isset($promocao_id)) {
      // load promocao
      $promocao = Promocao::get($promocao_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/promocoes/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'promocoes/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action promocoes/editarPromocao
   * 
   */
  public function editarPromocao()
  {
    // Se tiver dados no POST cria nova promocao
    if (isset($_POST['editarPromocao'])) {
      Promocao::update($_POST['nome'], $_POST['data_fim'], $_POST['unidade_id'], $_POST['promocao_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'promocoes/index');
  }

  /**
   * ACTION: deletarPromocao
   * Este método é executado ao realizar o submit de um formulário com a action promocoes/deletarPromocao
   * 
   */
  public function deletarPromocao($promocao_id)
  {
    if (isset($promocao_id)) {
      Promocao::delete($promocao_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'promocoes/index');
  }
}
