<?php


class Unidades
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/unidades
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/unidades/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
