<?php


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
}
