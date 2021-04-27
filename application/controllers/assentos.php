<?php


class Assentos
{
  /**
   * PAGE: index
   * Este método é acessado ao acessar -> http://localhost/cineweb/index.php/assentos
   */
  public function index()
  {
    // load views
    require APP . 'views/_templates/header.php';
    require APP . 'views/assentos/index.php';
    require APP . 'views/_templates/footer.php';
  }
}
