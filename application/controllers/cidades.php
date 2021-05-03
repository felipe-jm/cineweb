<?php

require_once APP . 'models/cidade.php';

class Cidades
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/cidades/criar
   */
  public function index()
  {
    $cidades = Cidade::all();

    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/cidades/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/cidades/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/cidades/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarCidade
   * Este método é executado ao realizar o submit de um formulário com a action cidades/criarCidade
   */
  public function criarCidade()
  {
    // Se tiver dados no POST cria nova cidade
    if (isset($_POST['criarCidade'])) {
      Cidade::add($_POST['nome']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'cidades/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/cidades/editar/:id
   * @param int $cidade_id
   */
  public function editar($cidade_id)
  {
    if (isset($cidade_id)) {
      // load cidade
      $cidade = Cidade::get($cidade_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/cidades/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'cidades/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action cidades/editarCidade
   * 
   */
  public function editarCidade()
  {
    // Se tiver dados no POST cria nova cidade
    if (isset($_POST['editarCidade'])) {
      Cidade::update($_POST['nome'], $_POST['cidade_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'cidades/index');
  }

  /**
   * ACTION: deletarCidade
   * Este método é executado ao realizar o submit de um formulário com a action cidades/deletarCidade
   * 
   */
  public function deletarCidade($cidade_id)
  {
    if (isset($cidade_id)) {
      Cidade::delete($cidade_id);
    }

    header('location: ' . URL_WITH_INDEX_FILE . 'cidades/index');
  }
}
