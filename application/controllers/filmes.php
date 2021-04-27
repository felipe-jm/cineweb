<?php

require_once APP . 'models/filme.php';

class Filmes
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/filmes
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/filmes/index.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * PAGE: criar
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/filmes/criar
   */
  public function criar()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/filmes/criar.php';
    require APP . 'views/_templates/footer.php';
  }

  /**
   * ACTION: criarFilme
   * Este método é executado ao realizar o submit de um formulário com a action filmes/criarFilme
   */
  public function criarFilme()
  {
    // Se tiver dados no POST cria novo filme
    if (isset($_POST['criarFilme'])) {
      Filme::add($_POST['nome'], $_POST['duracao'], $_POST['unidade_id'], $_POST['sessao_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'filmes/index');
  }

  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/filmes/editar/:id
   * @param int $filme_id
   */
  public function editar($filme_id)
  {
    if (isset($filme_id)) {
      // load filme
      $filme = Filme::get($filme_id);

      // load views
      require APP . 'views/_templates/header.php';
      require APP . 'views/filmes/editar.php';
      require APP . 'views/_templates/footer.php';
    } else {
      header('location: ' . URL_WITH_INDEX_FILE . 'filmes/index');
    }
  }

  /**
   * ACTION: novo
   * Este método é executado ao realizar o submit de um formulário com a action filmes/editarFilme
   * 
   */
  public function editarFilme()
  {
    // Se tiver dados no POST cria novo filme
    if (isset($_POST['editarFilme'])) {
      Filme::update($_POST['nome'], $_POST['duracao'], $_POST['unidade_id'], $_POST['sessao_id'], $_POST['filme_id']);
    }

    // redireciona após criação
    header('location: ' . URL_WITH_INDEX_FILE . 'filmes/index');
  }
}
