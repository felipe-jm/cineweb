<?php


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
}
