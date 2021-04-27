<?php


class Comidas
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/comidas
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/comidas/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
