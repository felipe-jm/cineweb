<?php


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
}
