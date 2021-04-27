<?php


class Promocoes
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/promocoes
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/promocoes/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
